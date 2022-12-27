<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function getIndex() {
        $data = [];
        $data['page_title'] = "Dashboard";
        return view("dashboard", $data);

        return $this->view('mahasiswa.chart' , $data);
    }

    public function getDashboard(){
        $data['page title'] = "New Chart";
        return $this->view('mahasiswa.dashboard', $data);
    }

}