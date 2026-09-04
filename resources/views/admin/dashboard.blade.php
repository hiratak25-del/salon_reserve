<h1>管理者ダッシュボード</h1>
<p>管理機能はこちらです。</p>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button
        type="submit"
        class="bg-red-400 text-white px-4 py-2 rounded-lg hover:bg-red-500"
    >
        ログアウト
    </button>
</form>