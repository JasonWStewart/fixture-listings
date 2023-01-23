<x-layout>
  @include('partials._search')
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6"
          src="{{ $fixture->fixture_image ? asset('storage/' . $fixture->fixture_image) : asset('images/no-image.png') }}"
          alt="" />

        <h3 class="text-2xl mb-2">{{ $fixture->title }}</h3>
        <div class="text-xl font-bold mb-4">{{ $fixture->fixture_date }}</div>
        <x-fixture-tags :tagsCsv="$fixture->tags" />
        <div class="text-lg my-4">
          <i class="fa-solid fa-trophy mr-1"></i>{{ $fixture->competition }}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
          <h3 class="text-2xl font-bold mb-4">
            Description
          </h3>
          <div class="text-lg space-y-6">
            {{ $fixture->description }}

            {{-- <a href="mailto:test@test.com" class="block bg-themeCol text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                  class="fa-solid fa-envelope"></i>
                Contact Employer</a>

              <a href="https://test.com" target="_blank"
                class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i> Visit
                Website</a> --}}
          </div>
        </div>
      </div>
    </x-card>
    <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/fixtures/{{ $fixture->id }}/edit">
        <i class="fa-solid fa-pencil"></i> Edit Fixture
      </a>
      <form method="POST" action="/fixtures/{{ $fixture->id }}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete Fixture</button>

      </form>
    </x-card>
  </div>
</x-layout>