<x-dashboard>
    <!-- inner_content -->
        <div class="inner__content">
            <div class="inner__top_content">
            </div>
            <div class="inner__content_wrap">
                <div class="inner__left_content">
                    <div class="menu_box">
                        <div class="title">進行中(依頼者側)</div>
                        <div class="cseq_box">
                            <p>進行ステータス：製作中</p>
                            <ul class="c_seq_list">
                                @foreach($projectprocs as $projectproc)
                                    @foreach($projectproc as $proc)
                                        @if($proc['img_url'])
                                            <li class="is_exist">{{ $proc['proc_name'] }}(投稿済)</li>                                        
                                        @else
                                            <li>{{ $proc['proc_name'] }}</li>
                                        @endif
                                    @endforeach
                                @endforeach
                                <li>完了</li>
                            </ul>
                        </div>
                    </div>
                    <div class="siko_wrapper">
                        <div class="siko_box">
                            @foreach($projectprocs as $projectproc)
                            <div class="siko_item">
                                @foreach($projectproc as $proc)
                                <form action="{{ route('project_img.register',[ 'project_procs_id' => $proc['id'] ]) }}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="title">{{ $proc['proc_name'] }}</div>
                                        @if($proc['img_url'])
                                        <img src="{{ asset('storage/project/images/'.$proc['img_url'].'')}}">
                                        @endif
                                    <div class="upload_wrapper">
                                    <input name="imgpath" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                    <button type="submit" class="w-full px-3 py-2 text-xs font-medium text-center text-white bg-gray-900 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">アップロードする</button>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                            @endforeach
                            <div class="siko_item">
                                <div class="title">完成品のアップロード</div>
                                <div class="upload_wrapper">
                                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                <button type="submit" class="w-full px-3 py-2 text-xs font-medium text-center text-white bg-gray-900 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">アップロードする</button>            
                                </div>
                            </div>
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