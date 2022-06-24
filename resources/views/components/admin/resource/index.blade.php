@extends('admin.template.main')

@section('content')
  <div class="container mx-auto grid grid-cols-12 p-3 gap-3">
    <x-admin.resource.title-bar :title='"{$modelName} - {$models->count()}"'>
      @push('actions') <x-admin.button :href="route('admin.'.$modelName.'s.create')" body="Create"/> @endpush
    </x-admin.resource.title-bar>

    <x-admin.resource.index-table :model-name="$modelName" :models="$models" :a="$attrs"/>
  </div>
@endsection
