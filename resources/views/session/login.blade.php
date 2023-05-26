@extends('session.layout')



@section('content')

<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <form class="user" method="post" action="/sesi/login">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control form-control-user"
                        id="exampleInputEmail" value="{{ Session::get('email') }}" name="email" aria-describedby="emailHelp"
                        placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password">
                </div>

                <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">Login</button>

            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="/sesi/register">Create an Account!</a>
            </div>
        </div>
    </div>
</div>
@endsection
