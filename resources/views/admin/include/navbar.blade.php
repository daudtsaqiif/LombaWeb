<nav class="bg-white border-gray-200">
    <div class=" flex flex-wrap items-center justify-between p-4">
        <img src="{{ asset('asset/image/se(7).png') }}" alt="" >
        @if (Auth::check())
            <div class=" flex ">
                <ul class="font-medium flex flex-col">
                    <li>
                        <a href="{{ route('car.index') }}" class="block py-2 px-3 hover:text-purple-500">Katalog Mobil</a>
                    </li>
                </ul>
                <ul class="font-medium flex flex-col">
                    <li>
                        <a href="{{ route('sewa.index') }}" class="block py-2 px-3 hover:text-purple-500">Syarat dan
                            Kententuan sewa
                            dan menyewa </a>
                    </li>
                </ul>
            </div>
        @else
            <p class="text-gray-500">*Login/sigin terlebih dahulu untuk mengakses</p>
        @endif

        <ul class="font-medium flex flex-col">
            @if (Auth::check())
                <li>
                    <div class="flex items-center">
                        <div class="flex">
                            <img class="ml-3 w-10 h-10 rounded-full lg:order-2" src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}" alt="Neil image">
                            <p class="ml-2 mt-2 text-lg text-purple-500 lg:order-1">{{ Auth::user()->name }}</p>
                        </div>
                        <a href="{{ route('login.create') }}"
                            class="flex m-3 py-3 px-3 text-white bg-green-600 border rounded-full relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-500 before:to-red-600 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white">
                            Logout
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                            </svg>
                        </a>
                    </div>
                </li>
            @else
                <div class="flex gap-2">
                    <li>
                        <a href="{{ route('login.index') }}"
                            class="block py-2 px-3 text-purple-600 border rounded-lg hover:text-purple-900 hover:bg-gray-300 ">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('signin.index') }}"
                            class="block py-2 px-3 text-purple-600 border rounded-lg hover:text-purple-900 hover:bg-gray-300">Sign
                            in</a>
                    </li>
                </div>
            @endif
        </ul>
    </div>

    </div>
</nav>
<hr>
