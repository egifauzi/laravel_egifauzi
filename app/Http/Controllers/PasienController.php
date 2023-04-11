<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PasienController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pasien = Pasien::latest()->paginate(5);
        
        return view('pasien.index',compact('pasien'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_pasien' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'rumahsakit_id' => 'required',
        ]);
        
        Pasien::create($request->all());
         
        return redirect()->route('pasien.index')
                        ->with('success','pasien created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(pasien $pasien): View
    {
        return view('pasien.show',compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pasien $pasien): View
    {
        return view('pasien.edit',compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pasien $pasien): RedirectResponse
    {
        $request->validate([
            'nama_pasien' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'rumahsakit_id' => 'required',
        ]);
        
        $pasien->update($request->all());
        
        return redirect()->route('pasien.index')
                        ->with('success','pasien updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pasien $pasien): RedirectResponse
    {
        $pasien->delete();
         
        return redirect()->route('pasien.index')
                        ->with('success','pasien deleted successfully');
    }
}
