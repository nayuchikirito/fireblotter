<x-layout>
    <x-top-nav/>
    <x-side-nav/>
    <x-main-nav class="flex justify-center">
        <div class="w-full h-fit bg-white rounded-xl shadow-lg p-8">
            <x-form.title>
                Add User
            </x-form.title>
              <form method="POST" action="/register" class="space-y-4">
                @csrf
                <!-- Username -->
                    <div>
                        <x-form.label for="username">Username</x-form.label>
                        <x-form.input id="username" name="username" type="text" class="max-w-md"
                            placeholder="Username" :value="old('username')" required></x-form.input>
                        <x-form.error name="username"></x-form.error>
                    </div>

                    <!-- Email -->
                    <div>
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input id="email" name="email" type="email" class="max-w-md"
                            placeholder="example@email.com" :value="old('email')" required></x-form.input>
                        <x-form.error name="email"></x-form.error>
                    </div>

                    <!-- User role -->
                    <div>
                        <x-form.label for="user_role">User Role</x-form.label>
                        <x-form.select id="user_role" name="user_role" class="max-w-md" required>
                            <x-form.option value="" disabled :selected="!old('user_role')">Select a role</x-form.option>
                            <x-form.option value="Regional Operation" :selected="old('user_role') == 'Regional Operation'">Regional Operation</x-form.option>
                            <x-form.option value="Provincial Operation" :selected="old('user_role') == 'Provincial Operation'">Provincial Operation</x-form.option>
                            <x-form.option value="Station Operation" :selected="old('user_role') == 'Station Operation'">Station Operation</x-form.option>
                            <x-form.option value="User" :selected="old('user_role') == 'User'">User</x-form.option>
                        </x-form.select>
                        <x-form.error name="user_role"></x-form.error>
                    </div>



                    <!-- Password -->
                    <div>
                        <x-form.label for="password">Password</x-form.label>
                        <x-form.input id="password" name="password" type="password" class="max-w-md"
                            placeholder="••••••••" required></x-form.input>
                        <x-form.error name="password"></x-form.error>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-form.label for="password_confirmation">Confirm Password</x-form.label>
                        <x-form.input id="password_confirmation" name="password_confirmation" type="password"
                            class="max-w-md" placeholder="••••••••" required></x-form.input>
                        <x-form.error name="password_confirmation"></x-form.error>
                    </div>

                  <div class="flex justify-end">
                    <x-button.cancel class="px-4">Cancel</x-button.cancel>
                    <x-button.red class="px-4 ml-5">Add User</x-button.red>
                  </div>

              </form>
        </div>
    </x-main-nav>
</x-layout>
