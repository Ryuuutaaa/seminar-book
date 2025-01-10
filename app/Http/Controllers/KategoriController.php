<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.kategori.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
        ]);

        Category::create([
            "kategori" => $request->kategori
        ]);

        return redirect()->route('admin.kategori.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Category::find($id);

        if ($kategori) {
            return view('admin.kategori.edit', compact('kategori'));
        }

        return redirect()->route('admin.kategori.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
        ]);

        $kategori = Category::find($id);

        if ($kategori) {
            $kategori->update([
                "kategori" => $request->kategori
            ]);

            return redirect()->route('admin.kategori.index')
                ->with('success', 'Kategori berhasil diperbarui.');
        }


        return redirect()->route('admin.kategori.index')
            ->with('error', 'Kategori gaagal diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Category::find($id);

        if ($kategori) {
            $kategori->delete();
        }

        return redirect()->route('admin.kategori.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}