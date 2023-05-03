@extends('layouts.layout')

@section('content')

    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">{{$course->title}}</h3>
                        <div class="col-12">
                            <img src="../../images/course_profiles/{{$course->imagelink}}" class="product-image" alt="Product Image">
                        </div>

                    </div>
                    <!---блок описания курса---->
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{$course->title}}</h3>
                        <p>{{$course->info}}
                        </p>


                    </div>
                </div>
                <!---- конец блока описания курса --->
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">
                                Уроки курса
                            </a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">
                                Процент прохождения
                            </a>
                            <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">
                                Рейтинг курса
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                            перейти
                        </div>
                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                            Процент прохождения
                        </div>
                        <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                           рейтинг курса
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="container">
                <div class="row">
                    @foreach($course->lessons as $lesson)
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$lesson->title}} </h3>
                                <p>{{$lesson->info}}</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{route('lesson.show',$lesson->id)}}" class="small-box-footer">пройти <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-dark">
                            <div class="inner">
                                <h3>1 </h3>
                                <p>Урок 1</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <p class="small-box-footer">пока недоступен <i class="fas fa-remove"></i></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->

    <script>
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function () {
                var $image_element = $(this).find('img')
                $('.product-image').prop('src', $image_element.attr('src'))
                $('.product-image-thumb.active').removeClass('active')
                $(this).addClass('active')
            })
        })
    </script>
@endsection
