<x-layout>
  @include('partials._search')
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-auto max-w-sm lg:max-w-xl px-3">
    <x-card class="p-10 bg-white">
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
          </div>
        </div>
      </div>
    </x-card>
    @auth
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
    @endauth
  </div>
</x-layout>
