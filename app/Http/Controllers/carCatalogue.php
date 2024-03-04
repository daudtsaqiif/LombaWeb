<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class carCatalogue extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Katalog - Mobil';

        $car = car::latest()->get();
        return view('carCatalogue.index', compact('car', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'Tambah - Mobil';

        return view('carCatalogue.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'pemilik' => 'required',
            'nomorHp' => 'required',
            'name' => 'required',
            'tipe' => 'required',
            'kursi' => 'required',
            'mesin' => 'required',
            'bahanBakar' => 'required',
            'transmisi' => 'required',
            'tahun' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:9000'
        ]);
        
            $data = car::create([
                'pemilik' =>$request->pemilik,
                'nomorHp' =>$request->nomorHp,
                'name' => $request->name,
                'tipe' =>$request->tipe,
                'kursi' => $request->kursi,
                'mesin' => $request->mesin,
                'bahanBakar' => $request->bahanBakar,
                'transmisi' => $request->transmisi,
                'tahun' => $request->tahun,
                'harga' => $request->harga,
                'gambar' => $request->gambar
            ]);

            if ($request->hasFile('gambar')) {
                $request->file('gambar')->move('catalogue/', $request->file('gambar')->getClientOriginalName());
                $data->gambar = $request->file('gambar')->getClientOriginalName();
                $data->save();
            }
            
            return redirect()->route('car.index')->with(['success' => 'kendaraan berhasil di pasarkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $car = car::findOrFail($id);
        $title = 'Car - Dtails';

        return view('carCatalogue.show', compact('car', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
            $car = car::find($id);

            Storage::disk('local')->delete('public/catalogue/' . basename($car->gambar));
            $car->delete();

            return redirect()->route('car.index');
    }   
}
