<x-dashboard>
        <!-- inner_content -->
        <div class="inner__content">
            <div class="inner__top_content">
            </div>
            <div class="inner__content_wrap">
                <div class="inner__left_content">
                    <div class="pj_detail_box">
                        <div class="title"> No.{{ $plan->id }} {{ $plan->plan_title }}</div>
                        <div class="detail_box">
                            <div class="img_box"><img src="{{ asset('img/'.$plan->img_url)}}" alt=""></div>
                            <div>
                                 <span>依頼者 : {{ $plan->user->name }}</span>
                                <p>{{ $plan->plan_text }}</p>
                                    <p>
                                        <br>納期 : 5月末まで
                                        <br>現代風のイラストが得意な方
                                    </p>
                            </div>
                        </div>
                        <div>
                            @foreach($plan_msg as $msg)
                                    <div class="pj_msg_box">
                                        <div>投稿者 : {{ $msg->user->name }}
                                            @if($msg->user->creator->creator_name != null)
                                            / <a href="{{ route('creator.show', ['id'=> $msg->user->creator->id ]) }}">{{ $msg->user->creator->creator_name }} 
                                            <i class="fas fa-envelope"></i></a>
                                            @endif
                                        <span style="font-size: 0.8rem;">2022-04-06 07:25:43</span></div>
                                        <p>{{ $msg->message }}</p>
                                    </div>
                            @endforeach
                            <div class="pj_msg_box">
                                <div>投稿者 : テストユーザー88 <span style="font-size: 0.8rem;">2022-04-06 07:25:43</span></div>
                                <p>面白そうですね。</p>
                            </div>
                        </div>
                        <!-- form start -->
                        <div class="pj_msg_box msg_form">
                            <form action="" method="POST" class="card card-body shadow-2 mb-3">
                                @csrf
                                <input type="hidden" name="_token" value="2VtAsqj3VMge8Ndn2aVcq7sLlxwVdTVlgYdgOfSn">
                                <div class="mb-2">
                                    <p class="mb-1 text-gray-400 font-weight-bold" style="font-size: 0.8rem;">メッセージを投稿</p>
                                    <div class="form-outline">
                                        <textarea class="form-control placeholder-active w-full" id="text-area" rows="3" name="message"
                                            placeholder="メッセージを入力"></textarea>
                                        <div class="form-notch">
                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                            <div class="form-notch-middle" style="width: 0px;"></div>
                                            <div class="form-notch-trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="w-full py-2.5 px-5 mr-2 mb-2 text-sm font-medium bg-gray-300 text-gray-900 focus:outline-none bg-gray rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">投稿</button>
                            </form>
                        </div>
                        <!-- form end-->
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