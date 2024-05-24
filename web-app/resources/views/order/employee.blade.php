<x-layouts.web-app>
    <x-slot:title>
        注文用ページ(従業員用ページ)
    </x-slot:title>
    <x-slot:header>
        注文用ページ(従業員用ページ)
    </x-slot:header>
    <div class="my-3 mx-5 p-5 lg:w-2/3 lg:mx-auto bg-gray-300 rounded-lg">
        <form action="{{ route('order.create') }}" method="POST">
        @csrf
            <div class="my-1 py-3 rounded-lg bg-white flex">
                <div class="w-28 m-2">
                    <label class=" text-lg font-medium">オーダー番号</label>
                </div>
                <div>
                    <input type="number" name="order_number" min="1">
                </div>
                </div>

            <div class="my-1 py-3 rounded-lg bg-white flex">
                <div class="w-28 m-2">
                    <label class=" text-lg font-medium">メニュー名</label>
                </div>
                <div>
                    <select name="menu_id">
                        @foreach($menus as $menu)
                            <option value="{{ $menu->id }}">{{ $menu->menu_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="my-1 py-3 rounded-lg bg-white flex">
                <div class="w-28 m-2">
                    <label class=" text-lg font-medium">個数</label>
                </div>
                <div>
                    <input type="number" name="menu_piece" min="1">
                </div>
            </div>
            <div class="flex">
                <button class="bg-white my-1 mr-2 p-1 rounded-lg">メニュー追加</button>
                <input class="bg-white my-1 p-1 rounded-lg" type="submit" value="送信">
            </div>
        </form>
    </div>

</x-layouts.web-app>
