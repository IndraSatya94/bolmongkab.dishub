<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Models\Sejarah;
use App\Models\Detailsejarah;
use App\Models\Pimpinan;
use App\Models\Pengumuman;
use App\Models\Pelayanan;
use App\Models\Dinasdetail;

use App\Models\Puskesma;
use App\Models\Kecamatan;
use App\Models\Bupati;
use App\Models\Wakilbupati;
use App\Models\Sekda;
use App\Models\Banner;
use App\Models\Download;
use App\Models\Kategori;


use App\Models\Visimisi;
use App\Models\Agenda;
use App\Models\User;
use App\Models\Slide;
use App\Models\Tip;

class HalamanController extends Controller
{
    // public function index(){
    //     $menus = DB::table('menus')->get();
    //     return view('admin/Halaman', compact('menus'));
    // }

    //dishub
    public function index(){
        // $pelayanan = Pelayanan::latest();
        // $pelayanan1 = Pelayanan::where('posisi', 'atas')->get();
        // $pelayanan2= Pelayanan::where('posisi', 'bawah')->get();
        // $banner = Banner::latest()->simplePaginate(3);
        // $pengumuman = Pengumuman::latest()->simplePaginate(3);
        // $pimpinan = Pimpinan::latest()->simplePaginate(3);
        // $agenda = Agenda::latest()->simplePaginate(3);
        $tips = Tip::get();
        $slide1 = Slide::where('slide', 'slide1')->get();
        $slide2 = Slide::where('slide', 'slide2')->get();
        return view('dishub/index',compact('slide1','slide2','tips'));
    }

    public function visimisi(){
        $visimisi = Visimisi::latest()->simplePaginate();
        return view('dishub/pages/visimisi',compact('visimisi'));
    }
    public function agendadet(Request $request, $id){
        $agenda = Agenda::where('id', $id)->firstOrFail();
        return view('dishub/pages/agenda-detail',compact('agenda'));
    }
    public function agenda(){
        $agenda = Agenda::latest()->simplePaginate();
        return view('dishub/pages/agenda',compact('agenda'));
    }
    public function struktur(){
        return view('dishub/pages/struktur');
    }

    //akhir dishub




    public function bupati(){
        $bupati = Pimpinan::select('nama','jabatan','image','body')->where('jabatan', 'bupati')->get();
        return view('bolmongkab/detail/bupati',compact('bupati'));
        // $bupati = Bupati::all();
        // return view('bolmongkab/detail/bupati',compact('bupati'));
    }
    public function wakilbupati(){
        $wakilbupati = Pimpinan::select('nama','jabatan','image','body')->where('jabatan', 'wakil bupati')->get();
        return view('bolmongkab/detail/wakilbupati',compact('wakilbupati'));
    }
    public function sekda(){
        $sekda = Pimpinan::select('nama','jabatan','image','body')->where('jabatan', 'sekda')->get();
        return view('bolmongkab/detail/sekda',compact('sekda'));
    }
    public function pengumuman(Request $request) {
        $kategori = Kategori::latest()->Paginate(5);
        $pengumuman = Pengumuman::latest()->Paginate(5);
        $sidebar = Pengumuman::skip(5)->Paginate(5);
        
        return view('bolmongkab/detail/pengumuman',compact('pengumuman','kategori','sidebar'));
    }
    public function hascarpengumuman(Request $request) {
        if($request->has('cari')){
            $kategori = Kategori::latest()->simplePaginate(5);
            $sidebar = Pengumuman::skip(5)->simplePaginate(5);
            $pengumuman = Pengumuman::where('judul','LIKE','%'.$request->cari.'%')->with('kategori')->get();
        } else {
            $kategori = Kategori::latest()->simplePaginate(5);
            $pengumuman = Pengumuman::latest()->simplePaginate(5);
            $sidebar = Pengumuman::skip(5)->simplePaginate(5);
        }
        return view('bolmongkab/detail/hascarpengumuman',compact('pengumuman','kategori','sidebar'));
    }
 
    public function wisata(){
        return view('bolmongkab/detail/wisata');
    }
    public function sejarah(){
        $sejarah = Sejarah::latest()->paginate(5);
        $detailsejarah = Detailsejarah::latest()->paginate(5);
        return view('bolmongkab/detail/sejarah',compact('sejarah','detailsejarah'));
    }
    public function dinas(){
        $diskominfo = Dinasdetail::where('dinas', 'diskominfo')->get();
        $disdik = Dinasdetail::where('dinas', 'disdik')->get();
        $dinkes = Dinasdetail::where('dinas', 'dinkes')->get();
        $dinsos = Dinasdetail::where('dinas', 'dinsos')->get();
        $disbun = Dinasdetail::where('dinas', 'disbun')->get();
        $disdukcapil = Dinasdetail::where('dinas', 'disdukcapil')->get();
        $dishub = Dinasdetail::where('dinas', 'dishub')->get();
        $diskopukm = Dinasdetail::where('dinas', 'diskopukm')->get();
        $disnakertrans = Dinasdetail::where('dinas', 'disnakertrans')->get();
        $dispar = Dinasdetail::where('dinas', 'dispar')->get();
        $disperindag = Dinasdetail::where('dinas', 'disperindag')->get();
        $dispora = Dinasdetail::where('dinas', 'dispora')->get();
        $dispusip = Dinasdetail::where('dinas', 'dispusip')->get();
        $distan = Dinasdetail::where('dinas', 'distan')->get();
        $dkp = Dinasdetail::where('dinas', 'dkp')->get();
        $dlh = Dinasdetail::where('dinas', 'dlh')->get();
        $dp3a = Dinasdetail::where('dinas', 'dp3a')->get();
        $dpkp = Dinasdetail::where('dinas', 'dpkp')->get();
        $dpmd = Dinasdetail::where('dinas', 'dpmd')->get();
        $dpmptsp = Dinasdetail::where('dinas', 'dpmptsp')->get();
        $dppkb = Dinasdetail::where('dinas', 'dppkb')->get();
        $dpupr = Dinasdetail::where('dinas', 'dpupr')->get();
        $diskan = Dinasdetail::where('dinas', 'diskan')->get();

        return view('bolmongkab/detail/dinas',compact('diskominfo','disdik','dinkes','dinsos','disbun','disdukcapil','dishub','diskopukm','disnakertrans',
        'dispar','disperindag','dispora','dispusip','distan','dkp','dlh','dp3a','dpkp','dpmd','dpmptsp','dppkb','dpupr','diskan'));
    }
    public function badandaerah(){
        return view('bolmongkab/detail/badandaerah');
    }

    public function download(){
        $download = Download::latest()->simplePaginate();
        return view('bolmongkab/detail/download',compact('download'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function kecamatan(){
        $kecamatan = Kecamatan::latest()->paginate(5);
        return view('bolmongkab/detail/kecamatan',compact('kecamatan'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }
    public function desa(){
        return view('bolmongkab/detail/desa');
    }
    public function puskesmas(){
        $puskesmas = Puskesma::latest()->paginate(5);
        return view('bolmongkab/detail/puskesmas',compact('puskesmas'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }
    public function pengdet(Request $request, $id){
        if($request->has('cari')){
            $kategori = Kategori::latest()->simplePaginate(5);
            $sidebar = Pengumuman::skip(5)->simplePaginate(5);
            $pengumuman = Pengumuman::where('judul','LIKE','%'.$request->cari.'%')->with('kategori')->get();
            return view('bolmongkab/detail/pengumuman',compact('pengumuman','kategori','sidebar'));
        } else {
            $kategori = Kategori::latest()->simplePaginate(5);
            $pengumuman = Pengumuman::where('id', $id)->firstOrFail();
            $pengside = Pengumuman::latest()->paginate(5);
            return view('bolmongkab/detail/pengumuman-detail',compact('pengumuman','pengside','kategori'));
        }

    }

    public function getDownload(Request $request, $id) {
        $download = Download::where('id', $id)->firstOrFail();
        return view('download.show',compact('download'));
    }
}
