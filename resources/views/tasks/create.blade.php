<x-layout>
 <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
  <header class="text-center">
   <h2 class="text-2xl font-bold uppercase mb-1">
    Create a Task
   </h2>
   <p class="mb-4">Post a new task for a project</p>
  </header>
  <form>
   <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
    <div class="sm:col-span-4">
     <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Task name</label>
     <div class="mt-2">
      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
       <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">Enter a task</span>
       <input type="text" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
      </div>
     </div>
    </div>
   </div>
   <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
   </div>
  </form>
 </div>
</x-layout>