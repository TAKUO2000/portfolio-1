
<x-layouts.web-app>
    <x-slot:title>
        メニュー管理
    </x-slot:title>
    <x-slot:header>
        メニュー管理
    </x-slot:header>
    <h1>現在のメニュー 一覧</h1>
    @foreach( $menus as $menu )
    <h2>{{ $menu->menu_name }}</h2>
    @endforeach

    <h1>メニュー追加</h1>
    <form action="{{route('mgmt.create') }}" method="POST">
        @csrf
        <h2>商品名</h2>
        <input type="text" name="newMenu">
        <h2>価格</h2>
        <input type="number" name="newMenuPrice">
        <input type="submit" value="送信">
    </form>
</x-layouts.web-app>