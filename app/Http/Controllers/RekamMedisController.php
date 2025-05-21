<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekamMedis = RekamMedis::all();
        return view('rekam_medis.index', compact('rekamMedis'));
    }
}