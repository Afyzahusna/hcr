<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Subcategoy;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('categories',compact('categories'));
    }

    public function getCategory($category_id)
    {
        $data = SubCategory::where('category_id',$category_id)->get();
        \Log::info($data);
        return response()->json(['data' => $data]);
    }
}
