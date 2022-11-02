<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekKesuburanController extends Controller
{
    public function index()
        {
            $tlght = date('d-m-Y',strtotime('+14 Day',strtotime(request ('CekKesuburan'))));
                if (request('CekKesuburan')!=null) {
                     return $tlght;
        }
        return view('CekKesuburan.index', [
            'title' => 'Cek Kesuburan'
        ]);
    }
}
