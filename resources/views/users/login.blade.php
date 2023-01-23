<x-layout>
  <x-card class="max-w-xl mx-auto mt-24 p-10">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">
        Log in
      </h2>
    </header>

    <form method="POST" action="/users/login">
      @csrf

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Email</label>
        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
          value="{{ old('email') }}" />
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2">
          Password
        </label>
        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
        @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button type="submit" class="bg-themeCol text-white rounded py-2 px-4 hover:bg-black">
          Log in
        </button>
      </div>

      <div class="mt-8">
        <p>
          Don't have an account?
          <a href="/register" class="text-themeCol">Register</a>
        </p>
      </div>
    </form>
  </x-card>
</x-layout>
