<x-dashboard>
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
                    @foreach($articles as $article)
                        <a href="{{ route('user-request-detail.show', ['plan_id'=> $article->id ]) }}" class="flex_item">
                            <img src="{{ asset('img/p_icon.png')}}" alt="">
                            <div class="text_wrapper creator">
                                <div class="text">
                                    @if($article->order_type == 'P')
                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">プラン依頼</span>
                                    @else
                                        <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">自由依頼</span>
                                    @endif
                                    <span>{{ $article->plan_title }}</span>
                                    {{ $article->message }}
                                </div>
                            <span class="btn">詳細を見る</span>
                            </div>
                        </a>
                    @endforeach
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