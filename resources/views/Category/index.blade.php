@extends('layouts.main')
@section('title','Danh sách thể loại')
@section('content')
        <div class="row px-5 mb-4">
            <div class="col-sm-10 px-0">
                <h3>List Category</h3>
            </div>
            <div class="col-sm-2 px-0">
                <a class="btn btn-sm btn-primary float-right" href="#">Create new Category</a>
            </div>
            <div class="col-md-12 px-5">
                <label>Show:</label>
                <input class="form-control" type="number" name="show" min="0" max="10" style="width: 60px;">
            </div>
        </div>
        <div class="row px-5">
            <table class="table table-bordered" style="text-align: center;">
                <tr class="bg-light">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Taxonomy</th>
                    <th>Parent_id</th>
                    <th>Actioon</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->tanoxomy}}</td>
                        <td>{{$category->parent_id}}</td>
                        <td>
                            <form action="#"  method="post">
                                <a class="btn btn-sm btn-success" href="{{route('Category.show')}}">Show</a>
                                <a class="btn btn-sm btn-warning" href="{{route('Category.update')}}">Edit</a>
                                <a class="btn btn-sm btn-danger" href="{{route('Category.delete')}}">Delete</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </table>

        </div>
    @endsection
