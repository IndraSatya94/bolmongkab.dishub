<?php

namespace App\Http\Controllers;

use App\Models\Dinasdetail;
use Illuminate\Http\Request;

class DinasdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinasdetail = Dinasdetail::latest()->Paginate(5);
    
        return view('dinasdetail.index',compact('dinasdetail'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dinasdetail = Dinasdetail::all();
        return view('dinasdetail.create',compact('dinasdetail'));
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
            'pimpinan' => 'required',
            'dinas'=>'required|max:50|unique:dinasdetail,dinas',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/dinas/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Dinasdetail::create($input);
     
        return redirect()->route('dinasdetail.index')
                        ->with('success','Detail Dinas Berhasil Dibuat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dinasdetail  $dinasdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Dinasdetail $dinasdetail)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dinasdetail  $dinasdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Dinasdetail $dinasdetail)
    {
        return view('dinasdetail.edit',compact('dinasdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dinasdetail  $dinasdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dinasdetail $dinasdetail)
    {
        $request->validate([
            'pimpinan'=>'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/dinas/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $dinasdetail->update($input);
    
        return redirect()->route('dinasdetail.index')
                        ->with('success','Detail Dinas Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dinasdetail  $dinasdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dinasdetail $dinasdetail)
    {
        $dinasdetail->delete();

        return redirect()->route('dinasdetail.index')
                        ->with('success', 'Dinas Detail Berhasil Dihapus !');
    }
}
