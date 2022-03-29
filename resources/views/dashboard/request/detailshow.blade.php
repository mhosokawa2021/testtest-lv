<x-hello2>
    <div class="flex-1 text-gray-700 text-center">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
        <h1>依頼単体ページ</h1>
        プランid : {{ $plan_id }}
        <div class="shadow-sm max-w-3xl mx-auto rounded mt-2">
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <p>タイトル：{{ $plan_req_datas->plan_title }}</p>
                <p>メッセージ：{{ $plan_req_datas->message }}</p>
                @foreach($procs as $proc)
                <div>
                <p>{{ $proc->sort_order }}</p>
                <p>工程名：{{ $proc->proc_name }}</p>
                <p>最大回数：{{ $proc->proc_number_max }}回</p>
                </div>
                @endforeach
                @if($my_creator->id === $plan_req_datas->creator_id)
                    <button
                    onclick="window.location='{{ route('plan.register',['creator_id'=>$my_creator->id, 'plan_id'=>$plan_id]) }}'" 
                    type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">依頼を受ける</button>
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">キャンセルする</button>
                @endif
            </div>
        </div>
      </div>
    </div>
    </div>
</x-hello2>