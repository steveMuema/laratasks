<x-layout>
@include('partials._hero')
<!-- <div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 mx-4"> -->


@unless(count($tasks) == 0)
<ul role="list" class="divide-y divide-gray-100">

 @foreach($tasks as $task)

 <li class="flex justify-between gap-x-6 py-5">
  <div class="flex gap-x-4">
   <div class="min-w-0 flex-auto">
    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $task->name }}</p>
   </div>
  </div>
  <div class="hidden sm:flex sm:flex-col sm:items-end">
   <div class="mt-1 flex items-center gap-x-1.5">
    <div class="flex-none rounded-full bg-emerald-500/20 p-1">
     <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
    </div>
    <p class="text-xs leading-5 text-gray-500">priority {{$task->priority}}</p>
   </div>
  </div>
 </li>
 @endforeach
</ul>

@endunless
<!-- </div> -->


</x-layout>