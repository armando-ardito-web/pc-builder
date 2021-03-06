<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Vendor;
use DB;

class VendorController extends Controller
{
    function search(Request $request){
        
        $searchword = $request->name;
    //Prima valida la rihchiesta, poi
        $response = DB::table('vendors')
            ->select('*')                
            ->where(DB::raw('lower(name)'), 'like', '%' . strtolower($searchword) . '%')
            ->get();

            return $response;
    }
}
