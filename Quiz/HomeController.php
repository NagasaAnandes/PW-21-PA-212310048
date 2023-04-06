<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data ['title'] = "Blade Directive";
        $data ['npm'] = 212310048;
        $students[] = array("npm"=>212310048, "name"=>"Nagasa Anandes Putra Ramadhan", "gender"=>"Laki-Laki", "alamat"=>"Parung");
        $students[] = array("npm"=>212310040, "name"=>"Fawaz", "gender"=>"Laki-Laki", "alamat"=>"Parung");
        $students[] = array("npm"=>212310025, "name"=>"Adit", "gender"=>"Laki-Laki", "alamat"=>"Talang");
        $students[] = array("npm"=>212310035, "name"=>"Dyas", "gender"=>"Laki-Laki", "alamat"=>"Ciawi");
        $students[] = array("npm"=>212310000, "name"=>"Frila", "gender"=>"Perempuan", "alamat"=>"Parung");
        $data['students'] = $students;
        return view('home')->with("data", $data);
    }
}
