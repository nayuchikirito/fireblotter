<div class="top-nav flex items-center fixed top-0 right-0 left-0 md:left-64 h-14 z-40 bg-red text-white duration-300 ease-in-out">
        <div class="ml-1">
            <i id="side-menu" class="fa-solid fa-bars clickable-items"></i>
        </div>
        <div class="px-3">
            <i id="search-icon" class="fa-solid fa-magnifying-glass clickable-items"></i>
        </div>
        <input type="text" id="search-input" placeholder="Search..." class="max-w-[26rem] w-full px-2 py-1 outline-none min-w-64 hidden rounded-md text-gray-700">

        <div class="ml-auto mr-5">
            @auth
            <form method="POST" action="/logout">
                @csrf
                <x-button.top-nav>
                    <i class="fa-solid fa-sign-out-alt"></i>
                    <span class="sidebar-link-text">Log Out</span>
                </x-button.top-nav>
            </form>
            @endauth
            @guest
            <x-button.top-nav>
                <i class="fa-solid fa-sign-out-alt"></i>
                <a href="/login" class="sidebar-link-text">Log in</a>
            </x-button.top-nav>
            @endguest
        </div>


</div>

