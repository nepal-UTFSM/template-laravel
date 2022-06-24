@extends('user.template.main')
@section('content')
  <div class="container mx-auto mt-40 grid grid-cols-12 gap-3 justify-center">
    <div class="col-span-4 col-start-5 grid grid-cols-12 gap-3">
      <div class="flex col-span-12 bg-white dark:text-white dark:bg-gray-900 rounded shadow-lg py-6 flex-col items-center">
        {{ $user->name }} asdkjh
      </div>
    </div>
</div>
@endsection
