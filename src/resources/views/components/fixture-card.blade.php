@props(['fixture'])



<x-card {{ $attributes->merge(['class' => 'bg-gray-50 p-6']) }}>
  <div class="flex justify-center lg:justify-start">
    <img class="hidden w-48 mr-6 lg:block aspect-square"
      src="{{ $fixture->fixture_image ? asset('storage/' . $fixture->fixture_image) : asset('images/no-image.png') }}"
      alt="" />
    <div>
      <h3 class="text-xl lg:text-2xl lg:text-start text-center">
        <a href="/fixtures/{{ $fixture->id }}">{{ $fixture->title }}</a>
      </h3>
      <div class="lg:text-xl text-md font-bold mb-6 lg:text-start text-center">{{ $fixture->fixture_date }} |
        {{ $fixture->fixture_time }} UTC
      </div>
      <x-fixture-tags :tagsCsv="$fixture->tags" />
      <div class="lg:text-md text-sm mt-4 lg:text-start text-center">
        <i class="fa-solid fa-trophy"></i> {{ $fixture->competition }}
      </div>
    </div>
  </div>
</x-card>
