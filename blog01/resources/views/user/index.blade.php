@extends('layouts.backend')

@section('tieu_de','Danh sách Tài khoản')

@section('noi_dung')
<h2>Danh sách tài khoản</h2>
<table border="1" cellpadding="10" >
    <tr> <th>STT</th>  <th>Username</th> <th>Email</th> <th>Fullname</th> </tr>
    @foreach($list as $key=> $objU)
        <tr>
            <td> {{ $key + 1 }}</td>
            <td>{{$objU->username}}</td>
            <td>{{$objU->email}}</td>
            <td>{{$objU->fullname}}</td>
        </tr>
    @endforeach
</table>
@endsection
