@extends('layouts.layout')

@section('content')

уроки курса {{$course->title}}

<table class="table table-hover">
    <thead>
        <tr>
            <th>Заголовок</th>
            <th>Информация</th>
            <th>Управление</th>
        </tr>
    </thead>
    <tbody>
    @foreach($course->lessons as $lesson)
        <tr>
            <td>{{$lesson->title}}</td>
            <td>{{$lesson->info}}</td>
            <td>
                <a href="#" class="btn btn-dark">
                    Изменить
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
