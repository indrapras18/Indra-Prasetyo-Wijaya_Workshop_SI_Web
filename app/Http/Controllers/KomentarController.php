<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function add(Request $request){
        Komentar::create($request->all());
        return redirect()->route('homee');
    }
}
