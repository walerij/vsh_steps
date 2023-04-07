@extends('layouts.layout')

@section('content')

    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <a href="{{route('category.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Добавить категорию</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                Категории
            </h3>

            <div class="card-tools">
                <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.card-header -->


    </div>
    @foreach($category as $cat)
        <div class="card-body">
            <ul class="todo-list" data-widget="todo-list">
                <li>

                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                        <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">{{$cat->title}}</span>
                    <span class="text">{{$cat->desc}}</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 курса</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                        <a href="{{route('category.show', $cat->id)}}"><i class="fas fa-edit"></i></a>

                        <i class="fas fa-trash-o"></i>
                    </div>
                </li>

            </ul>
        </div>
    @endforeach
@endsection
