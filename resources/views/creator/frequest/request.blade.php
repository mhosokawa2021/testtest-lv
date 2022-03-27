<x-hello2>
  <div class="flex-1 text-gray-700 text-center mx-auto max-w-5xl">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
        <div class="shadow-sm bg-white rounded">
          <div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
    <!-- text - start -->
    <div class="mb-10">
      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">自由依頼フォーム</h2>

      <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">自由依頼フォームです</p>
    </div>
    <!-- text - end -->

    <!-- form - start -->
<form method="POST" action="{{ route('frequest.store',['creator_id'=>$creator_id]) }}" class="max-w-screen-md mx-auto">
        @csrf
      <div class="text-left mb-6">
        <label for="company" class=" inline-block text-gray-800 text-sm sm:text-base mb-2">タイトル</label>
        <input name="title" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
      </div>

      <div id="input_pluralBox">
          <div class="input_plural flex items-baseline">
              <input type="text" name="item[]" class="form-control w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" value="ラフ" placeholder="">
              <div class="w-40">回数:</div>
              <input type="number" name="count[]" min="1" class="ml-1 mr-1 w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" name="custom-input-number" value="1">
              <div class="w-32">回</div>
              <input type="button" value="追加" class="add pluralBtn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
              <input type="button" value="削除" class="del pluralBtn text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
          </div>
          <div class="input_plural flex items-baseline">
              <input type="text" name="item[]" class="form-control w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" value="線画" placeholder="">
              <div class="w-40">回数:</div>
              <input type="number" name="count[]" min="1" class="ml-1 mr-1 w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" name="custom-input-number" value="1"> 
              <div class="w-32">回</div>
              <input type="button" value="追加" class="add pluralBtn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
              <input type="button" value="削除" class="del pluralBtn text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
          </div>
          <div class="input_plural flex items-baseline">
              <input type="text" name="item[]" class="form-control w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" value="着彩" placeholder="">
              <div class="w-40">回数:</div>
              <input type="number" name="count[]" min="1" class="ml-1 mr-1 w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" name="custom-input-number" value="1">
              <div class="w-32">回</div>
              <input type="button" value="追加" class="add pluralBtn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
              <input type="button" value="削除" class="del pluralBtn text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
 
          </div>
      </div>

      <div class="text-left mt-5">
        <label for="message" class="inline-block text-gray-800 text-sm sm:text-base mb-2">メッセージ</label>
        <textarea name="message" class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
      </div>

      <div class="flex justify-center">
        <button class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Send</button>
      </div>

      <p class="text-gray-400 text-xs">By signing up to our newsletter you agree to our <a href="#" class="hover:text-indigo-500 active:text-indigo-600 underline transition duration-100">Privacy Policy</a>.</p>
</form>
    <!-- form - end -->
  </div>
</div>
        </div>
      </div>

    </div>
  </div>
</x-hello2>