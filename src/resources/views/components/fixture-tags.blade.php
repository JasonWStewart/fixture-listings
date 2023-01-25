@props(['tagsCsv'])

@php
  $tags = explode(',', $tagsCsv);
  
@endphp

<ul class="flex justify-center lg:justify-start">
  @foreach ($tags as $tag)
    <li class="bg-black text-white rounded-lg text-sm lg:text-md px-3 py-1 mr-2 mb-3">
      <a href="/?tag={{ $tag }}">{{ $tag }}</a>
    </li>
  @endforeach
</ul>
