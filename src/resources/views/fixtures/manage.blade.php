<x-layout>
  <x-card class="p-10">
    <header>
      <h1 class="text-3xl text-center font-bold my-6 uppercase">
        Manage Fixtures
      </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
      <tbody>
        @unless($fixtures->isEmpty())
          @foreach ($fixtures as $fixture)
            <tr class="border-gray-300">
              <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <a href="show.html">
                  {{ $fixture->title }}
                </a>
              </td>
              <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <a href="/fixtures/{{ $fixture->id }}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                    class="fa-solid fa-pen-to-square"></i>
                  Edit</a>
              </td>
              <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <form method="POST" action="/fixtures/{{ $fixture->id }}">
                  @csrf
                  @method('DELETE')
                  <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete Fixture</button>

                </form>
              </td>
            </tr>
          @endforeach
        @else
          <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <p class="text-center">No fixtures found</p>
            </td>
          </tr>
        @endunless
      </tbody>
    </table>
  </x-card>
</x-layout>
