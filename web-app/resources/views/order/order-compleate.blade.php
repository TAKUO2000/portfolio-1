<x-layouts.web-app>
    <x-slot:title>
        注文用完了ページ
    </x-slot:title>
    <x-slot:header>
        注文用完了(従業員用ページ)
    </x-slot:header>

    <div class="my-3 mx-5 p-5 lg:w-2/3 lg:mx-auto bg-gray-300 rounded-lg">
        <div class="flex">
            <div class= "w-1/5 aspect-square p-1 bg-white rounded-lg">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900">
                    orderID<br>{{ $orderid }}
                </h1>
            </div>
            <div class= "w-4/5 p-1 ml-3 bg-white rounded-lg">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900">
                    @foreach( $orders as $order )
                        {{ $order->menu->menu_name }}
                        {{ $order->menu_piece }}<br>
                    @endforeach
                </h1>
            </div>
        </div>
    </div>

    <div class="flex container px-5 py-10 mx-auto">
        <div class="p-4 w-full lg:w-1/2 hover:bg-gray-300 rounded-lg">
            <div class ="relative">
            <div class="h-full bg-gray-300 bg-opacity-75 px-8 py-16 rounded-lg overflow-hidden text-center">
                <a href="{{route('order.employee')}}" class="font-medium text-xl h-full w-full absolute left-0 top-0 py-12">続けて注文</a>
            </div>
            </div>
        </div>

        <div class="p-4 w-full lg:w-1/2 hover:bg-gray-300 rounded-lg">
            <div class ="relative">
            <div class="h-full bg-gray-300 bg-opacity-75 px-8 py-16 rounded-lg overflow-hidden text-center">
                <a href="{{route('order_status.employee')}}" class="font-medium text-xl h-full w-full absolute left-0 top-0 py-12">注文状況の確認</a>
            </div>
            </div>
        </div>

</x-layouts.web-app>
