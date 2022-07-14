<div class="col-span-12 flex flex-row items-center gap-3">
  @if ($prevUrl)
    <a href="{{ $prevUrl }}" class="font-medium text-lg p-2 rounded items-center gap-3 dark:text-white text-opacity-80 text-black flex">
      <span class="iconify-inline text-xl" data-icon="mdi:arrow-left"></span>
      {{ $title }}
    </a>
  @else
    <div class="font-medium text-lg p-2 rounded inline-block dark:text-white text-opacity-80 text-black">
      {{ $title }} {{ $query ?? ''}}
    </div>
  @endif
  <div class="ml-auto"></div>

  <form action="{{ route('admin.users.index') }}" method="GET" class="flex text-white">
    <input name="search_query" class="rounded-l p-3 bg-gray-800" placeholder="search">
    <button class="rounded-r bg-indigo-800 p-3 flex items-center"><span class="iconify-inline text-lg" data-icon="mdi:magnify"></span></button>
  </form>

  @stack('actions')
</div>
