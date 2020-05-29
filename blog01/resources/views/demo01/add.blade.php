<h1>
    trang thêm mới
    <br>
    Ho ten: {{ $ten }}
    <br>Cách 2 {!! $ten !!}
</h1>
/demo01/add
<br>
URL trang thêm: {{ route('Demo01.add') }}

<br>
URL sửa với idsp = 5; <br>
{{  route('Demo01.edit',['idsp'=>5] )   }}
<br>
<a href="{{  route('Demo01.edit',['idsp'=>5] )   }}">Sửa</a>

