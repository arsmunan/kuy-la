<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\TravelPackage;

class DetailController extends Controller
{
    public function index(Request $request, $slug){
        $item = TravelPackage::with(['galleries'])
        ->where('slug', $slug)
        ->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
