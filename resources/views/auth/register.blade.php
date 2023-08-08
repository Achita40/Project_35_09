@extends('layouts.masterauthen')
@section('name')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('backend/img/12530.png') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Register</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-user"
                                    id="exampleInputEmail" aria-describedby="nameHelp" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user"
                                    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Confirm Password">
                            </div>

                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Register">

                            <a href="{{ route('login') }}" class="btn btn-success btn-user btn-block">
                                Go to Login
                            </a>
                            <hr>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
