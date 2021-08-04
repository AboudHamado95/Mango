<?php

namespace App\Http\Controllers;

use App\Mango;
use Illuminate\Http\Request;

class MangController extends Controller
{
    public function fetchData()
    {
        $data = Mango::paginate(8);
        return view('mangoes', ['fruits' => $data]);
    }
}
