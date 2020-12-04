<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function __construct()
  {
      $this->middleware('auth');
  }

    
    public function index()
    {
        // $user_id = Auth::id();
        $items = Item::all();    
        $data = [
            'items' => $items
        ];
        return view('items.index', $data);
    }

    public function create()
    {
        //display form create
        return view('items.create');//create.blade.php
    }

    public function store(Request $request)
    {
        // $user_id = Auth::id();

        // $items = Item::where('user_id', $user_id)->get();

        Item::create([
            'title' => $request ->title,
            'reference' => $request ->reference,
            'score' => $request ->score,
        ]);
        //
        // $item=new Item();
        // $item->title=$request->get('title');
        //$item->description=$request->get('description');
        //$item->trainer=$request->get('trainer');

        //file uploaded?
       // if($request->hasFile('attachment')){
          //  $this->validate($request,
            //    ['attachment'=>'mimes:jpeg,jpg,png,bmp,gif|max:2048',],
              //  $errors=[
                //    'required'=>'The :attribute field is required.',
                  //  'mimes'=>'Only jpeg, jpg, png, bmp, gif with max filesize 2MB'
                //]
            //);//end validation 

            //regenerate filename
            //example 2020-04-06-Laravel101.png
            //$filename=date('Y-m-d').'-'.$request->get('title').'.'.$request->attachment->getClientOriginalExtension();
            //store image file to web server
            //Storage::disk('public')->put($filename,
              //  File::get($request->attachment));
            //fetch filename to save to db
            //$training->filename=$filename;

        //end file upload process 

        //redirect to index
        return redirect('/item');
    }


}
