<div class="col-span-12 flex flex-row items-center gap-3">
  @if ($prevUrl)
    <a href="{{ $prevUrl }}" class="font-medium text-lg p-2 rounded items-center gap-3 dark:text-white text-opacity-80 text-black flex">
      <span class="iconify-inline text-xl" data-icon="mdi:arrow-left"></span>
      {{ $title }}
    </a>
  @else
    <div class="font-medium text-lg p-2 rounded inline-block dark:text-white text-opacity-80 text-black">
      {{ $title }}
    </div>
  @endif
  <div class="ml-auto"></div>
  @stack('actions')
</div>
