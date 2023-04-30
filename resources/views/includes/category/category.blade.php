<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


        <!--<li class="nav-header">Курсы по категориям</li>-->
        <!-- <li class="nav-item">
             <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-align-justify"></i>
                 <p>
                     Категории
                     <span class="badge badge-info right">2</span>
                 </p>
             </a>
         </li>
         -->
        @foreach($category as $cat)
        <li class="nav-item">

            <a href="{{route('courses',$cat->id)}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    {{$cat->title}}
                    <span class="badge badge-info right">{{$cat->courses->count()}}</span>
                </p>
            </a>
        </li>
        @endforeach
    </ul>
</nav>
