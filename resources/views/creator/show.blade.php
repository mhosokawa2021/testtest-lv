<x-dashboard>
  <!-- inner_content -->
  <div class="inner__content">
      <div class="inner__top_content">
      </div>
      <div class="inner__content_wrap">
          <div class="inner__left_content">
              <div class="creator_box">
                  <div class="title">作品一覧</div>
                  <div class="content_box">
                      <a href="#" class="flex_item">
                          <img src="{{ asset('img/p_icon.png')}}" alt="">
                      </a>
                      <a href="#" class="flex_item">
                          <img src="{{ asset('img/p_icon.png')}}" alt="">
                      </a>
                      <a href="#" class="flex_item">
                          <img src="{{ asset('img/p_icon.png')}}" alt="">
                      </a>
                  </div>
              </div>
              <div class="creator_box">
                  <div class="title">このクリエイターのプラン一覧</div>
                  <div class="content_box">
                    <a href="{{ route('free_requests.request',['creator_id'=>$creator->id]) }}" class="flex_item plan">自由依頼</a>
                      @foreach($creator_plans as $plan)
                            <a href="{{ route('creator_plan.request',['creator_id'=>$plan->creator_id, 'plan_id'=>$plan->id]) }}" class="flex_item plan">{{ $plan->creator_plan_name }}</a> 
                      @endforeach
                  </div>
              </div>
              <!-- msg box -->
              <div class="menu_box">
                  <div class="title">依頼について</div>
                  <div class="content_box">
                      <p>動物イラストが得意です。<br>
                      5月中頃以降スケジュールが空いているので依頼募集中です。</p>
                  </div>
              </div>
              <!-- msg box end -->
          </div>
          <div class="inner__right_content">
              <div class="prof_box">
                  <div class="title">プロフィール</div>
                  <div class="profile_img"></div>
                  <span class="c_name">{{ $creator->creator_name }}</span>
                  <div class="c_text">クリエイター</div>
                  <div class="c_list">
                      <dl>
                          <dt>依頼の種類</dt>
                          <dd>有償/無償 問わず</dd>
                          <dt>返答日数</dt>
                          <dd>5日以内に返答</dd>
                          <dt>可能稼働日数</dt>
                          <dd>週に3日程度</dd>
                          <dt>twitter</dt>
                          <dd>@azarashi</dd>
                          <dt>youtube</dt>
                          <dd>お絵かきチャンネル</dd>
                      </dl>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- inner_content end -->
</x-dashboard>