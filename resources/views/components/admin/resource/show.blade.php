@extends('admin.template.main')

@section('content')
<div class="container mx-auto grid grid-cols-12 p-3 gap-3 text-black text-opacity-90">
  <x-admin.resource.title-bar :title="$modelName" :prev-url="route('admin.'.$modelName.'s.index')">
      @push('actions') <x-admin.anchor :href="route('admin.'.$modelName.'s.edit', $model)" body="Edit" icon="mdi:pencil"/> @endpush
      @push('actions')
        <x-admin.form-button :action="route('admin.'.$modelName.'s.destroy', $model)" method="DELETE" body="Remove" icon="mdi:delete" color="bg-red-800"/>
      @endpush
    </x-admin.resource.title-bar>
  <x-admin.resource.attributes-table :model="$model"/>
</div>
@endsection
