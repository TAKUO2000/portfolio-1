
<x-layouts.web-app>
    <x-slot:title>
        注文状況
    </x-slot:title>
    <x-slot:header>
        注文状況
    </x-slot:header>


    <tr>
        <th>注文ID</th>
        <th>注文メニュー</th>
        <th>注文数</th>
        <br>
    </tr>
    @foreach($orders as $order)

    <div class="my-3 mx-5 p-5 lg:w-2/3 lg:mx-auto bg-gray-300 rounded-lg">
        <div class="flex">
            <div class= "w-1/4 p-1 bg-white rounded-lg">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900">
                    orderID<br>
                    {{ $order->order_number }}
                </h1>
            </div>
            <div class= "w-3/4 p-1 ml-3 bg-white rounded-lg">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900">
                    商品名
                    {{ $order->menu_name}}<br>

                    個数
                    {{ $order->menu_piece }}
                </h1>
            </div>
        </div>
            <div class=""></div>
    </div>

@endforeach

</x-layouts.web-app>
    

