<x-dashboard>
    <div class="flex-1 text-gray-700 text-center">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
        <h1>依頼中のデータ</h1>
        <div class="shadow-sm max-w-3xl mx-auto rounded mt-2">
            @foreach($articles as $article)
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex">
                    <div class="w-100">
                        <img class="rounded-lg md:w-56" src="/img/dummy.png" alt="Woman paying for a purchase">
                    </div>
                    <div class="mt-4 md:mt-0 md:ml-6">
                        <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold text-left">
                                    @if($article->order_type == 'P')
                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">プラン依頼</span>
                                    @else
                                        <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">自由依頼</span>
                                    @endif
                        <a href="#" class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">{{ $article->plan_title }}</a>
                        <p class="mt-2 text-gray-600">{{ $article->message }}</p>
                                    <a href="{{ route('user-request-detail.show', ['plan_id'=> $article->id ]) }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Read more
                                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
    </div>

    <!-- inner_content -->
    <div class="inner__content">
        <div class="inner__top_content">
        </div>
        <div class="inner__content_wrap">
            <div class="inner__left_content">
                <div class="s_box">
                    <div class="title">相談中のデータ(依頼者)</div>
                </div>
                <div class="pj_box">
                    <div class="content_box">
                        <a href="" class="flex_item">
                            <img src="{{ asset('img/p_icon.png')}}" alt="">
                            <div class="text_wrapper creator">
                                <div class="text">
                                    <span>title</span>
                                    text
                                </div>
                            <span class="btn">詳細を見る</span>
                            </div>
                        </a>
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