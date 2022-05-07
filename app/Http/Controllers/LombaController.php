<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publikasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lomba = new Lomba;
        $request->validate([
            "judul" => "required",
            "kategori" => "required",
            "bidang" => "required",
            "tingkat" => "required",
            "jenis" => "required",
            "deskripsi" => "",
            "poster" => "image|max:3000",
        ]);
        $lomba->lomba_judul = $request['judul'];
        $lomba->lomba_kategori = $request['kategori'];
        $lomba->lomba_bidang = $request['bidang'];
        $lomba->lomba_tingkat = $request['tingkat'];
        $lomba->lomba_jenis = $request['jenis'];
        $lomba->lomba_deskripsi = $request['deskripsi'];
        $lomba->user_id = Auth::user()->id;

        if($request->hasFile('poster')){
            $file = $request->file('poster');
            $ext = $file->getClientOriginalExtension();
            $nama = md5($file->getClientOriginalName().time()).'.'.$ext;
            $path = $file->move('images\posters',$nama);
            $lomba->lomba_foto = $path;
            $lomba->save();
        }
        $lomba->save();
        return redirect()->route('lomba.show', $lomba->id)->with('pesan', "Lomba berhasil dipublikasi");
    }

    public function search(){
        $lombas = Lomba::all();
        $data['kategori']=null;
        $data['bidang']=null;
        $data['tingkat']=null;
        return view('cari_lomba')->with('lombas',$lombas)->with('data',$data);
    }

    public function filter(Request $request){
        if($request['kategori']!="")
            $kategori = Lomba::where("lomba_kategori","=",$request["kategori"])->get();
        else
            $kategori = Lomba::all();
        if($request['bidang']!="")
            $bidang = Lomba::where("lomba_bidang","=",$request["bidang"])->get();
        else
            $bidang = Lomba::all();
        if($request['tingkat']!="")
            $tingkat = Lomba::where("lomba_tingkat","=",$request["tingkat"])->get();
        else
            $tingkat = Lomba::all();

        $lombas = $kategori->intersect($bidang);
        $lombas = $lombas->intersect($tingkat);

        return view('cari_lomba')->with('lombas',$lombas)->with('data',$request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lomba $lomba)
    {
        return view('detail')->with('lomba',$lomba);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
