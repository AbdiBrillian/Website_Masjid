<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard_controller extends Controller
{

    public function dashboard()
    {

        $pengeluaran = \DB::table('pengeluaran')->get();
        $total_pengeluaran = \DB::table('pengeluaran')->sum('nominal');

        $pemasukan = \DB::table('pemasukan as p')->join('sumber as s', 'p.sumber_pemasukan', '=', 's.id')->get();
        $total_pemasukan = \DB::table('pemasukan as p')->join('sumber as s', 'p.sumber_pemasukan', '=', 's.id')->sum('nominal');
        

        return view('dashboard/dashboard_index', compact('total_pengeluaran', 'total_pemasukan'));
    }

    public function dashboardinfo()
    {

        $pengeluaran = \DB::table('pengeluaran')->get();
        $total_pengeluaran = \DB::table('pengeluaran')->sum('nominal');

        $pemasukan = \DB::table('pemasukan as p')->join('sumber as s', 'p.sumber_pemasukan', '=', 's.id')->get();
        $total_pemasukan = \DB::table('pemasukan as p')->join('sumber as s', 'p.sumber_pemasukan', '=', 's.id')->sum('nominal');

        return view('dashboard/dashboard_info', compact('total_pengeluaran', 'total_pemasukan'));
    }

    public function index(){
        return view('dashboard/dashboard_index');
    }

    public function abouts(){
        return view('dashboard/dashboard_about');
    }

    public function tentang(){
        return view('dashboard/dashboard_tentang');
    }

    public function contacts(){
        return view('dashboard/dashboard_contact');
    }

    public function kisahh(){
        return view('dashboard/dashboard_kisah');
    }

}
