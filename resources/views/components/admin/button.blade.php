@props([
  'href',
  'color' => 'bg-indigo-800',
  'class' => 'rounded p-3 text-white inline-block',
  'body' => 'text'
])

<a href="{{ $href }}" class="{{ $color }} {{ $class }}">
  {{ $body }}
</a>
