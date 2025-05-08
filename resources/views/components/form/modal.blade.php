<div id="form-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit User
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="form-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="p-4 md:p-5">
              <x-form.title>
                  Edit User
              </x-form.title>
              <form id="user-edit-form" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <!-- Username -->
                <div>
                    <x-form.label for="username">Username</x-form.label>
                    <x-form.input id="username" name="username" type="text" class="max-w-md"
                        placeholder="Username" required>
                    </x-form.input>
                    <x-form.error name="username"></x-form.error>
                </div>

                <!-- Email -->
                <div>
                    <x-form.label for="email">Email</x-form.label>
                    <x-form.input id="email" name="email" type="email" class="max-w-md"
                        placeholder="example@email.com" required>
                    </x-form.input>
                    <x-form.error name="email"></x-form.error>
                </div>

                <!-- User role -->
                <div>
                    <x-form.label for="user_role">User Role</x-form.label>
                    <x-form.select id="user_role" name="user_role" class="max-w-md" required>
                        <x-form.option value="" disabled>Select a role</x-form.option>
                        <x-form.option value="2">Regional Operations</x-form.option>
                        <x-form.option value="3">Provincial Operations</x-form.option>
                        <x-form.option value="4">Station Operations</x-form.option>
                        <x-form.option value="5">User</x-form.option>
                    </x-form.select>
                    <x-form.error name="user_role"></x-form.error>
                </div>

                <!-- Password -->
                <div>
                    <x-form.label for="password">Password</x-form.label>
                    <x-form.input id="password" name="password" type="password" class="max-w-md" placeholder="••••••••" required>
                    </x-form.input>
                    <x-form.error name="password"></x-form.error>
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-form.label for="password_confirmation">Confirm Password</x-form.label>
                    <x-form.input id="password_confirmation" name="password_confirmation" type="password" class="max-w-md" placeholder="••••••••" required>
                    </x-form.input>
                    <x-form.error name="password_confirmation"></x-form.error>
                </div>

                <div class="flex justify-end">
                  <x-button.red class="px-4 ml-5">Update User</x-button.red>
                </div>

              </form>
            </div>
        </div>
    </div>
  </div>

  <script>
    // JavaScript to dynamically set the form action URL when the modal is triggered
    document.addEventListener('DOMContentLoaded', function() {
      const modalButtons = document.querySelectorAll('[data-modal-toggle="form-modal"]');
      const form = document.getElementById('user-edit-form');

      modalButtons.forEach(button => {
        button.addEventListener('click', function() {
          const userId = button.getAttribute('data-user-id');  // Get the user ID
          form.action = `/user/${userId}`;  // Set the form action dynamically
          // Optionally, pre-fill form fields for this user
          const username = button.getAttribute('data-username');  // If you want to fill username
          const email = button.getAttribute('data-email');  // If you want to fill email
          document.getElementById('username').value = username;
          document.getElementById('email').value = email;
        });
      });
    });
  </script>
