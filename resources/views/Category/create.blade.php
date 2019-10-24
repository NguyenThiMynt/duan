@extends('layouts.main')
@section('title','Danh sách thể loại')
@section('content')
    <style type="text/css">
        form{
            margin: auto;
            font-family: "Times New Roman";
        }
        .col-md-12{
            width: 500px;
        }
        .btn{
            padding: 7px 23px;
            margin-top: 10px;
        }
    </style>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 style="text-align: center;">Add New Category</h3>
            </div>
            @if(session('messages'))
                <div class="alert alert-danger">{{session('messages')}}</div>
            @endif
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <strong>Lỗi</strong> Đã có lỗi xảy ra vui lòng kiểm tra<br>
                    <ul>
                        @foreach($errors->all() as $errors)
                            <li style="color: red;">{{ $errors}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('Category.store')}}" method="post" enctype="multipart/form-data">
                <input class="form-control" type="hidden" name="_token" value="csrf_token">
                <div class="col-md-12">
                    <label>Name:</label>
                    <input class="form-control" type="text" name="name" placeholder="Please enter name">
                </div>
                <div class="col-md-12">
                    <label>Description: </label>
                    <textarea class="form-control" type="text" name="description" placeholder="Please enter description" rows="4"></textarea>
                </div>
                <div class="col-md-12">
                    <label>Taxonomy: </label>
                    <input class="form-control" type="text" name="taxonomy" placeholder="Please enter Taxonomy">
                </div>
                <div class="col-md-12">
                    <label>Parent_id: </label>
                    <input class="form-control" type="number" name="parent_id" min="0" max="1" placeholder="Please enter choose parent">
                </div>
                <a class="btn btn-sm btn-danger" style=" margin-left: 200px;" href="{{route('Category.create')}}">Cancel</a>
                <a class="btn btn-sm btn-success" href="{{route('Category.index')}}">Add New</a>
            </form>
        </div>
    </div>
@endsection
