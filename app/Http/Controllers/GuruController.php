<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $data = Guru::latest()->paginate(3);
        return view('guru.index', ['data' => $data])->with('i', (request()->input('page', 1) - 1) * 3);
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'mapel' => 'required',
        ]);

        $data = $request->all();
        $data['foto'] = 'default.jpg';
        Guru::create($data);

        return redirect()->route('guru.index')->with('success', 'Guru created successfully.');
    }

    public function show(Guru $guru)
    {
        return view('guru.show', compact('guru'));
    }

    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required',
            'mapel' => 'required',
        ]);

        $guru->update($request->all());

        return redirect()->route('guru.index')->with('success', 'Guru updated successfully');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru deleted successfully');
    }
}
