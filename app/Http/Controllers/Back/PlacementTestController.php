<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PlacementTest;

class PlacementTestController extends Controller
{
    public function index()
    {
        $soal = PlacementTest::all();
        return view('back.placement.index', compact('soal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tags' => 'required',
            'soal' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'pilihan3' => 'required',
            'pilihan4' => 'required',
            'jawaban' => 'required',
        ]);

        PlacementTest::create($request->all());

        return redirect()->back()->with('success', 'Soal berhasil ditambahkan!');
    }

    public function show($id)
    {
        $soal = PlacementTest::findOrFail($id);
        return view('back.placement.show', compact('soal'));
    }

    public function edit($id)
    {
        $soal = PlacementTest::findOrFail($id);
        return view('back.placement.edit', compact('soal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tags' => 'required',
            'soal' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'pilihan3' => 'required',
            'pilihan4' => 'required',
            'jawaban' => 'required',
        ]);

        $soal = PlacementTest::findOrFail($id);
        $soal->update($request->all());

        return redirect()->route('placement.index')->with('success', 'Soal berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $soal = PlacementTest::findOrFail($id);
        $soal->delete();

        return redirect()->back()->with('success', 'Soal berhasil dihapus!');
    }
}

