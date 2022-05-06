<div class="title">プロジェクト検索</div>
<div class="cp_iptxt">
    <form method="GET" action="{{ route('dashboard.search') }}">
    @csrf
    <input type="text" name="keyword" id="search-keyword" placeholder="プロジェクト名、キーワード、タグ...">
    <input type="hidden" name="search_type" value="project">
    <i class="fas fa-search" aria-hidden="true"></i>
    </form>
</div>