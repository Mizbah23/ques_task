   <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('dashboard')}}">
           
                        <h2 class="brand-text mb-0">Question Task </h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class="dbmnu nav-item {{(Route::currentRouteName()=='dashboard')?'active':''}}">
                    <a href="{{route('dashboard')}}">
                        <i class="feather icon-home"></i><span class="menu-title" data-i18n="Email">Dashboard</span>
                    </a>
                </li>
                <li class=" nav-item {{(Route::currentRouteName()=='profile')?'active':''}}">
                    <a href="{{route('profile')}}">
                        <i class="fa fa-user-circle-o"></i><span class="menu-title" data-i18n="Email">Profile</span>
                    </a>
                </li>
<!--                <li class="admnu nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Email">Admin</span></a>
                </li>-->
                <li class=" navigation-header"><span>Administration</span></li>
                
                <!-- <li class="usrmnu nav-item">
                    <a href="#">
                        <i class="feather icon-users"></i><span class="menu-title" data-i18n="Email">Users</span>
                    </a>
                </li> -->

{{--                 <li class=" nav-item {{(Route::currentRouteName()=='suppliers')?'active':''}}">
                    <a href="{{route('suppliers')}}">
                        <i class="feather icon-truck"></i><span class="menu-title" data-i18n="Email">Suppliers</span>
                    </a>
                </li>
        
             
                <li class=" nav-item {{(Route::currentRouteName()=='categories')?'active':''}}">
                    <a href="{{route('categories')}}">
                        <i class="feather icon-list"></i><span class="menu-title" data-i18n="Email">Categories</span>
                    </a>
                </li> --}}

                <li class=" nav-item {{(Route::currentRouteName()=='questions')?'active':''}}">
                    <a href="{{route('questions')}}">
                        <i class="feather icon-edit-2"></i><span class="menu-title" data-i18n="Email">Question</span>
                    </a>
                </li>
               
               {{--  <li class=" nav-item {{(Route::currentRouteName()=='abouts')?'active':''}}">
                    <a href="{{route('abouts')}}">
                        <i class="feather icon-list"></i><span class="menu-title" data-i18n="Email">About Us</span>
                    </a>
                </li>

                <li class=" nav-item {{(Route::currentRouteName()=='duties')?'active':''}}">
                    <a href="{{route('duties')}}">
                        <i class="feather icon-shield"></i><span class="menu-title" data-i18n="Email">Duty</span>
                    </a>
                </li>
                
                <li class=" nav-item {{(Route::currentRouteName()=='services')?'active':''}}">
                    <a href="{{route('services')}}">
                        <i class="feather icon-server"></i><span class="menu-title" data-i18n="Email">Service</span>
                    </a>
                </li>

                <li class=" nav-item {{(Route::currentRouteName()=='contacts')?'active':''}}">
                    <a href="{{route('contacts')}}"><i class="feather icon-navigation"></i>
                    <span class="menu-title" data-i18n="Email">Contact Messages</span> --}}
                </a>
                </li>


            </ul>
        </div>
    </div>