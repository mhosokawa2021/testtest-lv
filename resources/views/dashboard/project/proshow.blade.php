<x-hello2>
    <div class="flex-1 text-gray-700 text-center">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
        <h1>製作中のデータ一覧</h1>
        <div class="shadow-sm max-w-3xl mx-auto rounded mt-2">
            @foreach($projects as $project)
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex">
                    <div class="w-100">
                        <img class="rounded-lg md:w-56" src="http://flat-icon-design.com/f/f_object_174/s512_f_object_174_0bg.png" alt="Woman paying for a purchase">
                    </div>
                    <div class="mt-4 md:mt-0 md:ml-6">
                        <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold text-left">
                        <a href="#" class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">{{ $project->project_title }}</a>
                        <p class="mt-2 text-gray-600">{{ $project->created_at }}</p>
                   <a href="{{ route('user-project-detail.show', ['project_id'=> $project->id ]) }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
         </div>
      </div>
    </div>
    </div>
</x-hello2>