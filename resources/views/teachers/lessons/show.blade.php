@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong>{{$lesson->title}}</strong></h3>

        </div>
        <div class="card-body">
            {{$lesson->info}}
        </div>

        <div class="card-footer">
            <a href="" class="btn btn-outline-dark">Опубликовать/снять с публикации</a>
            <a href="" class="btn btn-outline-success">Редактировать</a>
            <a href="" class="btn btn-outline-danger">Удалить</a>
            <a href="{{route('teachers.steps.create')}}" class="btn btn-outline-primary">Добавить шаг</a>
        </div>

    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Шаги урока</h3>

        </div>
        <div class="card-body">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Заголовок</th>
                        <th>Информация</th>
                        <th>Типа шага</th>
                        <th>Управление</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($lesson->steps as $step)
                        <tr>
                            <td>{{$step->title}}</td>
                            <td>{{$step->info}}</td>
                            <td>{{$step->type}}</td>
                            <td>
                                <a href="{{route('teachers.steps.createcontent',$step->id)}}" class="btn btn-outline-dark">
                                    заполнить контент шага
                                </a>
                                <a href="" class="btn btn-outline-danger">
                                    Удалить шаг
                                </a>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>


@endsection

