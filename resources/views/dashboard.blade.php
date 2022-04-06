<x-hello2>

  <div class="flex-1 text-gray-700 text-center mx-auto max-w-5xl">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">

        <div class="shadow-sm bg-white rounded p-2">
        <p class="flex items-center text-sm tracking-wide text-gray-800 text-left">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            22.03.09トップページの更新を行いました
        </p>
        </div>
        <div class="shadow-sm bg-white rounded mt-2">
          <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-4">
            <div class="p-4 mb-4 text-sm text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300" role="alert">
            [依頼者]依頼/相談中のプロジェクト
            </div>
            <div class="grid grid-cols-2 row-gap-8 md:grid-cols-4">
              <div class="text-center">
                <h6 class="text-3xl font-bold text-deep-purple-accent-400">{{ $user_plan }}件</h6>
                <p class="font-bold">募集中</p>
              </div>
              <div class="text-center">
                <h6 class="text-3xl font-bold text-deep-purple-accent-400">{{ $user_req }}件</h6>
                <a href="{{ route('user-requests.show') }}"><p class="font-bold">相談中</p></a>
              </div>
              <div class="text-center">
                <h6 class="text-3xl font-bold text-deep-purple-accent-400">{{ $user_project }}件</h6>
                <p class="font-bold"><a href="{{ route('user-project.show') }}"><p class="font-bold">製作中</a></p>
              </div>
              <div class="text-center">
                <h6 class="text-3xl font-bold text-deep-purple-accent-400">0件</h6>
                <p class="font-bold">完了</p>
              </div>
            </div>
          </div>



        </div>
        @if($creator_id)
        <div class="shadow-sm bg-white rounded mt-2">
          <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-6">
              <div class="p-4 mb-4 text-sm text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300" role="alert">
            [クリエイター]依頼/相談中のプロジェクト
            </div>
            <div class="grid row-gap-8 sm:grid-cols-3">
              <div class="text-center">
                <h6 class="text-3xl font-bold text-deep-purple-accent-400">{{ $creator_req->count() }}件</h6>
                <a href="{{ route('creator-requests.show', ['creator_id'=> $creator_id ]) }}"><p class="font-bold">相談中</p></a>
              </div>
              <div class="text-center">
                <h6 class="text-3xl font-bold text-deep-purple-accent-400">{{ $creator_project->count() }}件</h6>
                <a href="{{ route('creator-project.show', ['creator_id'=> $creator_id ]) }}"><p class="font-bold">製作中</p></a>
              </div>
              <div class="text-center">
                <h6 class="text-3xl font-bold text-deep-purple-accent-400">0件</h6>
                <p class="font-bold">完了</p>
              </div>
            </div>
          </div>
        </div>
        @endif
        <div class="shadow-sm bg-white rounded mt-2">
<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-md px-4 md:px-8 mx-auto pl-4">
     <div class="border-t pt-4">
      <!-- review - start -->
     <div class="flex justify- items-center border-b pb-4 mb-4">
      <div class="flex flex-col gap-0.5 mr-8">
  <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">お知らせ</span>
        <span class="block text-gray-500 text-sm">August 28, 2021</span>
      </div>
      <p class="text-gray-600">相談中のプロジェクトが制作を開始しました。</div>
      <!-- review - end -->

      <!-- review - start -->
     <div class="flex justify- items-center border-b pb-4 mb-4">
      <div class="flex flex-col gap-0.5 mr-8">
  <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">お知らせ</span>
        <span class="block text-gray-500 text-sm">August 28, 2021</span>
      </div>
      <p class="text-gray-600">相談中のプロジェクトが制作を開始しました。</div>
      <!-- review - end -->

      <!-- review - start -->

     <div class="flex justify- items-center border-b pb-4 mb-4">
      <div class="flex flex-col gap-0.5 mr-8">
  <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">お知らせ</span>
        <span class="block text-gray-500 text-sm">August 28, 2021</span>
      </div>
      <p class="text-gray-600">相談中のプロジェクトが制作を開始しました。</div>
      <!-- review - end -->
    </div>
  </div>
</div>
        </div>
      </div>
      <div class="w-64 text-center text-white p-2 pl-0 m-1">
     <!-- person - start -->
      <div class="flex flex-col items-center bg-gray-100 rounded-lg p-4">
        <div class="w-24 md:w-32 h-24 md:h-32 bg-gray-200 rounded-full overflow-hidden shadow-lg mb-2 md:mb-4">
          <img src="img/dummy.png" loading="lazy" alt="Photo by Radu Florin" class="w-full h-full object-cover object-center" />
        </div>

        <div>
          <div class="text-indigo-500 md:text-lg font-bold text-center">{{ auth()->user()->name }}</div>
          <p class="text-gray-500 text-sm md:text-base text-center mb-3 md:mb-4">依頼人 / Creator</p>

          <!-- social - start -->
          <div class="flex justify-center">
            <div class="flex gap-4">
              <a href="#" target="_blank" class="text-gray-400 hover:text-gray-500 active:text-gray-600 transition duration-100">
                <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                </svg>
              </a>

              <a href="#" target="_blank" class="text-gray-400 hover:text-gray-500 active:text-gray-600 transition duration-100">
                <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </svg>
              </a>
            </div>
          </div>
          <!-- social - end -->
        </div>
      </div>
      <!-- person - end -->
      </div>
    </div>
  </div>



</x-hello2>