<x-dashboard>
    <!-- inner_content -->
        <div class="inner__content">
            <div class="inner__top_content">
            </div>
            <div class="inner__content_wrap">
                <div class="inner__left_content">
                    <div class="free_form_box">
                        <div class="title">自由依頼入力フォーム</div>
                        <div class="content_box">
                          <form method="POST" action="{{ route('frequest.store',['creator_id'=>$creator_id]) }}" class="max-w-screen-md mx-auto">
                                  @csrf
                                <div class="text-left mb-6">
                                  <label for="company" class=" inline-block text-gray-800 text-sm sm:text-base mb-2">タイトル</label>
                                  <input type="text" name="title" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                                </div>

                                <div id="input_pluralBox">
                                    <div class="input_plural flex items-baseline">
                                        <input type="text" name="item[]" class="form-control w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" value="ラフ" placeholder="">
                                        <div class="w-40">回数:</div>
                                        <input type="number" name="count[]" min="1" class="ml-1 mr-1 w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" name="custom-input-number" value="1">
                                        <div class="w-32">回</div>
                                        <input type="button" value="追加" class="bg-gray-900 add pluralBtn text-white bg-blue-700 hover:bg-gray-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        <input type="button" value="削除" class="del pluralBtn text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    </div>
                                    <div class="input_plural flex items-baseline">
                                        <input type="text" name="item[]" class="form-control w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" value="線画" placeholder="">
                                        <div class="w-40">回数:</div>
                                        <input type="number" name="count[]" min="1" class="ml-1 mr-1 w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" name="custom-input-number" value="1"> 
                                        <div class="w-32">回</div>
                                        <input type="button" value="追加" class="bg-gray-900 add pluralBtn text-white bg-blue-700 hover:bg-gray-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        <input type="button" value="削除" class="del pluralBtn text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    </div>
                                    <div class="input_plural flex items-baseline">
                                        <input type="text" name="item[]" class="form-control w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" value="着彩" placeholder="">
                                        <div class="w-40">回数:</div>
                                        <input type="number" name="count[]" min="1" class="ml-1 mr-1 w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" name="custom-input-number" value="1">
                                        <div class="w-32">回</div>
                                        <input type="button" value="追加" class="bg-gray-900 add pluralBtn text-white bg-blue-700 hover:bg-gray-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        <input type="button" value="削除" class="del pluralBtn text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                          
                                    </div>
                                </div>

                                <div class="text-left mt-5">
                                  <label for="message" class="inline-block text-gray-800 text-sm sm:text-base mb-2">メッセージ</label>
                                  <textarea name="message" class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                                </div>

                                <div class="flex justify-center">
                                  <button class="inline-block w-full bg-gray-900 hover:bg-gray-800 active:bg-gray-800 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">送信</button>
                                </div>

                                <!-- <p class="text-gray-400 text-xs">By signing up to our newsletter you agree to our <a href="#" class="hover:text-indigo-500 active:text-indigo-600 underline transition duration-100">Privacy Policy</a>.</p> -->
                          </form>
                              <!-- form - end -->
                        </div>
                    </div>
                </div>
                <div class="inner__right_content">
                    <div class="pro_btn"><a href="#">プロジェクトを作成して<br>クリエイターを募集する</a></div>
                    <div class="msg_box">
                        <div class="title">最近作成されたプロジェクト</div>
                        <div class="p_wrapper">
                            <a href="#" class="box8">
                                <p><span>グッズ用イラスト描いてくれる方…</span>こんにちは、グッズ用の…<p>
                            </a>
                        </div>
                        <div class="p_wrapper">
                            <a href="#" class="box8">
                                <p><span>小説の表紙を…</span>小説の表紙を…<p>
                            </a>
                        </div>
                        <div class="p_wrapper">
                            <a href="#" class="box8">
                                <p><span>イラストレーターさん募集…</span>今回イラストレーターさ…<p>
                            </a>
                        </div>
                        <div class="p_wrapper">
                            <a href="#" class="box8">
                                <p><span>FSR2022の合同イラスト…</span>合同で同人誌を作りま…<p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- inner_content end -->
</x-dashboard>