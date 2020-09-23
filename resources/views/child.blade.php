@extends('layouts.app')

@section('title', 'Tiêu đề trang con')

@section('content')
    <p>Đây là nội dung trang con</p>
    @if ($data % 2 ==0)
        <p>{{$data}} la so chan</p>
    @else 
        <p>{{$data}} la so le</p>
    @endif
@endsection

@section('sidebar')
    {{-- muốn kế thừa nội dung đó có trong phân đoạn ở layout cha thì dùng @parent --}}
    @parent
    <p>Đây là sidebar trang con</p>
@endsection