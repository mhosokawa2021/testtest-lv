<x-hello2>
    <div class="flex-1 text-gray-700 text-center">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
        <h1>プロジェクト単体ページ</h1>
        <div class="shadow-sm max-w-3xl mx-auto rounded mt-2">
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

            @foreach($projectprocs as $projectproc)
                <div class="rounded bg-gray-300 p-10 m-10">
                    @foreach($projectproc as $proc)
                    <form action="{{ route('project_img.register',[ 'project_procs_id' => $proc['id'] ]) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        {{ $proc['proc_name'] }}<br>
                        @if($proc['img_url'])
                        <img src="{{ asset('storage/project/images/'.$proc['img_url'].'')}}">
                        @endif
                        <input name="imgpath" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        <button type="submit" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">アップロードする</button>
                    </form>
                    <br>
                    @endforeach
                </div>
            @endforeach
            
            <div class="rounded bg-gray-300 p-10 m-10">
                完成品のアップロード
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                <button type="submit" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">アップロードする</button>            
            </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    </div>
</x-hello2>