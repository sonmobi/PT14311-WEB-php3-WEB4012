<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Demo01Controller extends Controller {

    public function BangDuLieuDemo(){
        $dataView = [];
        // lệnh lấy dữ liệu viết ở đây và gán vào biến dataView

        $dulieu = DB::table('bang_demo')->get();
        // nếu cần lọc thì dùng cú pháp:
        $dulieu = DB::table('bang_demo')
                    ->where('id','>',1)
                    ->get();

        echo '<pre>';
        foreach ($dulieu as $objRow)
        {
            print_r($objRow);
        }

        $dataView['ds'] = $dulieu;
        // xem câu lệnh SQL:
//       echo  DB::table('bang_demo')->toSql();

        return view('demo01.bang-du-lieu-demo',$dataView);
    }

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
