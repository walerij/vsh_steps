@extends('layouts.layout')

@section('content')
    <div class="card card-widget">
        <div class="card-header bg-success ">
            <div class="user-block">
                <img class="img-circle img-bordered-sm" src="/images/course_profiles/{{$lesson->course->imagelink }}" height="120px" alt="user image">
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
    <div class="card card-widget">
        <div class="card-body">
            <div class="row mt-4">
                <!----<img src="../../dist/img/photo1.png" alt="Photo 1" class="img-fluid">------>
                @foreach($lesson->steps as $step)


                        <div class="col-sm-4">
                            <a href="#">
                                <div class="position-relative">
                                    @if ($step->type=='Video')
                                        <img src="/images/steps_logos/video-logo.png" alt="Photo 1" class="img-fluid">
                                    @elseif($step->type=='Quest')
                                        <img src="/images/steps_logos/quest-logo.jpeg" alt="Photo 1" class="img-fluid">
                                    @endif
                                    <div class="ribbon-wrapper ribbon-lg">
                                        <div class="ribbon bg-success text-lg">
                                            Пройдено
                                        </div>
                                    </div>
                                        <div class="card-img-overlay">
                                            <h5 class="card-title">{{$step->title}}</h5>
                                            <p class="card-text">{{$step->info}}</p>
                                            
                                        </div>
                                </div>
                            </a>
                        </div>

                @endforeach


            </div>

        </div>
    </div>
@endsection

