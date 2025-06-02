<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ratings = Rating::get();
        return view('admin.content.rating.index', ["ratings"=>$ratings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.rating.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Rating();
        $item->user_id = $request->user_id;
        $item->product_id = $request->product_id;
        $item->value = $request->value;
        $item->content = $request->content;
        $item->save();
        notify()->success('A new rating has been created.');
        return redirect()->route("admin.order");
    }

    public function writeRating(Request $request){
        $item = new Rating();
        $item->content = $request->content;
        $item->value = $request->value;
        $item->product_id = $request->product_id;
        $item->user_id = Auth::user()->id;
        $item->save();

        $rating = $request->value;
        $html = '<div class="review" id="{{$rating->id}}" style="margin-bottom:40px">
        <h3>" {{$rating->name}} "</h3> <i>{{User::find($rating->user_id)->name}}</i>';
        for($i= 0; $i <5; $i++){
            $html .= '<span class="fa fa-star '. ($rating<=0 ? '' : 'rating-checked') .'"></span>';
            $rating = $rating - 1;
        }
        $html .= '<br>'.$item->content.
            '<br>
            <h4>Comments</h4>
            <div class="myComment">
                Leave a comment
                
                <textarea class="tinyMce" id="userComment" name="content"></textarea>
                <button onclick="submitComment()" class="btn btn-primary">Post</button>
                <br>
            </div>
        </div>';
    }

    /**
     * Display the specified resource.
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Rating::find($id);
        return view("admin.content.rating.edit", ["item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Rating::find($id);
        $item->delete();
        return redirect()->route("admin.rating");
    }
}
