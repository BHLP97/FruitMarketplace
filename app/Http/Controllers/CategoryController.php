<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('parent_id','=',0)->with('childs')->get();
        return view("admin.content.category.index",["categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('parent_id','=',0)->with('childs')->get();
        return view("admin.content.category.create", ["categories"=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->type = $request->type;
        $category->slug = $request->slug;
        $category->image_id = $request->image_id;
        $category->parent_id = $request->parent_id;
        $category->status = 1;
        $category->save();
        return redirect()->route("admin.category.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Category::find($id);
        $categories = Category::where('parent_id','=',0)->with('childs')->get();
        return view("admin.content.category.edit", ["categories"=>$categories, "item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = Category::find($id);
        if($item){
            $input = $request->all();
            $item["name"] = $input["name"];
            $item["type"] = $input["type"];
            $item["slug"] = $input["slug"];
            $item["image_id"] = $input["image_id"];
            $item["parent_id"] = $input["parent_id"];
            $item->save();
        }

        return redirect()->route("admin.category.index");
    }

    public function deleteChilds($id){
        $item = Category::find($id);
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
        return redirect()->route("admin.category.index");
    }
}
