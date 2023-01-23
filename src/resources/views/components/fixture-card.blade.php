@props(['fixture'])



<x-card class="p-6">
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="{{ $fixture->fixture_image ? asset('storage/' . $fixture->fixture_image) : asset('images/no-image.png') }}"
      alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/fixtures/{{ $fixture->id }}">{{ $fixture->title }}</a>
      </h3>
      <div class="text-xl font-bold mb-4">{{ $fixture->fixture_date }} | {{ $fixture->fixture_time }} UTC</div>
      <x-fixture-tags :tagsCsv="$fixture->tags" />
      <div class="text-lg mt-4">
        <i class="fa-solid fa-trophy"></i> {{ $fixture->competition }}
      </div>
    </div>
  </div>
</x-card>
