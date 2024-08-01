<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){
       $user = Category::find(54)->products;
       return $user;
       foreach ($user as $value) {
        # code...
        return $value->description;
       }
    }
}
