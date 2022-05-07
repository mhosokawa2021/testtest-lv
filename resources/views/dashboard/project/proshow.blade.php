<x-dashboard>
    <!-- inner_content -->
        <div class="inner__content">
            <div class="inner__top_content">
            </div>
            <div class="inner__content_wrap">
                <div class="inner__left_content">
                    <div class="s_box">
                        <div class="title">制作中のデータ(依頼者)</div>
                    </div>
                    <div class="pj_box">
                        <div class="content_box">
                            @foreach($projects as $project)
                            <a href="{{ route('user-project-detail.show', ['project_id'=> $project->id ]) }}" class="flex_item">
                                <img src="{{ asset('img/'.$project->img_url)}}" alt="">
                                <div class="text_wrapper creator">
                                    <div class="text">
                                    <p><span>{{ $project->project_title }}</span>{{ $project->created_at }}</p>
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