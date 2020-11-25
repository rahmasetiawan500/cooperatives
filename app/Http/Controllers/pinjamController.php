<?php

namespace App\Http\Controllers;

use App\Pinjam;
use Illuminate\Http\Request;
use App\Http\Requests\PinjamRequest;
use Illuminate\Support\Facades\DB;

class pinjamController extends Controller
{
    public function index()
    {
        $pinjam = DB::table('pinjam')->get();

        return view('pages.admin.members.pinjam', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.members.createPinjam');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PinjamRequest $request)
    {
        Pinjam::create($request->all());

        return redirect()->route('pinjam.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        return view('pages.admin.members.Pinjamsuccess');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Simpanan $simpanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Simpanan $simpanan)
    {
        //
    }
}
