<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\msb;

class msbControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('ms-board');
         //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 接近來的資料要驗證
        $request->validate([
            'comments'=> 'required||max:255'
        ]);

        // 把資料存進對應的資料庫
        msb::create([
            'message' => $request->comments,
        ]);
        //all form 表單input 的所有東西

        return view ('ms-board');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
