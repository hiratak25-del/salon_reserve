<h1>ユーザーダッシュボード</h1>


<a href="{{ route('user.index') }}">予約一覧を見る</a>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('reservation.create') }}">予約する</a>
                </div>
            </div>
        </div>
    </div>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button
        type="submit"
        class="bg-red-400 text-white px-4 py-2 rounded-lg hover:bg-red-500"
    >
        ログアウト
    </button>
</form>