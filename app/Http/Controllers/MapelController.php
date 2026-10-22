<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MapelController extends Controller
{
    private function rules(?Mapel $mapel = null): array
    {
        return [
            'kode_mapel' => ['required', 'string', 'max:255', Rule::unique('mapels', 'kode_mapel')->ignore($mapel?->id)],
            'nama_mapel' => ['required', 'string', 'max:255'],
            'kkm'        => ['required', 'integer', 'min:0', 'max:100'],
        ];
    }

    public function index()
    {
        $mapels = Mapel::orderBy('nama_mapel')->get();

        return view('mapel.index', compact('mapels'));
    }

    public function create()
    {
        return view('mapel.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        Mapel::create($validated);

        return redirect()->route('mapel.index')->with('success', 'Data mata pelajaran berhasil ditambahkan.');
    }

    public function edit(Mapel $mapel)
    {
        return view('mapel.edit', compact('mapel'));
    }

    public function update(Request $request, Mapel $mapel)
    {
        $validated = $request->validate($this->rules($mapel));

        $mapel->update($validated);

        return redirect()->route('mapel.index')->with('success', 'Data mata pelajaran berhasil diperbarui.');
    }

    public function destroy(Mapel $mapel)
    {
        // Relasi nilai -> mapel bersifat RESTRICT, jadi cek dulu agar tidak error 500
        if ($mapel->nilais()->exists()) {
            return redirect()->route('mapel.index')
                ->with('error', 'Mata pelajaran tidak dapat dihapus karena sudah memiliki data nilai.');
        }

        $mapel->delete();

        return redirect()->route('mapel.index')->with('success', 'Data mata pelajaran berhasil dihapus.');
    }
}
