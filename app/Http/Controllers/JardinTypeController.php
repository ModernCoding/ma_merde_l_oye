<?php

namespace App\Http\Controllers;

use App\JardinType;
use Illuminate\Http\Request;

class JardinTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jardinTypes = JardinType::select('id', 'label')->get()->toArray();
      return view('jardinType/index', compact('jardinTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('jardinType/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $jardinType = new JardinType; // ten model
      $jardinType->label = $request->label;
      $jardinType->save();
      return redirect()->route('jardinTypes.index')->with('success','Thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JardinType  $jardinType
     * @return \Illuminate\Http\Response
     */
    public function show(JardinType $jardinType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JardinType  $jardinType
     * @return \Illuminate\Http\Response
     */
    public function edit(JardinType $jardinType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JardinType  $jardinType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JardinType $jardinType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JardinType  $jardinType
     * @return \Illuminate\Http\Response
     */
    public function destroy(JardinType $jardinType)
    {
        //
    }
}
