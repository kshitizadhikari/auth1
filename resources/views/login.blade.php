@extends('layout.app')


@section('content')

<style>
form {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

}
</style>

<div class="positive-relative">
    <div class="heading d-flex justify-content-center m-4">
        <h1>Login Page</h1>
    </div>
    <div class="formko container d-flex align-items-center justify-content-center ">
        <form action="{{route('loginUser')}}" class="border border-dark p-4 m-0" method="post">
            @csrf
            <!-- <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control @error('username') is-invalid @enderror" name="username">
                <div class="form-text">@error('username') {{$message}} @enderror</div>
            </div> -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                <div id="emailerror" class="form-text">@error('email') {{$message}} @enderror</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                <div class="form-text">@error('password') {{$message}} @enderror</div>

            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree with the terms of license and
                    agreement</label>
            </div>
            <div class="btnko d-flex align-items-center justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>

    </div>
</div>
@endsection