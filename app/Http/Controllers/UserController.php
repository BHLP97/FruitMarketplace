<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = User::get();
        return view('admin.content.user.index', ["users"=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = bcrypt($request->password);
        $item->save();
        return redirect()->route("admin.user");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = User::find($id);
        return view("admin.content.user.edit", ["item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = User::find($id);
        if($item){
            $input = $request->all();
            $item["name"] = $input["name"];
            $item["email"] = $input["email"];
            $item["password"] = bcrypt($input["slug"]);
            $item->save();
        }
        return redirect()->route("admin.user");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = User::find($id);
        $item->delete();
        return redirect()->route("admin.user");
    }
}
