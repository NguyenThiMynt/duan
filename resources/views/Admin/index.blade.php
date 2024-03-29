@extends('layouts.main')
@section('title','Danh sách User')
@section('content')
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");

        * {
            font-family: Roboto, sans-serif;
            padding: 0;
            margin: 0;
        }

        html, body {
            width: 100%;
            height: 100%;
        }

        .flexbox {
            background: linear-gradient(155deg, #55c7ed, #2bb3e0, #3bc1ed);
            display: flex;
            margin: 0px 100px;
            align-items: center;
        }

        .search {
            margin: 3px 10px;
        }

        .search > h3 {
            font-weight: normal;
        }

        .search > h1,
        .search > h3 {
            color: white;
            margin-bottom: 15px;
            text-shadow: 0 1px #0091c2;
        }

        .search > div {
            display: inline-block;
            position: relative;
        }

        .search > div:after {
            content: "";
            background: white;
            width: 4px;
            height: 20px;
            position: absolute;
            top: 40px;
            right: 2px;
            transform: rotate(135deg);
            box-shadow: 1px 0 #0091c2;
        }

        .search > div > input {
            color: white;
            font-size: 16px;
            background: transparent;
            height: 25px;
            padding: 10px;
            border: solid 3px white;
            outline: none;
            border-radius: 35px;
            box-shadow: 0 1px #0091c2;
            transition: width 0.5s;
        }

        .search > div > input::placeholder {
            color: #efefef;
            opacity: 1;
        }

        .search > div > input::-ms-input-placeholder {
            color: #efefef;
        }

        .search > div > input:focus,
        .search > div > input:valid {
            width: 250px;
        }

    </style>
    <div class="row px-5 mb-4">
        <div class="col-sm-6 px-0">
            <h3 class="mb-0">Danh sách user</h3>
        </div>
        <div class="flexbox">
            <div class="search col-sm-4 px-0">
                <div>
                    <input type="text" placeholder="       Search . . ." required>
                </div>
            </div>
        </div>
        <div class="col-sm-2 px-0">
            <a class="btn btn-sm bg-primary float-right" href="">Create New User</a>
        </div>
    </div>
    <div class="row px-5">
        <table class=" table table-bordered text-sm">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </table>
    </div>
@endsection
