<?php

namespace App\Http\Controllers;

use App\Models\Puskesma;
use Illuminate\Http\Request;

class PuskesmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puskesmas = Puskesma::latest()->Paginate(5);
    
        return view('puskesmas.index',compact('puskesmas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('puskesmas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
    
        Puskesma::create($request->all());
     
        return redirect()->route('puskesmas.index')
                        ->with('success','Informasi Puskesmas Berhasil Ditambah !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Puskesma  $puskesma
     * @return \Illuminate\Http\Response
     */
    public function show(Puskesma $puskesma)
    {
        return view('puskesmas.show',compact('puskesma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Puskesma  $puskesma
     * @return \Illuminate\Http\Response
     */
    public function edit(Puskesma $puskesma)
    {
        return view('puskesmas.edit',compact('puskesma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Puskesma  $puskesma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puskesma $puskesma)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
    
        $puskesma->update($request->all());
    
        return redirect()->route('puskesmas.index')
                        ->with('success','Informasi Puskesmas Berhasil Diupdated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puskesma  $puskesma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puskesma $puskesma)
    {
        $puskesma->delete();
    
        return redirect()->route('puskesmas.index')
                        ->with('success','Informasi Puskemas Berhasil Dihapus !');
    }
}
