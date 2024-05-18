<x-layouts.web-app>
    <x-slot:title>
        HOME -ホーム-
    </x-slot:title>

    <x-slot:header>
        HOME -ホーム-
    </x-slot:header>

    <section class="text-gray-900 body-font">
        <div class="container px-5 py-10 mx-auto">
          <div class="flex flex-wrap -m-4">


            <div class="p-4 w-full lg:w-1/3 hover:bg-gray-300 rounded-lg">
              <div class="h-full bg-gray-300 bg-opacity-75 px-8 py-16 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">注文</h1>
                <img src="images/icons8-注文-100.png" alt="" class="mx-auto mb-5">

                <a class="text-indigo-500 inline-flex items-center p-2 hover:text-indigo-900" href="/home/order/customer">お客様用ページ
                  <svg class="w-4 h-4 ml-2 mb-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
                <br>
                <a class="text-indigo-500 inline-flex items-center p-2 hover:text-indigo-900">従業員用ページ
                    <svg class="w-4 h-4 ml-2 mb-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14"></path>
                      <path d="M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
              </div>
            </div>

            <div class="p-4 w-full lg:w-1/3  hover:bg-gray-300 rounded-lg">
                <div class="h-full bg-gray-300 bg-opacity-75 px-8 py-16 rounded-lg overflow-hidden text-center relative">
                  <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">注文状況</h1>
                  <img src="images/icons8-注文-90.png" class="mx-auto mb-3">
                  <a class="text-indigo-500 inline-flex items-center p-2 hover:text-indigo-900"  href ="/home/order-status/employee">従業員用ページ
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14"></path>
                      <path d="M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>


            <div class="p-4 w-full lg:w-1/3 hover:bg-gray-300 rounded-lg">
                <div class="h-full bg-gray-300 bg-opacity-75 px-8 py-16 rounded-lg overflow-hidden text-center relative">
                  <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">管理</h1>
                  <img src="images/icons8-管理-96.png" class="mx-auto mb-3">
                  <div class = "my-auto">
                    <a class="text-indigo-500 inline-flex items-center p-2 hover:text-indigo-900">管理者用ページ
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                  </div>
                </div>
              </div>


          </div>
        </div>
      </section>
</x-layouts.web-app>

