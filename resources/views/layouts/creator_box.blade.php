<div class="s_box">
    <div class="title">クリエイター検索</div>
    <div class="cp_iptxt">
        <form method="GET" action="{{ route('dashboard.search') }}">
        @csrf
            <input input type="text" name="keyword" id="search-keyword" placeholder="クリエイター名、タグ、キーワード...">
            <input type="hidden" name="search_type" value="creator">
            <i class="fas fa-search" aria-hidden="true"></i>
        </from>
    </div>
</div>