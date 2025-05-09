<x-layout>
    <x-top-nav/>
    <x-side-nav/>
    <x-main-nav class="flex justify-center">
        <div class="w-full h-fit bg-white rounded-xl shadow-lg p-8">
            <x-form.title>
                Edit User
            </x-form.title>
              <form method="POST" action="/user/{{ $user->id }}" class="space-y-4">
                @csrf
                @method('PUT')
                <!-- Username -->
                    <div>
                        <x-form.label for="username">Username</x-form.label>
                        <x-form.input id="username" name="username" type="text" class="max-w-md"
                            placeholder="Username" :value="old('username', $user->username)" required></x-form.input>
                        <x-form.error name="username"></x-form.error>
                    </div>

                    <!-- Email -->
                    <div>
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input id="email" name="email" type="email" class="max-w-md"
                            placeholder="example@email.com" :value="old('email', $user->email)" required></x-form.input>
                        <x-form.error name="email"></x-form.error>
                    </div>

                    <!-- User role -->
                    <div>
                        <x-form.label for="user_role">User Role</x-form.label>
                        <x-form.select id="user_role" name="user_role" class="max-w-md" required>
                            <x-form.option value="" disabled :selected="!old('user_role')">Select a role</x-form.option>
                            <x-form.option value="2" :selected="old('user_role', $user->user_role) == '2'">Regional Operations</x-form.option>
                            <x-form.option value="3" :selected="old('user_role', $user->user_role) == '3'">Provincial Operations</x-form.option>
                            <x-form.option value="4" :selected="old('user_role', $user->user_role) == '4'">Station Operations</x-form.option>
                            <x-form.option value="5" :selected="old('user_role', $user->user_role) == '5'">User</x-form.option>
                        </x-form.select>
                        <x-form.error name="user_role"></x-form.error>
                    </div>



                    <!-- Password -->
                    <div>
                        <x-form.label for="password">Password</x-form.label>
                        <x-form.input id="password"
                        name="password"
                        type="password"
                        class="max-w-md"
                        placeholder="••••••••"
                        required></x-form.input>
                        <x-form.error name="password"></x-form.error>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-form.label for="password_confirmation">Confirm Password</x-form.label>
                        <x-form.input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        class="max-w-md"
                        placeholder="••••••••"
                        required></x-form.input>
                        <x-form.error name="password_confirmation"></x-form.error>
                    </div>

                  <div class="flex items-start">
                    <a href="{{ url('/users') }}">
                        <x-button.cancel class="px-4">Cancel</x-button.cancel>
                    </a>
                    <x-button.red class="px-4 ml-5">Update User</x-button.red>
                    <button id="successButton" data-modal-target="successModal" data-modal-toggle="successModal" hidden>Success Button</button>
                  </div>

              </form>
            </div>
    </x-main-nav>

    <x-form.successModal/>

    @if(session('success'))
        <script>
            $(document).ready(function () {
                $('#successButton').trigger('click');
            });
        </script>
    @endif

</x-layout>






