<div class="col-span-12 bg-white dark:bg-gray-800 dark:text-white rounded shadow p-3 flex flex-col gap-3">
  <div class="flex flex-col gap-4 p-3 ">
    @foreach($model->getAttributes() as $name => $attribute)
      <div class="grid grid-cols-12">
        <div class="col-span-4 text-black text-opacity-90 dark:text-white"> {{ $name }} </div>
        <div class="col-span-8 text-black dark:text-white"> {{ $attribute ?? '_null_'}} </div>
      </div>
    @endforeach
  </div>
</div>
