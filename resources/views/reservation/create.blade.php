<h1>予約登録</h1>

<form action="{{ route('reservation.store') }}" method="POST">
    @csrf

    <div>
        <label for="staff_id">スタッフ</label>

        <select name="staff_id" id="staff_id">
            @foreach ($staffs as $staff)

                <option value="{{ $staff->id }}">
                    {{ $staff->name }}
                </option>

            @endforeach
        </select>
    </div>

    <div>

        <label for="menu_id">メニュー</label>

        <select name="menu_id" id="menu_id">
            @foreach ($menus as $menu)

                <option value="{{ $menu->id }}">
                    {{ $menu->name }}
                </option>
            @endforeach
        </select>
        
        <label for="reservation_date">予約日</label>
        <input type="date" name="reservation_date" id="reservation_date">

        <label for="start_time">開始時間</label>
        <input type="time" name="start_time" id="start_time">

        <label for="end_time">終了時間</label>
        <input type="time" name="end_time" id="end_time">

        <label for="status">ステータス</label>
        <input type="text" name="status" id="status" value="予約受付">
    </div>

    <button type="submit">予約する</button>
</form>