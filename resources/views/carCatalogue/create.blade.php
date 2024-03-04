@extends('admin.parent')

@section('content')


    <form class="mt-20 mx-5 grid grid-cols-1 md:grid-cols-2 gap-3" action="{{ route('car.store') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="">
            <label for="pemilik" class="block mb-2 text-sm font-medium text-gray-900">Nama Pemilik</label>
            <input type="text" name="pemilik"
                class="shadow-sm bg-gray-50 border max-w-lg border-gray-300 max-w-lg text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="Pemilik" required />
        </div>
        <div class="">
            <label for="nomorHp" class="block mb-2 text-sm font-medium text-gray-900">Nomor telepon/Wa</label>
            <input type="number" name="nomorHp"
                class="shadow-sm bg-gray-50 border max-w-lg border-gray-300 max-w-lg text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="Nomor telepon/Wa" required />
                <p class="text-gray-500">*Cukup masukan angka</p>
        </div>
        <div class="">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Mobil</label>
            <input type="text" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 max-w-lg text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="nama" required />
        </div>
        <div class="">
            <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900">Tipe Mobil</label>
            <select name="tipe"
                class="bg-gray-50 border border-gray-300 max-w-lg text-gray-900 text-sm rounded-lg block w-full p-2.5">
                <option>SUV</option>
                <option>MPV</option>
                <option>Sedan</option>
                <option>Sport</option>
                <option>Convertible</option>
                <option>Station Wagon</option>
                <option>Pick Up dan Mobil Double Cabin</option>
                <option>Listrik atau Mobil Elektrik</option>
                <option>Off Road</option>
                <option>Hybrid</option>
                <option>LCGC</option>
                <option>Hatchback</option>
                <option>Crossover</option>
                <option></option>
            </select>
        </div>
        <div class="">
            <label for="kursi" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Kursi</label>
            <input type="number" name="kursi"
                class="shadow-sm bg-gray-50 border border-gray-300 max-w-lg text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="Jumlah" required />
                <p class="text-gray-500">*Cukup masukan angka</p>
        </div>
        <div class="">
            <label for="mesin" class="block mb-2 text-sm font-medium text-gray-900">Mesin</label>
            <input type="number" name="mesin"
                class="shadow-sm bg-gray-50 border border-gray-300 max-w-lg text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="Mesin/cc" required />
                <p class="text-gray-500">*Cukup masukan angka</p>
        </div>
        <div class="">
            <label for="bahanBakar" class="block mb-2 text-sm font-medium text-gray-900">Bahan Bakar</label>
            <input type="text" name="bahanBakar"
                class="shadow-sm bg-gray-50 border border-gray-300 max-w-lg text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="BahanBakar" required />
        </div>
        <div class="">
            <label for="transmisi" class="block mb-2 text-sm font-medium text-gray-900">Transmisi</label>
            <select name="transmisi"
                class="bg-gray-50 border border-gray-300 max-w-lg text-gray-900 text-sm rounded-lg block w-full p-2.5">
                <option>Matic</option>
                <option>Manual</option>
            </select>
        </div>
        <div class="">
            <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
            <input type="number" name="tahun"
                class="shadow-sm bg-gray-50 border border-gray-300 max-w-lg text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="Tahun" required />
                <p class="text-gray-500">*Cukup masukan angka</p>
        </div>
        <div class="">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
            <input type="text" name="harga"
                class="shadow-sm bg-gray-50 border border-gray-300 max-w-lg text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="Harga/Hari" required />
                <p class="text-gray-500">*Cukup masukan angka</p>
        </div>
        <div class="">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Upload foto mobil</label>
            <input
                class="block w-full text-sm text-gray-900 max-w-lg border border-gray-300 rounded-lg cursor-pointer bg-gray-50 p-2"
                id="inputImage" type="file" name="gambar">
        </div>
        <div class="flex">
            <a href="{{ route('car.index') }}"
                class="w-[150px] ml-5 bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-yellow-400 before:to-yellow-700 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white">
                Kembali</a>
            <button type="submit"
                class="w-[150px] ml-5 bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-green-400 before:to-green-700 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white">
                Pasarkan Mobil</button>
        </div>
    </form>
@endsection
