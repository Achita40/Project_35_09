@extends('layouts.masterauthen')
@section('name')

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
          <div class="col-lg-6">
              <img src="{{asset('backend/img/12530.png')}}" alt="">
          </div>
          <div class="col-lg-6">
              <div class="p-5">
                  <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                  </div>
                  <form class="user" method="POST" action="{{route('login')}}">
                    @csrf
                      <div class="form-group">
                          <input type="email" name="email" class="form-control form-control-user"
                              id="exampleInputEmail" aria-describedby="emailHelp"
                              placeholder="Email">
                      </div>
                      <div class="form-group">
                          <input type="password" name="password" class="form-control form-control-user"
                              id="exampleInputPassword" placeholder="Password">
                      </div>

                      <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">

                      <a href="{{route('register')}}" class="btn btn-success btn-user btn-block">
                          Create an Account!
                      </a>
                      <hr>
                      <div class="text-center">
                        <a class="small" href="{{route('password.request')}}">Forgot Password?</a>
                    </div>

                    <div class="text-center">
                        <a class="small" href="http://127.0.0.1:8000/">Back Home</a>
                    </div>

                  </form>


              </div>
          </div>
      </div>
  </div>
</div>
  @endsection
