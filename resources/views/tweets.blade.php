<x-app-layout>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                <!-- 新規投稿フォーム ここから -->
<form action="/tweets" method="POST" class="card card-body shadow-2 mb-3">
    @csrf
    <div class="mb-2">
        <p class="mb-1 text-gray-400 font-weight-bold" style="font-size: 0.8rem;">ぼやいったー</p>
        <div class="form-outline">
            <textarea class="form-control" id="text-area" rows="3" name="message" placeholder="ぼやきを入力"></textarea>
        </div>
    </div>
    <button
        type="submit"
        class="btn btn-primary btn-lg btn-block shadow-0 font-weight-bold"
    >
        ぼやきを投稿
    </button>
</form>
<!-- 新規投稿フォーム ここまで -->
                    @foreach($tweets as $tweet)
                        <x-tweet-card :tweet="$tweet" />
                    @endforeach
            </div>
<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Default</button>
<button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>
<button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Dark</button>
<button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">Light</button>
<button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Green</button>
<button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Red</button>

        </div>
    </div>
</x-app-layout>