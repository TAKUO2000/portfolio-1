<x-layouts.web-app>
    <x-slot:title>
        注文用ページ(従業員用ページ)
    </x-slot:title>
    <x-slot:header>
        注文用ページ(従業員用ページ)
    </x-slot:header>
    <div class="container px-5 py-2 mx-auto">
    <form action="{{ route('order.create') }}" method="POST">
    @csrf
        <div>
            <label>オーダー番号</label>
            <input type="number" name="order_number" min="1">
        </div>

        <div>
            <label>メニュー名</label><br>
            <select name="menu_id">
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->menu_name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>個数</label>
            <input type="number" name="menu_piece" min="1">
        </div>

    </div>
    <input type="submit" value="送信">
    </form>

</x-layouts.web-app>
