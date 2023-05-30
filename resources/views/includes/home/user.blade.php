<ul class="navbar-nav ml-auto">
    <!------Уведомление о проверке уроков---->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 непроверенных уроков</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 урока по C#
                <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 уроков по Java
                <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 урока по PHP
                <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Перейти к проверке</a>
        </div>
    </li>

    <!---Конец Уведомления о проверке уроков--->

    <!----Пользователь-->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
            {{ Auth::user()->name }}

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"> <!--подменю--->
            <a href="{{ route('user.show',Auth::user() ) }}" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    @if (Auth::user()->photo!=null)
                         <img src="{{asset('images/user_photos/'.Auth::user()->photo)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">

                    @endif
                        <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Личный кабинет
                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h3>

                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Изменения</p>
                    </div>
                </div>

                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Выход
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
    <!---конец пользователя-->

</ul>
