@extends('admin.parent')


@section('content')
    <div class="bg-white shadow-lg">
        <div class="mt-20 mx-5 grid grid-cols-1 md:grid-cols-2 gap-3">

            <div class="">
                <label for="" class="text-sm font-medium">Nama Pemilik</label>
                <input type="text" class=" bg-gray-100 max-w-lg border border-gray-300 rounded-lg block w-full p-2.5 "
                    value="{{ $car->pemilik }}" disabled>
            </div>
            <div class="">
                <label for="" class="text-sm font-medium">Nama Mobil</label>
                <input type="text"
                    class=" bg-gray-100 max-w-lg  border border-gray-300 text-sm rounded-lg block w-full p-2.5 "
                    value="{{ $car->name }}" disabled>
            </div>
            <div class="">
                <label for="" class="text-sm font-medium">Jumlah Kursi</label>
                <input type="text"
                    class="bg-gray-100 max-w-lg  border border-gray-300 text-sm rounded-lg block w-full p-2.5 "
                    value="{{ $car->kursi }}" disabled>
            </div>
            <div class="">
                <label for="" class="text-sm font-medium">Mesin</label>
                <input type="text"
                    class="bg-gray-100 max-w-lg  border border-gray-300 text-sm rounded-lg block w-full p-2.5 "
                    value="{{ $car->mesin }}cc" disabled>
            </div>
            <div class="">
                <label for="" class="text-sm font-medium">Bahan Bakar</label>
                <input type="text"
                    class="bg-gray-100 max-w-lg  border border-gray-300 text-sm rounded-lg block w-full p-2.5 "
                    value="{{ $car->bahanBakar }}" disabled>
            </div>
            <div class="">
                <label for="" class="text-sm font-medium">Harga/Hari</label>
                <input type="text"
                    class="bg-gray-100 max-w-lg  border border-gray-300 text-sm rounded-lg block w-full p-2.5 "
                    value="RP{{ $car->harga }}" disabled>
            </div>
            <div class="">
                <label for="" class="text-sm font-medium">Tahun</label>
                <input type="text"
                    class="bg-gray-100 max-w-lg  border border-gray-300 text-sm rounded-lg block w-full p-2.5 "
                    value="{{ $car->tahun }}" disabled>
            </div>
            <div class="">
                <label for="" class="text-sm font-medium">Nomor telepon/Wa</label>
                <input type="text"
                    class="bg-gray-100 max-w-lg  border border-gray-300 text-sm rounded-lg block w-full p-2.5 "
                    value="{{ $car->nomorHp }}" disabled>
            </div>
            <div class="">
                <label for="" class="text-sm font-medium">Transmisi</label>
                <input type="text"
                    class="bg-gray-100 max-w-lg  border border-gray-300 text-sm rounded-lg block w-full p-2.5 "
                    value="{{ $car->transmisi }}" disabled>
            </div>

            <div class="">
                <label for="" class="text-sm font-medium">Foto Mobil</label>
                <img src="{{ asset('catalogue/' . $car->gambar) }}" class="w-2/3" alt="">
            </div>
            <div class="flex">
                <a href="{{ route('car.index') }}"
                    class="w-[150px] ml-5 bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-yellow-400 before:to-yellow-700 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>
                    Kembali
                </a>
                <p class="text-gray-600 ml-4">*Jika anda ingin menyewa kendaraan bisa menghubungi nomor telepon yang tersedia.</p>
            </div>

        </div>
    </div>
@endsection
