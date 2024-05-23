<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::where('parent_id','=',0)->with('childs')->get();
        return view("admin.content.menu.index",["menus"=>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::where('parent_id','=',0)->with('childs')->get();
        return view("admin.content.menu.create", ["menus"=>$menus]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Menu();
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->parent_id = $request->parent_id;
        $item->save();
        return redirect()->route("admin.menu");
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Menu::find($id);
        $menus = Menu::where('parent_id','=',0)->with('childs')->get();
        return view("admin.content.menu.edit", ["menus"=>$menus, "item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = Menu::find($id);
        if($item){
            $input = $request->all();
            $item["name"] = $input["name"];
            $item["slug"] = $input["slug"];
            $item["parent_id"] = $input["parent_id"];
            $item->save();
        }

        return redirect()->route("admin.menu");
    }

    public function deleteChilds($id){
        $item = Menu::find($id);
        if($item){
            if ($item->childs){
                foreach ($item->childs as $child){
                    $this->deleteChilds($child->id);
                }
            }
            $item->delete();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->deleteChilds($id);
        return redirect()->route("admin.menu");
    }
}
