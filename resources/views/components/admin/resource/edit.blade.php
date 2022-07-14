@extends('admin.template.main')

@section('content')
  <div class="container mx-auto grid grid-cols-12 p-3 gap-3">
    <x-admin.resource.title-bar :title='"{$modelName} - {$model->id}"' prev-url="/admin">
    </x-admin.resource.title-bar>
  </div>
@endsection
