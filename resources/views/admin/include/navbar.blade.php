<nav class="bg-white border-gray-200">
    <div class=" flex flex-wrap items-center justify-between p-4">
        <a href="#" class="flex items-center ">
            <span class="self-center text-2xl font-semibold ">SEMOL</span>
        </a>
        <div class=" flex ">
            <ul
                class="font-medium flex flex-col">
                <li>
                    <a href="{{ route('car.index') }}" class="block py-2 px-3 hover:text-purple-500">Car Catalogue</a>
                </li>
            </ul>
            <ul class="font-medium flex flex-col">
                <li>
                    <a href="{{ route('sewa.index') }}" class="block py-2 px-3 hover:text-purple-500">Syarat dan Kententuan sewa
                        dan menyewa </a>
                </li>
            </ul>
        </div>
        <ul class="font-medium flex flex-col">
            @if (Auth::check())
                <li>
                    <div class="flex items-center">
                        <div class="flex">
                            <p class="pr-2 text-lg text-purple-500 order-2 md:order-1">{{ Auth::user()->name }}</p>
                            <img class="w-8 h-8 rounded-full mr-1 order-1 md:order-2"
                                src="{{ asset('asset/imgs/profile.jpg') }}" alt="user photo">
                        </div>
                        <a href="{{ route('login.create') }}"
                            class="block m-3 py-2 px-3 text-white bg-red-600 border rounded-lg hover:bg-red-800">Logout</a>
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
