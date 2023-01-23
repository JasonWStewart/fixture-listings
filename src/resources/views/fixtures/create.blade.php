<x-layout>
  <x-card class="max-w-xl p-10 mt-16 mx-auto">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">
        Post a Fixture
      </h2>
      <p class="mb-4">Add a new upcoming fixture</p>
    </header>

    <form action="/fixtures" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Fixture title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
          value="{{ old('title') }}" />
        @error('title')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="competition" class="inline-block text-lg mb-2">Competition/League</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="competition"
          placeholder="Example: National League South" value="{{ old('competition') }}"" />
        @error('competition')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="home_team" class="inline-block text-lg mb-2">Home Team</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="home_team"
          value="{{ old('home_team') }}" />
        @error('home_team')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="away_team" class="inline-block text-lg mb-2">Away Team</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="away_team"
          value="{{ old('away_team') }}" />
        @error('away_team')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="fixture_date" class="inline-block text-lg mb-2">
          Fixture Date
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="fixture_date"
          placeholder="2023-01-01" value="{{ old('fixture_date') }}" />
        @error('fixture_date')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="fixture_time" class="inline-block text-lg mb-2">
          Kick-Off Time
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="fixture_time"
          placeholder="15:00:00" value="{{ old('fixture_time') }}" />
        @error('fixture_time')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
          Tags (Comma separated)
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
          placeholder="Example: HRBFC, NLS, Midweek, etc." value="{{ old('tags') }}" />
        @error('tags')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="fixture_image" class="inline-block text-lg mb-2">
          Fixture Image
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="fixture_image"
          value="{{ old('fixture_image') }}" />
        @error('fixture_image')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
          Fixture Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10">{{ old('description', '') }}</textarea>
        @error('description')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-themeCol text-white rounded py-2 px-4 hover:bg-black">
          Post Fixture
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
