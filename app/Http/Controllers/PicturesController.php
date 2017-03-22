<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PicturesController extends Controller
{
    //
    public function getPicturesByCategory()
    {
      $categories =Category::all();
      if(count($categories)>0){
          return response()->json([
              'status'=>'success',
              'pics' => $categories
                  ]
      );
      }else{
          return response()->json([
                  'status'=>'failure',
                  'pics' => []
              ]
          );
      }

    }
}
