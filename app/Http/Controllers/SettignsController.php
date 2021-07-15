<?php

namespace App\Http\Controllers;

use App\Settigns;
use Illuminate\Http\Request;

class SettignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/settings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('Hahaha');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'library_name' => 'required',
            'library_address' => 'required',
            'librarians_name' => 'required'
        ]);

        if($validator->passes()){

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Settigns  $settigns
     * @return \Illuminate\Http\Response
     */
    public function show(Settigns $settigns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Settigns  $settigns
     * @return \Illuminate\Http\Response
     */
    public function edit(Settigns $settigns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Settigns  $settigns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settigns $settigns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Settigns  $settigns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settigns $settigns)
    {
        //
    }
}
