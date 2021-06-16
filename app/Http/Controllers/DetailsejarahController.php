<?php

namespace App\Http\Controllers;

use App\Models\Detailsejarah;
use Illuminate\Http\Request;

class DetailsejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailsejarah = Detailsejarah::latest()->Paginate(5);
    
        return view('detailsejarah.index',compact('detailsejarah'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detailsejarah.create');
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
            'body' => 'required',
        ]);
    
        Detailsejarah::create($request->all());
     
        return redirect()->route('detailsejarah.index')
                        ->with('success','Detail Sejarah Berhasil Ditambah !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detailsejarah  $detailsejarah
     * @return \Illuminate\Http\Response
     */
    public function show(Detailsejarah $detailsejarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detailsejarah  $detailsejarah
     * @return \Illuminate\Http\Response
     */
    public function edit(Detailsejarah $detailsejarah)
    {
        return view('detailsejarah.edit',compact('detailsejarah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detailsejarah  $detailsejarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detailsejarah $detailsejarah)
    {
        $request->validate([
            'nama' => 'required',
            'body' => 'required',
        ]);
    
        $detailsejarah->update($request->all());
    
        return redirect()->route('detailsejarah.index')
                        ->with('success','Detail Sejarah Berhasil Diupdated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detailsejarah  $detailsejarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detailsejarah $detailsejarah)
    {
        $detailsejarah->delete();
    
        return redirect()->route('detailsejarah.index')
                        ->with('success','Detail Sejarah Berhasil Dihapus !');
    }
}
