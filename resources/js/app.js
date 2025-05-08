import "./bootstrap";
import "simple-datatables/dist/style.css";
import { DataTable } from "simple-datatables";
// In resources/js/app.js

import "flowbite"; // Import Flowbite
import Alpine from "alpinejs"; // Import Alpine.js

window.Alpine = Alpine; // Make Alpine.js available globally
Alpine.start(); // Initialize Alpine.js

//Data-tables
document.addEventListener("DOMContentLoaded", () => {
    const table = document.getElementById("users-table");

    if (table) {
        new DataTable(table, {
            searchable: true,
            perPage: 10,
        });
    }
});

$(document).ready(function () {
    var checkSideWidthCompress = 0;
    var fromMobile = window.innerWidth < 768;
    // Hide and show here
    toggleShow("#search-input", "#search-icon");

    // Function to toggle side-bar visibility
    $("#side-menu").click(function () {
        if (window.innerWidth < 768) {
            $(".top-nav").removeClass("md:left-16").addClass("md:left-64");
            $("#side-nav").removeClass("w-16").addClass("w-64");
            $("#main-content").removeClass("md:ml-16").addClass("md:ml-64");
            $("#side-nav").toggleClass("-translate-x-0 -translate-x-full");
            if ($("#side-nav").hasClass("-translate-x-full")) {
                $(".sidebar-link-text").hide();
                $("#backdrop").addClass("hidden");
            } else {
                showSideText();
                $("#backdrop").removeClass("hidden");
            }
        } else {
            // PC view
            $("#side-nav").toggleClass("w-64 w-16");
            $(".top-nav").toggleClass("md:left-64 md:left-16");
            $("#main-content").toggleClass("md:ml-16 md:ml-64");

            if ($("#side-nav").hasClass("w-16")) {
                $(".sidebar-link-text").hide();
                checkSideWidthCompress = 1;
            } else {
                showSideText();
                checkSideWidthCompress = 0;
            }
        }
    });

    // Function side bar hover
    $("#side-nav").hover(
        function () {
            // When hovering over the side-nav
            if (
                window.innerWidth >= 768 &&
                $("#side-nav").hasClass("w-16") &&
                checkSideWidthCompress
            ) {
                $("#side-nav").removeClass("w-16").addClass("w-64");
                $(".top-nav").removeClass("md:left-16").addClass("md:left-64");
                $("#main-content").removeClass("md:ml-16").addClass("md:ml-64");

                // Show the sidebar links
                showSideText();
            }
        },
        function () {
            // When the mouse leaves the side-nav
            if (
                window.innerWidth >= 768 &&
                $("#side-nav").hasClass("w-64") &&
                checkSideWidthCompress
            ) {
                $("#side-nav").removeClass("w-64").addClass("w-16");
                $(".top-nav").removeClass("md:left-64").addClass("md:left-16");
                $("#main-content").removeClass("md:ml-64").addClass("md:ml-16");

                // Hide the sidebar links again
                $(".sidebar-link-text").hide();
            }
        }
    );

    // Window resize function
    $(window).resize(function () {
        // Get the current screen width
        var screenWidth = window.innerWidth;

        // For side bar
        if (screenWidth < 768 && !fromMobile) {
            hideSideNav();
            $(".sidebar-link-text").hide();
            fromMobile = 1;
        } else if (screenWidth >= 768 && fromMobile) {
            $("#backdrop").addClass("hidden");
            if (!$(".sidebar-link-text").is(":visible")) {
                showSideText();
            }
            fromMobile = 0;
        }
    });

    $(".sort").on("click", function (e) {
        e.preventDefault();

        let table = $(this).closest(".sortableTable").find("tbody"); // Find the closest sortable table
        let rows = table.find("tr").toArray();
        let columnIndex = $(this).data("column");
        let ascending = $(this).data("order") !== "asc";

        // Toggle order
        $(this).data("order", ascending ? "asc" : "desc");

        rows.sort((rowA, rowB) => {
            let cellA = $(rowA)
                .find("td")
                .eq(columnIndex)
                .text()
                .trim()
                .toLowerCase();
            let cellB = $(rowB)
                .find("td")
                .eq(columnIndex)
                .text()
                .trim()
                .toLowerCase();

            return ascending
                ? cellA.localeCompare(cellB)
                : cellB.localeCompare(cellA);
        });

        table.append(rows);
    });

    // Click function
    $(document).click(function (event) {
        if (
            !$(event.target).closest("#side-nav").length &&
            !$(event.target).closest("#side-menu").length
        ) {
            if (window.innerWidth < 768) {
                // Mobile view
                hideSideNav();
                if ($("#side-nav").hasClass("-translate-x-full")) {
                    $(".sidebar-link-text").hide();
                    $("#backdrop").addClass("hidden");
                } else {
                    setTimeout(function () {
                        $(".sidebar-link-text").fadeToggle(300);
                    }, 300);
                }
            }
        }
    });

    // Reusable functions here

    // Function to toggle visibility based on the passed element IDs
    function toggleShow(showHideElement, toShowHideElement) {
        $(toShowHideElement).click(function () {
            if ($(showHideElement).is(":visible")) {
                $(showHideElement).fadeOut(300);
            } else {
                $(showHideElement).fadeIn(300);
            }
        });
    }

    function hideSideNav() {
        $("#side-nav")
            .removeClass("-translate-x-0")
            .addClass("-translate-x-full");
        $("#side-nav").removeClass("w-16").addClass("w-64");
        $(".top-nav").removeClass("md:left-16").addClass("md:left-64");
        $("#main-content").removeClass("md:ml-16").addClass("md:ml-64");
    }

    function showSideText() {
        setTimeout(function () {
            $(".sidebar-link-text").fadeToggle(300);
        }, 300);
    }
});
