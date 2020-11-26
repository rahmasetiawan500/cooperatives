<?php

namespace App\Http\Controllers;

use App\Simpanan;
use Illuminate\Http\Request;
use App\Http\Requests\SimpananRequest;
use Illuminate\Support\Facades\DB;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $simpanan = DB::table('simpanans')->get();
        return view('pages.admin.simpanan.table', compact('simpanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = DB::table('users')->get();
        $member = DB::table('members')->get();
        return view('pages.admin.simpanan.create', compact('user', 'member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SimpananRequest $request)
    {
        Simpanan::create($request->all());
        return redirect()->route('simpanan.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        return view('pages.admin.simpanan.success');
    }
    public function show(Simpanan $simpanan)
    {
        $fullsimpanan = DB::table('simpanans')->get();
        return view('pages.admin.simpanan.show', compact('simpanan', 'fullsimpanan'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simpanan $simpanan)
    {
        $simpanan->delete();
        return redirect()->route('simpanan.table');
    }
}
