
<h1>予約一覧</h1>
@foreach ($reservations as $reservation)
    <p class="flex flex-column">
        予約者：{{ $reservation->user->name }}
        担当スタッフ：{{ $reservation->staff->name }}
        メニュー：{{ $reservation->menu->name }}
        料金：{{ $reservation->menu->price }}
        予約日：{{ $reservation->reservation_date }}
        開始時間：{{ $reservation->start_time }}
        終了時間：{{ $reservation->end_time }}
        施術時間：{{ $reservation->menu->duration }}
    </p>
@endforeach

<a href="{{ route('user.dashboard') }}">あなたの予約を確認する</a>