@extends('layouts.layout')

@section('content')

    <form action="{{route('category.store')}}"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Категория</label>
            <input type="text" class="form-control" readonly id="title" name="title" placeholder="Категория" value="{{$category->title}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" >Описание категории</label>
            <textarea class="form-control" id="desc" readonly name="desc" rows="3">{{$category->desc}}</textarea>
        </div>
        <div class="col-auto">

            <a class="btn btn-outline-success" href="{{route('category.edit', $category->id)}}">Редактировать</a>
            <a class="btn btn-danger" href="{{route('category.destroy', $category->id)}}">Удалить</a>
            <a class="btn btn-default" href="{{route('category')}}">К списку категорий</a>
        </div>
    </form>
@endsection
