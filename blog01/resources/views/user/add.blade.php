@extends('layouts.backend')
@section('tieu_de','Trang thêm user')
@section('noi_dung')
<h2>Chức năng thêm mới</h2>

    <form action="{{route('User.saveNew')}}" method="post">
                @csrf
        Username: <input type="text" name="username"> <br>
        <button>Save</button>
    </form>

@endsection
