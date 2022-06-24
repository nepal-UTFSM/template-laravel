<div class="col-span-12 flex flex-col divide-y bg-white dark:bg-gray-800 rounded shadow dark:shadow-none">
  <div class="grid grid-flow-col auto-cols-fr px-6 py-3 text-black font-medium bg-black dark:text-white  bg-opacity-5 rounded">
    @foreach($a as $attribute)
      <div class="">
        {{ $attribute }}
      </div>
    @endforeach
  </div>
  <div class="p-3">
    @foreach ($models as $model)
    <a class="grid grid-flow-col auto-cols-fr p-3" href="{{ route("admin.{$modelName}s.show", $model) }}">
      @foreach($a as $attribute)
        <div class="col-span-1">
          {{ $model->$attribute }}
        </div>
      @endforeach
    </a>
    @endforeach
  </div>
</div>
