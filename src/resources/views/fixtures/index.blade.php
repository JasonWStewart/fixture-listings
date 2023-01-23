<x-layout>
  @include('partials._hero')
  @include('partials._search')
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($fixtures) == 0)
      @foreach ($fixtures as $fixture)
        <x-fixture-card :fixture="$fixture" />
      @endforeach
    @else
      <p>No fixtures found.</p>
    @endunless

  </div>
  <div class="mt-6 p-4">{{ $fixtures->links() }}</div>
</x-layout>
