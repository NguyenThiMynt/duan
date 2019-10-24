@extends('layouts.main')
@section('title','Thêm sản phẩm')
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
                <h3 style="text-align: center;">Add New Product</h3>
            </div>
            <form action="" method="" enctype="multipart/form-data">
                <input class="form-control" type="hidden" name="_token" value="csrf_token">
                <div class="col-md-12">
                    <label>Name:</label>
                    <input class="form-control" type="text" name="name" placeholder="Please enter name">
                </div>
                <div class="col-md-12">
                    <label>Image_path:</label>
                    <input class="form-control" type="file" name="image" placeholder="Please enter image">
                </div>
                <div class="col-md-12">
                    <label>Price:</label>
                    <input class="form-control" type="number" name="name" placeholder="Please enter price">
                </div>
                <div class="col-md-12">
                    <label>Quantity:</label>
                    <input class="form-control" type="number" name="quantity" min="0" max="200" placeholder="Please enter quantity">
                </div>
                <div class="col-md-12">
                    <label>Description</label>
                    <input class="form-control" type="text" name="description" placeholder="">
                </div>
                <button class="btn btn-sm btn-danger" style=" margin-left: 200px;">Cancel</button>
                <button class="btn btn-sm btn-success">Add New</button>
            </form>
        </div>
    </div>
    @endsection
