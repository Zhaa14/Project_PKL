<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\loker;
use Illuminate\Http\Request;
use Session;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar=Daftar::all();
        return view('admin.daftar.index', compact('daftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loker = Loker::all();
        return view('daftar', compact('loker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'pendidikan' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'nick_name' => 'required',
            'ID_game' => 'required',
            'id_loker' => 'required',
        ]);

        $daftar = new Daftar();
        $daftar->nama = $request->nama;
        $daftar->pendidikan = $request->pendidikan;
        $daftar->email = $request->email;
        $daftar->tgl_lahir = $request->tgl_lahir;
        $daftar->no_hp = $request->no_hp;
        $daftar->alamat = $request->alamat;
        $daftar->nick_name = $request->nick_name;
        $daftar->ID_game = $request->ID_game;
        $daftar->id_loker = $request->id_loker;

        $daftar->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data anda berhasil di kirim",
        ]);

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
