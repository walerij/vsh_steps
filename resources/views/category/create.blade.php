@extends('layouts.layout')

@section('content')
    Добавление категории
 <form action="{{route('category.store')}}"  method="POST">
     @csrf
     <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Категория</label>
         <input type="text" class="form-control" id="title" name="title" placeholder="Категория">
     </div>
     <div class="mb-3">
         <label for="exampleFormControlTextarea1" class="form-label">Описание категории</label>
         <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
     </div>
     <div class="col-auto">
         <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
         <a class="btn btn-default" href="{{route('category')}}">Отменить</a>
     </div>
 </form>
@endsection
