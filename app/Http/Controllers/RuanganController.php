<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index () {
        $ruangan = Ruangan::all();

        return view('ruangan.index', compact('ruangan'));
    }

    public function store (Request $request) {
        $data = $request->all();
        $data['nomor_ruangan'] = 'Ruangan'.' '.random_int('100', '900');
        Ruangan::create($data);

        return redirect('/ruangan');
    }

    public function edit ($id) {
        $ruangan = Ruangan::find($id);

        return view('ruangan.edit', compact('ruangan'));
    }

    public function update (Request $request, $id) {
        $ruangan = Ruangan::find($id);
        $data = $request->all();
        $ruangan->update($data);

        return redirect('/ruangan');
    }

    public function destroy ($id) {
        $ruangan = Ruangan::find($id);
        $ruangan->delete($id);

        return back();
    }
}
