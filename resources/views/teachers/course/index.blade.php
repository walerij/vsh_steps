@extends('layouts.layout')

@section('content')


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Курсы</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">
                <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <a href="{{route('teachers.course.create')}}" class="btn bg-gradient-primary"><span>Добавить запись</span></a>
                </button>
                <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>Последние 10</span>
                </button>
                <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>Поиск</span>
                </button>
                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>Активные</span>
                </button>
                <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                    <span>Print</span>
                </button>

        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Заголовок</th>
                <th>Информация</th>
                <th>Категория</th>
                <th>Активность</th>
                <th>Управление</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{$course->title}}</td>
                <td>{{$course->info}}
                </td>
                <td>{{$course->category->title}}</td>
                <td> {{$course->is_active }}</td>
                <td>
                    <a class="btn btn-success" href="{{route('teachers.course.edit',$course->id )}}">Редактировать</a>
                    <a class="btn btn-danger" href="{{route('teachers.course.delete',$course->id )}}">Удалить</a>
                </td>
            </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <th>Заголовок</th>
                <th>Информация</th>
                <th>Категория</th>
                <th>Активность</th>
                <th>Управление</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
