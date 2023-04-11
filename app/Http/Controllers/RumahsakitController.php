<?php

namespace App\Http\Controllers;

use App\Models\Rumahsakit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RumahsakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $rumahsakit = Rumahsakit::latest()->paginate(5);
        
        return view('rumahsakit.index',compact('rumahsakit'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('rumahsakit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_rumahsakit' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required',
        ]);
        
        Rumahsakit::create($request->all());
         
        return redirect()->route('rumahsakit.index')
                        ->with('success','Rumahsakit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rumahsakit $rumahsakit): View
    {
        return view('rumahsakit.show',compact('rumahsakit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rumahsakit $rumahsakit): View
    {
        return view('rumahsakit.edit',compact('rumahsakit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rumahsakit $rumahsakit): RedirectResponse
    {
        $request->validate([
            'nama_rumahsakit' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required',
        ]);
        
        $rumahsakit->update($request->all());
        
        return redirect()->route('rumahsakit.index')
                        ->with('success','Rumahsakit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rumahsakit $rumahsakit): RedirectResponse
    {
        $rumahsakit->delete();
         
        return redirect()->route('rumahsakit.index')
                        ->with('success','Rumahsakit deleted successfully');
    }
}
