@extends('layouts.layout')
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ route('home') }}"><b>VideoSharp</b>STEPS</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Регистрация нового пользователя</p>

                <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Имя пользователя" value="{{$user->name}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$user->emsil}}" >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="photo" name="photo" value="{{$user->photo}}" >
                        <label class="custom-file-label" for="exampleInputFile">Загрузить фото</label>
                        @error('photo')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Сохранить изменения</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!--<div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>

                <a href="login.html" class="text-center">I already have a membership</a>-->
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

@endsection
