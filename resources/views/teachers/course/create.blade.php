@extends('layouts.layout')

@section('content')
    Добавление курса
    <form action="{{route('teachers.course.store')}}"  method="POST" enctype="multipart/form-data">
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
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="imagelink" name="imagelink" >
            <label class="custom-file-label" for="exampleInputFile">Загрузить файл изображения логотипа курса</label>
            @error('imagelink')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group" data-select2-id="51">
            <label>Категория курса</label>
            <select class="form-control select2 select2-hidden-accessible" id="category_id" name="category_id" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">

                @foreach($category as $cat)
                <option data-select2-id="{{$cat->id}}" value="{{$cat->id}}">{{$cat->title}}</option>
                @endforeach


            </select>
            @error('category_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
            <a class="btn btn-default" href="{{route('teachers.course')}}">Отменить</a>
        </div>
    </form>
@endsection
