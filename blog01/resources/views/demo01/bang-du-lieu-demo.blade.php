<h2>Bảng dữ liệu</h2>

@foreach($ds as $obj)
    ID: {{ $obj->id }} <br>
    Name: {{ $obj->name }} <br>
    Des: {{ $obj->des }}

    <hr>

@endforeach
