@props([
  'action',
  'method',
  'color' => 'bg-indigo-800',
  'class' => 'rounded p-3 text-white inline-block',
  'body' => 'text',
  'icon' => false,
])

<form action="{{ $action }}" method="POST" hidden id="form-{{ $method }}">
  @csrf
  @METHOD($method)
</form>
<button type="submit" form="form-{{ $method }}" class="flex items-center gap-2 {{ $color }} {{ $class }}">
  @if ($icon)
    <span class="iconify text-lg" data-icon="{{ $icon }}"></span>
  @endif
  {{ $body }}
</button>

{{--

  <a href="{{ $href }}" class="flex items-center gap-2 {{ $color }} {{ $class }}">
    @if ($icon)
    <span class="iconify text-lg" data-icon="{{ $icon }}"></span>
    @endif
    {{ $body }}
  </a>

--}}
