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
                    <label class=" text-lg font-medium">オーダー番号{{ $orderid }}</label>
                </div>
            </div>

            <div id = menu-container>
                <div id = menu-item>
                <div class="my-1 py-3 rounded-lg bg-white flex">
                    <div class="w-28 m-2">
                        <label class=" text-lg font-medium">メニュー名</label>
                    </div>
                    <div>
                        <select name="menu_ids[]">
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
                        <input type="number" name="menu_pieces[]" min="1">
                    </div>
                </div>
            </div>
            </div>

                <div class="flex">
                    <div>
                    <input class="bg-white my-1 p-1 rounded-lg  border-2 border-green-400 hover:bg-green-200" type="submit" value="オーダーを送信">
                    </div>
                </div>
        </form>
            <button class="bg-white my-1 mr-2 p-1 rounded-lg border-2 border-gray-400 hover:bg-gray-200" id="add-menu-button">メニュー追加</button>
    </div>

    <script>
document.getElementById('add-menu-button').addEventListener('click', function() {
    var menuContainer = document.getElementById('menu-container');
    var newMenuItem = menuContainer.children[0].cloneNode(true);

    // 複製した入力フィールドの値をクリア
    var inputs = newMenuItem.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].value = '';
    }

    menuContainer.appendChild(newMenuItem);
});
    </script>

</x-layouts.web-app>
