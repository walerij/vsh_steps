@extends('layouts.layout')

@section('content')
    <form action="{{route('teachers.steps.linkcontent', $step->id)}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Внешняя ссылка</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="ссылка на внешний ресурс">
            @error('link')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
            <textarea class="form-control" id="info" name="info" rows="3"></textarea>
            @error('info')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>


        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
            <a class="btn btn-default" href="{{route('teachers.lessons')}}">Отменить</a>
        </div>
    </form>
@endsection
