<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Categories;
class CategoryController extends Controller
{
  public function allData() {
      $categories = Categories::all();
      dd($categories->all());
  }
  public function show(Categories $categories){
      dd($categories);
  }
}
