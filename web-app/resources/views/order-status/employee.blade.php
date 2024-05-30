<x-layouts.web-app>
    <x-slot:title>
        注文状況
    </x-slot:title>
    <x-slot:header>
        注文状況
    </x-slot:header>
    @foreach($order_array as $key => $order)
    <div class="my-3 mx-5 p-5 lg:w-2/3 lg:mx-auto bg-gray-300 rounded-lg">
        <div class="flex">
            <div class= "w-1/5 aspect-square p-1 bg-white rounded-lg">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900">
                    orderID<br>{{ $key }}
                </h1>
            </div>
            <div class= "w-4/5 p-1 ml-3 bg-white rounded-lg">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900">
                    @foreach($order as $key => $order_value)
                        {{ $key }}  
                        {{ $order_value }}<br>
                    @endforeach
                </h1>
            </div>
        </div>
    </div>
    @endforeach

</x-layouts.web-app>
    

