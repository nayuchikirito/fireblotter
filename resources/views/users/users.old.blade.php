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
        <x-table.table>
            <x-table.header-wrap>
                <tr>
                    <x-table.header column="0">Username</x-table.header>
                    <x-table.header column="1">Email</x-table.header>
                    <x-table.header column="2">Role</x-table.header>
                    <x-table.header class="sr-only" column="3">Edit/Delete</x-table.header>
                </tr>
            </x-table.header-wrap>

            <tbody>
                @foreach ($users as $user)
                <tr class="bg-white border-b border-gray-200">
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
