<x-layout>
<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
      <div class="flex text-center justify-center">
        <img src="{{ Vite::asset('resources/images/logo.png') }}" class="w-32 h-auto" alt="Logo">
      </div>

      <x-form.title>
        Log-in
      </x-form.title>

      <form method="POST" action="/login" class="space-y-4">
        @csrf
        <div>
            <x-form.label for="username">Username</x-form.label>
            <x-form.input id="username" name="username" type="text" :value="old('username')" required></x-form.input>
            <x-form.error name="username"></x-form.error>
        </div>

        <div>
          <x-form.label for="password">Password</x-form.label>
          <x-form.input id="password" name="password" type="password" placeholder="••••••••" required></x-form.input>
          <x-form.error name="password"></x-form.error>
        </div>

        <div class="flex items-center justify-between">
          <label class="flex items-center">
            <x-button.checkbox class="remember"/>
            <x-text.gray class="ml-2">Remember me</x-text.gray>
          </label>
            <x-button.red.link href="#">Forgot Password?</x-button.red-link>
        </div>

        <x-red-button class="w-full">Sign In</x-red-button>
      </form>
    </div>
  </div>
</x-layout>
