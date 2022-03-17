<x-hello2>
<div class="flex-1 text-gray-700 text-center">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
        <h1>クリエイター詳細</h1>
        <div class="shadow-sm bg-white rounded mt-2">
            <h3>{{ $creator->id }}</h3>
            <p>{{ $creator->creator_name }}</p>
            <p>{{ $creator->creator_text }}</p>
        </div>
         @foreach($creator_plans as $plan)
         <div class="m-3">
    <button class="px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500">{{ $plan->creator_plan_name }}</button>
</div>
            
        @endforeach
</div>
</div>
</div>
</x-hello2>