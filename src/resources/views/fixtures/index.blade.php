<x-layout>
  @include('partials._hero')
  @include('partials._search')
  <div class="md:grid 2xl:grid-cols-3 grid-cols-2 gap-6 space-y-6 md:space-y-0 mx-6 px-6 py-6">
    @unless(count($fixtures) == 0)
      @foreach ($fixtures as $fixture)
        <x-fixture-card :fixture="$fixture" class="drop-shadow-lg hover:drop-shadow-xl" />
      @endforeach
    @else
      <p>No fixtures found.</p>
    @endunless

  </div>
  <div class="mt-6 p-4">{{ $fixtures->links() }}</div>
</x-layout>
