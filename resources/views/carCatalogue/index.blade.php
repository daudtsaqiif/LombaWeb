@extends('admin.parent')


@section('content')
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="flex justify-between">
        <div class="m-6">
            <h1 class="text-3xl font-bold">Car Catalogue</h1>
            <p class="text-gray-500">Explore out cars you might like!</p>
        </div>



    </div>

    <div class="mx-auto">
        <div class="mx-5 sm:grid sm:grid-cols-2 md:gap-5 md:mx-10 lg:grid lg:grid-cols-4 lg:gap-5 lg:mx-10 ">
            @foreach ($car as $c)
                <div class="max-w-sm bg-gray-100 rounded-lg shadow-md crusor-default ">
                    <div class="p-4">
                        <h2 class="text-lg font-medium text-gray-900">{{ $c->name }}</h2>
                        <p class="text-gray-500 text-base">RP.{{ $c->harga }}/Hari</p>
                    </div>
                    <img class="w-full h-48 " src="{{ asset('catalogue/' . $c->gambar) }}"
                        alt="Toyota New Yaris car">
                    <div class=" flex  justify-between p-4 group ">
                        <div class="justify-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"
                                class="flex justify-center align-items-center">
                                <path
                                    d="M12 4C6.486 4 2 8.486 2 14a9.89 9.89 0 0 0 1.051 4.445c.17.34.516.555.895.555h16.107c.379 0 .726-.215.896-.555A9.89 9.89 0 0 0 22 14c0-5.514-4.486-10-10-10zm7.41 13H4.59A7.875 7.875 0 0 1 4 14c0-4.411 3.589-8 8-8s8 3.589 8 8a7.875 7.875 0 0 1-.59 3z">
                                </path>
                                <path
                                    d="M10.939 12.939a1.53 1.53 0 0 0 0 2.561 1.53 1.53 0 0 0 2.121-.44l3.962-6.038a.034.034 0 0 0 0-.035.033.033 0 0 0-.045-.01l-6.038 3.962z">
                                </path>
                            </svg>
                            <p>{{ $c->transmisi }}</p>
                        </div>
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <circle cx="9" cy="4" r="2"></circle>
                                <path
                                    d="M16.98 14.804A1 1 0 0 0 16 14h-4.133l-.429-3H16V9h-4.847l-.163-1.142A1 1 0 0 0 10 7H9a1.003 1.003 0 0 0-.99 1.142l.877 6.142A2.009 2.009 0 0 0 10.867 16h4.313l.839 4.196c.094.467.504.804.981.804h3v-2h-2.181l-.839-4.196z">
                                </path>
                                <path
                                    d="M12.51 17.5c-.739 1.476-2.25 2.5-4.01 2.5A4.505 4.505 0 0 1 4 15.5a4.503 4.503 0 0 1 2.817-4.167l-.289-2.025C3.905 10.145 2 12.604 2 15.5 2 19.084 4.916 22 8.5 22a6.497 6.497 0 0 0 5.545-3.126l-.274-1.374H12.51z">
                                </path>
                            </svg>
                            <p>{{ $c->kursi }} Kursi</p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path
                                    d="m19.616 6.48.014-.017-4-3.24-1.26 1.554 2.067 1.674a2.99 2.99 0 0 0-1.394 3.062c.15.899.769 1.676 1.57 2.111.895.487 1.68.442 2.378.194L18.976 18a.996.996 0 0 1-1.39.922.995.995 0 0 1-.318-.217.996.996 0 0 1-.291-.705L17 16a2.98 2.98 0 0 0-.877-2.119A3 3 0 0 0 14 13h-1V5a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-4h1c.136 0 .267.027.391.078a1.028 1.028 0 0 1 .531.533A.994.994 0 0 1 15 16l-.024 2c0 .406.079.799.236 1.168.151.359.368.68.641.951a2.97 2.97 0 0 0 2.123.881c.406 0 .798-.078 1.168-.236.358-.15.68-.367.951-.641A2.983 2.983 0 0 0 20.976 18L21 9a2.997 2.997 0 0 0-1.384-2.52zM11 8H4V5h7v3zm7 2a1 1 0 1 1 0-2 1 1 0 0 1 0 2z">
                                </path>
                            </svg>
                            <p>{{ $c->bahanBakar }}</p>
                        </div>
                    </div>
                    <div class="flex">
                        @if (Auth::user()->role == 'admin')
                        <a href="{{ route('car.show', $c->id) }}"
                            class="w-[150px] ml-5 bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-purple-400 before:to-purple-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white ">
                            Keterangan....
                        </a>
                            <form action="{{ route('car.destroy', $c->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="w-[150px] ml-5 bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-400 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white">
                                    Hapus
                                </button>
                            </form>
                        @else
                            <a href="{{ route('car.show', $c->id) }}"
                                class=" w-[150px] ml-5 bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-purple-400 before:to-purple-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white ">
                                Keterangan....
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        @if (Auth::user()->role == 'admin')
        <div class="flex justify-end mt-8">
            <a href="{{ route('car.create') }}"
                class="mr-3 w-[150px] ml-5 bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-sky-300 before:to-sky-600 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white">
                Sewakan Mobil</a>
        </div>
        @else
            <p>*kontak admin jika anda ingin menyewakan mobil anda</p>
        @endif
    </div>
@endsection
