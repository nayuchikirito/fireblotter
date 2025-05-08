<div id="side-nav" class="fixed top-0 left-0 w-64 h-full z-50 bg-gray-800 text-white transform -translate-x-full md:translate-x-0 transition-all duration-300 ease-in-out">
    {{-- Logo --}}
    <div style="box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);">
        <x-button.logo-link href="#">
            <div class="flex items-center w-full h-10">
                <img src="{{ Vite::asset('resources/images/logoOnly.png') }}" class="w-auto h-10 ml-3" alt="Logo">
                <img src="{{ Vite::asset('resources/images/logoTextWhite.png') }}" class="sidebar-link-text w-auto h-8" alt="Logo text">
            </div>
        </x-button.logo-link>
    </div>

    {{-- Profile --}}
    <x-sidebar.nav-button href="#" class="border-b border-b-gray-500">
        <div class="px-1 h-10 flex items-center space-x-3">
            <span class="fas fa-thin fa-user w-5"></span>
            <span class="sidebar-link-text">Profile</span>
        </div>
    </x-sidebar.nav-button>

    {{-- Sidebar Buttons --}}
    <div class="p-1 flex flex-col">
        <x-sidebar.nav-button href="#">
            <x-sidebar.icon class="fa-chart-line"></x-sidebar.icon>
            <span class="sidebar-link-text">Dashboard</span>
        </x-sidebar.nav-button>
        <x-sidebar.nav-button href="#">
            <x-sidebar.icon class="fa-fire"></x-sidebar.icon>
            <span class="sidebar-link-text">Fire Incidents</span>
        </x-sidebar.nav-button>
        <x-sidebar.nav-button href="#">
            <x-sidebar.icon class="fa-ambulance"></x-sidebar.icon>
            <span class="sidebar-link-text">Emergency Responses</span>
        </x-sidebar.nav-button>
        <x-sidebar.nav-button href="#">
            <x-sidebar.icon class="fa-file-alt"></x-sidebar.icon>
            <span class="sidebar-link-text">Reports</span>
        </x-sidebar.nav-button>
        <x-sidebar.nav-button href="/users">
            <x-sidebar.icon class="fa-users-gear"></x-sidebar.icon>
            <span class="sidebar-link-text">Users</span>
        </x-sidebar.nav-button>
    </div>

</div>

<div id="backdrop" class="fixed inset-0 bg-gray-500 opacity-50 hidden"></div>
