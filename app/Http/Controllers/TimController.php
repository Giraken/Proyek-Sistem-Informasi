<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use App\Models\Tim;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimController extends Controller
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
        return view('buat_tim');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tim = new Tim();

        $request->validate([
            "lomba_judul"=> "required|exists:lombas,lomba_judul",
            "tim_nama" => "required",
            "tim_jumlah" => "required",
            "tim_deskripsi" => "",
        ]);
        $tim->lomba_id = Lomba::firstWhere("lomba_judul",$request["lomba_judul"])->id;
        $tim->tim_nama = $request['tim_nama'];
        $tim->tim_jumlah = $request['tim_jumlah'];
        $tim->tim_deskripsi = $request['tim_deskripsi'];

        $tim->save();
        $tim->users()->sync([Auth::user()->id]);
    }

    public function searchValue($judul){
        $tims = Lomba::findTims($judul);
        return view("cari_tim")->with("tims",$tims);
    }
    public function search(){
        $tims = Tim::all();
        return view("cari_tim")->with("tims",$tims);
    }
    public function find(Request $request){
        return redirect()->route('tim.search.value',$request["lomba_judul"]);
        // $tims = Lomba::findTims($request["lomba_judul"]);
        // return view("cari_tim")->with("tims",$tims);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tim $tim)
    {
        return view("detail_cari_tim")->with("tim", $tim);
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
