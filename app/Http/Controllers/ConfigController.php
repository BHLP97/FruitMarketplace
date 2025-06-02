<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $configs = Config::get();
        return view("admin.content.config.index",["configs"=>$configs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.content.config.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $config = new Config();
        $config->key = $request->key;
        $config->save();
        return redirect()->route("admin.config");
    }

    /**
     * Display the specified resource.
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Config::find($id);
        return view("admin.content.config.edit", ["item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Config::find($id);
        $item->delete();
        return redirect()->route("admin.config");
    }
}
