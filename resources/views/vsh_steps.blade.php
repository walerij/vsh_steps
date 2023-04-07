@extends('layouts.layout')

@section('content')
 <div class="row">
     <div class="col-lg-3 col-6">
         <!-- small box -->
         <div class="small-box bg-info">
             <div class="inner">
                 <h3>0</h3>

                 <p>Категории курсов</p>
             </div>
             <div class="icon">
                 <i class="ion ion-bag"></i>
             </div>
             <a href="{{route('category')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
         </div>

         <div class="small-box bg-success">
             <div class="inner">
                 <h3>0</h3>

                 <p>Курсы</p>
             </div>
             <div class="icon">
                 <i class="ion ion-bag"></i>
             </div>
             <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
         </div>
     </div>
     <div class="col-lg-3 col-6">
         <div class="small-box bg-warning">
             <div class="inner">
                 <h3>0</h3>

                 <p>Вебинары</p>
             </div>
             <div class="icon">
                 <i class="ion ion-bag"></i>
             </div>
             <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
         </div>

         <div class="small-box bg-secondary">
             <div class="inner">
                 <h3>0</h3>

                 <p>Магазин</p>
             </div>
             <div class="icon">
                 <i class="ion ion-bag"></i>
             </div>
             <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
         </div>
     </div>
     <div class="col-lg-3 col-6">
         <div class="small-box bg-dark">
             <div class="inner">
                 <h3>0</h3>

                 <p>Робот Шарп</p>
             </div>
             <div class="icon">
                 <i class="fas fa-solid fa-robot-astromech"></i>

             </div>
             <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
         </div>

         <div class="small-box bg-gradient-danger">
             <div class="inner">
                 <h3>0</h3>

                 <p>Админка</p>
             </div>
             <div class="icon">
                 <i class="ion ion-bag"></i>
             </div>
             <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
         </div>
     </div>
 </div>
@endsection

