<x-hello2>
    <div class="flex-1 text-gray-700 text-center">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
        <h1>依頼単体ページ</h1>
        プランid : {{ $plan_id }}
        <div class="shadow-sm max-w-3xl mx-auto rounded mt-2">
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <p>タイトル：{{ $datas->plan_title }}</p>
                <p>メッセージ：{{ $datas->message }}</p>
                @foreach($procs as $proc)
                <div>
                <p>{{ $proc->sort_order }}</p>
                <p>工程名：{{ $proc->proc_name }}</p>
                <p>最大回数：{{ $proc->proc_number_max }}回</p>
                </div>
                @endforeach
            </div>
        </div>
      </div>
    </div>
    </div>
</x-hello2>