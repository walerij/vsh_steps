@extends('layouts.layout')

@section('content')
@section('content')
    Добавление шага
    <form action="{{route('teachers.steps.store')}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Курс</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Курс">
            @error('title')
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
    </form>

@endsection

