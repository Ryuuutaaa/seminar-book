<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seminars = Seminar::with('category')->get();
        return view('admin.seminar.index', compact('seminars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.seminar.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_seminar' => 'required|string|max:255',
            'narasumber' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_kursi' => 'required|integer|min:1',
            'tanggal_seminar' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kategori_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $namaSeminar = $request->input('nama_seminar');

            $cleanedName = preg_replace('/[^A-Za-z0-9\-]/', '_', $namaSeminar);

            $extension = $request->file('image')->getClientOriginalExtension();

            $fileName = $cleanedName . '.' . $extension;

            $validated['image'] = $request->file('image')->storeAs('seminars', $fileName, 'public');
        }


        Seminar::create($validated);

        return redirect()->route('admin.seminar.index')->with('success', 'Seminar berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seminar = Seminar::findOrFail($id);

        return view('admin.seminar.show', compact('seminar'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $seminar = Seminar::find($id);
        $categories = Category::all();
        return view('admin.seminar.edit', compact('seminar', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $seminar = Seminar::findOrFail($id);

        $validated = $request->validate([
            'nama_seminar' => 'required|string|max:255',
            'narasumber' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_kursi' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kategori_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            if ($seminar->image) {
                Storage::disk('public')->delete($seminar->image);
            }
            $validated['image'] = $request->file('image')->store('seminars', 'public');
        }

        $seminar->update($validated);

        return redirect()->route('admin.seminar.index')->with('success', 'Seminar berhasil diperbarui!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seminar = Seminar::findOrFail($id);

        if ($seminar->image) {
            Storage::delete($seminar->image);
        }

        $seminar->delete();

        return redirect()->route('admin.seminar.index')->with('success', 'Seminar berhasil dihapus!');
    }
}
