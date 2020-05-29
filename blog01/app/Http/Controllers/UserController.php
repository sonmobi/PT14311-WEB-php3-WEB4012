<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller {
    public function index(){
        $query = DB::table('users') ; // tạo câu truy vấn, có thể ghép nhiều đk
        $list_user = $query->get(); // lấy dữ liệu
        return view('user.index', ['list' =>$list_user]); // trả về view
    }
    public function add(){

        return view('user.add');  // trả về view
    }
    public function saveNew(Request $request){
        // không cần view vì xử lý post
        // xong sẽ chuyển trang.
        echo '<pre>';
        print_r( $request->all() );
    }
}
