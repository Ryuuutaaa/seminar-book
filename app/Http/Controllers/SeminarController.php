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
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kategori_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('seminars');
        }

        Seminar::create($validated);

        return redirect()->route('seminars.index')->with('success', 'Seminar berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Seminar $seminar)
    {
        return view('admin.seminar.show', compact('seminar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seminar $seminar)
    {
        $categories = Category::all();
        return view('admin.seminar.edit', compact('seminar', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seminar $seminar)
    {
        $validated = $request->validate([
            'nama_seminar' => 'required|string|max:255',
            'narasumber' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_kursi' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kategori_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($seminar->image) {
                Storage::delete($seminar->image);
            }

            $validated['image'] = $request->file('image')->store('seminars');
        }

        $seminar->update($validated);

        return redirect()->route('seminars.index')->with('success', 'Seminar berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seminar $seminar)
    {
        if ($seminar->image) {
            Storage::delete($seminar->image);
        }

        $seminar->delete();

        return redirect()->route('seminars.index')->with('success', 'Seminar berhasil dihapus!');
    }
}
