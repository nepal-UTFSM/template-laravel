@extends('admin.template.main')

@section('content')
<div class="container mx-auto grid grid-cols-12 p-3 gap-3 text-black text-opacity-90">
  <x-admin.resource.title-bar :title="$modelName" :prev-url="route('admin.'.$modelName.'s.index')">
      @push('actions') <x-admin.button :href="route('admin.'.$modelName.'s.edit', $model)" body="Edit"/> @endpush
      @push('actions')
        <form action="{{ route('admin.'.$modelName.'s.edit', $model) }}" method="POST" hidden id="form-delete">
          @csrf
          @METHOD('DELETE')
        </form>
        <button type="submit" form="form-delete" class="bg-red-800 rounded p-3 text-white inline-block">
          Remove
        </button>
      @endpush
    </x-admin.resource.title-bar>
  <x-admin.resource.attributes-table :model="$model"/>
</div>
@endsection
