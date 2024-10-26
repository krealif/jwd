<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Traits\HasUploadFile;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index()
    {
        return view('beasiswa');
    }

    public function create()
    {
        return view('daftar');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3|max:255',
            'email' => 'required|email|unique:beasiswas',
            'no_telepon' => 'required|numeric',
            'semester' => 'required|integer',
            'ipk' => 'required|numeric|between:3,4',
            'pilihan' => 'required|string',
            'berkas' => 'required|file|mimes:pdf,zip,jpg,jpeg'
        ]);

        if ($request->hasFile('berkas')) {
            $path = $validated['berkas']->store('documents', 'public');
            $validated['berkas'] = $path;
        }

        $validated['status_ajuan'] = 'Belum Diverifikasi';

        $beasiswa = Beasiswa::create($validated);

        $request->session()->put('beasiswaId', $beasiswa->id);

        return to_route('beasiswa.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $beasiswaId = $request->session()->pull('beasiswaId');
        $beasiswa = Beasiswa::find($beasiswaId);

        if (!$beasiswa) {
            return to_route('beasiswa.index');
        }

        return view('hasil', compact('beasiswa'));
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
    }
}
