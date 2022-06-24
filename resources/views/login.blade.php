@extends('master')

@section("content")

<div class="container">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <form>
                <div class="form-group m-2">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group m-2">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button class="btn btn-outline-success m-2" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection 

