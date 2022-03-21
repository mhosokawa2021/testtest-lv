<x-hello2>
    <div class="flex-1 text-gray-700 text-center">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
        <h1>依頼を行う</h1>
        <div class="shadow-sm bg-white rounded mt-2">
            <p>クリエイターid:{{$creator_id}}</p>
            <p>プラン:{{$plan_id}}</p>
            <div>プラン名:{{$plan->creator_plan_name}}</div>
            @foreach($plan_proc as $proc)
                <div>{{$proc->proc_name}}<div>
            @endforeach
             <button 
                onclick=""
                class="px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500">この条件で依頼する
            </button>
        </div>
      </div>
    </div>
    </div>
</x-hello2>