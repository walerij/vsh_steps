@extends('layouts.layout')

@section('content')
@section('content')
    Добавление шага
    <form action="{{route('teachers.steps.store')}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Шаг</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок шага">
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
        <div class="form-group" data-select2-id="51">
            <label>Выбрать тип курса</label>
            <select class="form-control select2 select2-hidden-accessible" id="type" name="type" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">

                @foreach($types as $type)
                    <option data-select2-id="{{$type->id}}" value="{{$type->title}}">{{$type->info}}</option>
                @endforeach


            </select>
            @error('$type_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
            <a class="btn btn-default" href="{{route('teachers.course')}}">Отменить</a>
        </div>
    </form>

@endsection

