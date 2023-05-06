@extends('layouts.layout')

@section('content')
    <div class="card card-widget">
        <div class="card-header">
            <div class="user-block">

                <span class="username">{{$lesson->course->title}}</span>

            </div>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" title="Mark as read">
                    <i class="far fa-circle"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>

        </div>

        <div class="card-body">
            <div class="attachment-block clearfix">

                <div class="attachment-pushed">
                    <h4 class="attachment-heading">{{$lesson->title}}</h4>
                    <div class="attachment-text">
                        Шагов в данном уроке: 10
                    </div>

                </div>

            </div>
            <p>{{$lesson->info}}</p>





            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Не пройден</button>
            <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Оценки</button>
            <span class="float-right text-muted">45 likes - 2 comments</span>
        </div>





    </div>
@endsection

