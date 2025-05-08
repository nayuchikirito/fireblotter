<x-layout>
    <x-top-nav/>
    <x-side-nav/>
    <x-main-nav>
    <a href="/register">
        <x-button.red class="px-2.5 mb-2" type="button">
            <x-sidebar.icon class="fa-user-plus"></x-sidebar.icon>
            Add user
        </x-button.red>
    </a>

    <x-table.table-wrap>
        <x-table.table id="users-table">
            <x-table.header-wrap>
                <tr class="bg-white even:bg-gray-50 border-b border-gray-200">
                    <x-table.header>Username</x-table.header>
                    <x-table.header>Email</x-table.header>
                    <x-table.header>Role</x-table.header>
                    <x-table.header class="text-right">Edit/Delete</x-table.header>
                </tr>
            </x-table.header-wrap>

            <tbody>
                @foreach ($users as $user)
                <tr class="bg-white even:bg-gray-50 border-b border-gray-200">
                    <x-table.data class="font-medium text-gray-900 whitespace-nowrap">{{ $user->username }}</x-table.data>
                    <x-table.data>{{ $user->email }}</x-table.data>
                    <x-table.data>{{ $user->role_label }}</x-table.data>
                    <x-table.data class="text-right space-x-2">
                        <x-button.blue-link href="/user/{{ $user->id }}">Edit</x-button.blue-link>
                        <x-button.red-link href="#">Delete</x-button.red-link>
                    </x-table.data>
                </tr>
                @endforeach
            </tbody>
        </x-table.table>
    </x-table.table-wrap>
</x-main-nav>

</x-layout>
