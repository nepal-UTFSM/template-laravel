@props([
  'href',
  'color' => 'bg-indigo-800',
  'class' => 'rounded p-3 text-white inline-block',
  'body' => 'text',
  'icon' => false,
])

<a href="{{ $href }}" class="flex items-center gap-2 {{ $color }} {{ $class }}">
  @if ($icon)
    <span class="iconify text-lg" data-icon="{{ $icon }}"></span>
  @endif
  {{ $body }}
</a>
