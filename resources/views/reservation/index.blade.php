<h1>予約一覧</h1>
@foreach ($reservations as $reservation)
    <p>
        予約者：{{ $reservation->user->name }}
        担当スタッフ：{{ $reservation->staff->name }}
        メニュー：{{ $reservation->menu->name }}
        料金：{{ $reservation->menu->price }}
        施術時間：{{ $reservation->menu->duration }}
    </p>
@endforeach