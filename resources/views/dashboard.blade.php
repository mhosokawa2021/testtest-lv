<x-dashboard>
  <!-- inner_content -->
    <div class="inner__content">
        <div class="inner__top_content">
        </div>
        <div class="inner__content_wrap">
            <div class="inner__left_content">
                <div class="s_box">
                    <div class="title">クリエイター検索</div>
                    <div class="cp_iptxt">
                        <input input type="text" name="keyword" id="search-keyword" placeholder="クリエイター名、タグ、キーワード...">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="menu_box notice">
                    <div class="content_box">
                        <span class="title">募集中</span>
                        <a href="{{ route('plan.show_list') }}" class="flex_item flex_item_w100">あなたは <p class="color_r">{{ $user_plan }}</p>件 のプロジェクトでクリエイターを募集中です。</a>
                    </div>
                </div>
                <div class="menu_box">
                    <div class="title">進行中の依頼(依頼者)</div>
                    <div class="content_box">
                        <a href="{{ route('user-requests.show') }}" class="flex_item">相談中 {{ $user_req }}件</a>
                        <a href="{{ route('user-project.show') }}" class="flex_item">制作中 {{ $user_project }}件</a>
                        <a href="#" class="flex_item">完了 0 件</a>
                    </div>
                </div>
                @if($creator_id)
                <div class="menu_box">
                    <div class="title">進行中の依頼(クリエイター)</div>
                    <div class="content_box">
                        <a href="{{ route('creator-requests.show', ['creator_id'=> $creator_id ]) }}" class="flex_item">相談中 {{ $creator_req->count() }}件</a>
                        <a href="{{ route('creator-project.show', ['creator_id'=> $creator_id ]) }}" class="flex_item">制作中 {{ $creator_project->count() }}件</a>
                        <a href="#" class="flex_item">完了 0 件</a>
                    </div>
                </div>
                @endif
                <!-- msg box -->
                <div class="menu_box">
                    <div class="title">新着メッセージ</div>
                    <div class="msg_box">
                        <div class="msg_headline">
                            <div class="notice_badge_news">お知らせ</div>
                            <a href="#">
                                <span>2022.05.01</span>
                                <p>メッセージが届きました。</p>
                            </a>
                        </div>
                        <div class="msg_headline">
                            <div class="notice_badge_news">お知らせ</div>
                            <a href="#">
                                <span>2022.05.02</span>
                                <p>相談中のプロジェクトが受諾されました。</p>
                            </a>
                        </div>
                        <div class="msg_headline">
                            <div class="notice_badge_news">お知らせ</div>
                            <a href="#">
                                <span>2022.05.05</span>
                                <p>運営よりお知らせがあります。</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- msg box end -->
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