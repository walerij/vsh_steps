@extends('layouts.layout')

@section('content')
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title">Курсы по категориям</h4>
            </div>
            <div class="card-body">
                <div>
                    <div class="btn-group w-100 mb-2">
                        <a class="btn btn-info active" href="{{route('courses',0)}}" data-filter="all"> Все курсы

                        </a>
                        @foreach($category as $cat)
                           <a class="btn btn-info" href="{{route('courses',$cat->id)}}" data-filter="1"> {{$cat->title}}
                               <span class="badge badge-dark">{{$cat->courses->count()}} </span>
                           </a>
                        @endforeach

                    </div>

                </div>
                <div>
                    <div class="filter-container p-0 row">
                        @foreach($courses as $course)
                            <div class="filtr-item col-sm-2" data-category="3, 4"  data-sort="red sample">
                                <a href="#" data-toggle="lightbox" data-title="sample 3 - red">
                                    <div class="card" style="">
                                        <img src="/images/course_profiles/{{$course->imagelink }}" class=" card-img-top mb-2"  alt="red sample"/>
                                        <div class="card-body">

                                            <h5 class="card-title p-2 text-center">{{$course->title}}</h5></a>
                                            <div class="info_block">
                                                  <span>
                                                    <i class="fas fa-user-clock"></i> {{$course->info}} час
                                                  </span>
                                                <div class="mt-2"></div>
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

