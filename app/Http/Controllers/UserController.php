<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class UserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('profil')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('edit_profil')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            "nama" => "required",
            "domisili" => "",
            "instansi" => "",
            "jenjang" => "",
            "kelas" => "numeric",
            "telp" => "numeric",
            "foto" => "image|max:3000",
        ]);
        $user->user_name = $request["nama"];
        $user->user_domisili = $request["domisili"];
        $user->user_instansi = $request["instansi"];
        $user->user_jenjang = $request["jenjang"];
        $user->user_kelas = $request["kelas"];
        $user->user_telp = $request["telp"];

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $ext = $file->getClientOriginalExtension();
            $nama = md5($file->getClientOriginalName().time()).'.'.$ext;
            $path = $file->move('images\fotos',$nama);
            if($user->user_foto!=null) FacadesFile::delete($user->user_foto);
            $user->user_foto = $path;
        }
        $user->save();

        return view('profil')->with('user',$user);
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
