@extends('layouts.app')
@section('content')
    <div id="container">
        <h2 align="center">ข้อมูลติดต่อลูกค้า</h2>
        <!-- <a href="/contact/create" class="btn btn-primary my-2">เพิ่มข้อมูล</a> -->
        <a href="{{ route('contact.create') }}" class="btn btn-primary my-2">เพิ่มข้อมูล</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">รหัส</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">อีเมล</th>
                    <th scope="col">เบอร์โทร</th>
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->phone}}</td>
                    <td><a href="{{ route('contact.edit', $row->id) }}" class="btn btn-primary">แก้ไข</a></td>
                    <td>
                        <form action="{{ route('contact.destroy', $row->id) }}" method="post">
                            @csrf 
                            @method('DELETE')
                            <!-- <input type="submit" value="ลบ" class="btn btn-danger" 
                            onclick="return confirm('คุณต้องการลบข้อมูล {{$row->name}}')">     -->
                            <input type="submit" value="ลบ" data-name="{{$row->name}}" class="btn btn-danger deleteForm">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection