<?php

namespace App\Http\Controllers;
// HPHT + 9 bulan + (siklus haid-21 hari).
use Illuminate\Http\Request;

class CekKehamilanController extends Controller
{
    public function index()
        {
            $hpht = date('d-m-Y',strtotime('+9 Month +7 Day',strtotime(request ('CekKehamilan'))));
                    if (request('CekKehamilan')!=null) {
                        return $hpht;
                    }
        return view('CekKehamilan.index', [
            'title' == 'Cek Kehamilan'
        ]);
    }
}
