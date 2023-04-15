@extends('layouts.layout')

@section('content')
    Добавление курса
    <form action="{{route('teachers.course.store')}}"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Курс</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Курс">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
            <textarea class="form-control" id="info" name="info" rows="3"></textarea>
        </div>
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="imagelink" name="imagelink" >
            <label class="custom-file-label" for="exampleInputFile">Загрузить файл изображения логотипа курса</label>
        </div>
        <div class="form-group" data-select2-id="51">
            <label>Категория курса</label>
            <select class="form-control select2 select2-hidden-accessible" id="imagelink" name="imagelink" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option selected="selected" data-select2-id="3">C#</option>
                <option data-select2-id="53">JAVA</option>
                <option data-select2-id="54">PHP</option>

            </select>

        </div>
        <div class="form-group">
            <label>Дата запуска</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
            <a class="btn btn-default" href="{{route('teachers.course')}}">Отменить</a>
        </div>
    </form>
@endsection
