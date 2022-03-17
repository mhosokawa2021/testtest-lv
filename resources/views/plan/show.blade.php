<x-hello2 :type="$type">
<div class="flex-1 text-gray-700 text-center">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
        <h1>詳細確認</h1>
        <div class="shadow-sm bg-white rounded mt-2">
            <h3>{{ $plan->id }}</h3>
            <h3>{{ $plan->user->creator->creator_name }}</h3>
            <p>{{ $plan->plan_title }}</p>
            <p>{{ $plan->plan_text }}</p>
            <p>{{ $plan->user_id }}</p>
            <p>{{ $plan->user->name }}</p>
        </div>
                    @foreach($plan_msg as $msg)
                        <p>{{ $msg->message }}</p>
                        <p>{{ $msg->user->creator->creator_name }}</p>
                    @endforeach
</div>
</div>
</div>
</x-hello2>