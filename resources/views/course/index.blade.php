@extends('layouts.layout')

@section('content')
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title">Курсы по категориям</h4>
            </div>
            <div class="card-body">

                <div>
                    <div class="filter-container p-0 row">
                        @foreach($courses as $course)
                            <div class="filtr-item col-sm-2" data-category="3, 4"  data-sort="red sample">
                                <a href="{{route('course.show', $course->id)}}" data-toggle="lightbox" data-title="sample 3 - red">
                                    <div class="card" style="">
                                        <img src="/images/course_profiles/{{$course->imagelink }}" class=" card-img-top mb-2"  alt="red sample"/>
                                        <div class="card-body">

                                            <h5 class="card-title p-2 text-center">{{$course->title}}</h5></a>
                                            <div class="info_block">
                                                  <span>
                                                    <i class="fas fa-user-clock"></i>
                                                  </span>
                                                <div class="mt-2">
                                                    {{$course->info}}
                                                </div>
                                                <span>
                                                   <i class="fas fa-th-large"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

