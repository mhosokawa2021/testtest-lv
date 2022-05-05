<x-dashboard>
  <!-- inner_content -->
    <div class="inner__content">
        <div class="inner__top_content">
        </div>
        <div class="inner__content_wrap">
            <div class="inner__left_content">
                <div class="s_box">
                  @if($type === "project")
                    <div class="title">プロジェクト検索</div>
                    <div class="cp_iptxt">
                        <input type="text" placeholder="プロジェクト名、キーワード、タグ...">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </div>
                  @else
                    <div class="title">クリエイター検索</div>
                    <div class="cp_iptxt">
                        <input type="text" placeholder="クリエイター名、キーワード、タグ...">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </div>
                  @endif
                </div>
                <div class="pj_box">
                    @if($show_list)
                      <div id="project_act">あなたが現在クリエイターを募集しているプロジェクト</div>
                    @endif
                    <div class="content_box">
                      @if($articles->count() === 0)
                        <p>検索結果がありませんでした</p>
                        @else
                          @if($type === "project")
                              @foreach($articles as $article)
                                <a href="{{ route('plan.show', ['id'=>$article->id]) }}" class="flex_item">
                                  <img src="{{ asset('img/p_icon.png')}}" alt="">
                                  <div class="text_wrapper">
                                    <div class="text">
                                      <span>{{ $article->plan_title }}</span>
                                      {{ $article->plan_text }}
                                    </div>
                                    <span class="btn">詳細を見る</span>
                                  </div>
                                </a>
                              @endforeach
                            @else
                              @foreach($articles as $article)
                                <a href="{{ route('creator.show', ['id'=>$article->id]) }}" class="flex_item">
                                  <img src="{{ asset('img/p_icon.png')}}" alt="">
                                  <div class="text_wrapper creator">
                                    <div class="text">
                                      <span>{{ $article->creator_name }}</span>
                                      {{ $article->creator_text }}
                                    </div>
                                    <span class="btn">詳細を見る</span>
                                  </div>
                                </a>
                              @endforeach
                            @endif
                        @endif
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