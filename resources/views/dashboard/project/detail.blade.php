<x-hello2>
    <div class="flex-1 text-gray-700 text-center">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
        <h1>プロジェクト単体ページ</h1>
        <div class="shadow-sm max-w-3xl mx-auto rounded mt-2">
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                @foreach($projectprocs as $projectproc)
                    
                    @if($projectproc->proc_name_order == 0)
                    <button type="button" class="mt-4 text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">{{ $projectproc->proc_name }}</button>
                    @endif

                    @if($projectproc->sort_order % 2 == 0)
                     <div class="bg-gray-70">
                    @else
                     <div class="bg-gray-200">
                    @endif

                <br>
                <p>工程名：{{ $projectproc->proc_name }}(No.{{ $projectproc->proc_name_order + 1 }})</p>
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
                @endforeach
            </div>
        </div>
      </div>
    </div>
    </div>
</x-hello2>