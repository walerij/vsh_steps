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
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>


@endsection

