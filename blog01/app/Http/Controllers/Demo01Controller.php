<?php
namespace App\Http\Controllers;

class Demo01Controller extends Controller {

    public  function  add(){
        echo "<br>Phương thức: " . __METHOD__;

        $hoTen = '<span style="color:red">Nguyen Van A </span>';

        return view('demo01.add', ['ten'=>$hoTen] );
    }

    public  function  edit($idsp){
        echo "<br>Phương thức: " . __METHOD__;

        echo "<br>Bạn đã nhập: " . $idsp;
    }
}
