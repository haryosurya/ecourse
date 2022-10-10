<!doctype html>
<html lang="id" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
<title>@yield('pageTitle',isset($pageTitle)? $pageTitle:__('default.admin')) - {{ env('APP_NAME') }}</title>

<!-- Bootstrap Core and vandor -->
{{-- <link rel="stylesheet" href="{{ asset('be-layouts/assets/plugins/bootstrap/css/bootstrap.min.css') }}" />  --}}
{{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
 <!-- General CSS Files -->
 <link rel="stylesheet" href="{{ asset('client/themes/admin/assets/modules/bootstrap/css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('client/themes/admin/assets/modules/fontawesome/css/all.min.css') }}">
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('client/themes/admin/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('client/themes/admin/assets/modules/weather-icon/css/weather-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('client/themes/admin/assets/modules/weather-icon/css/weather-icons-wind.min.css') }}">
<link rel="stylesheet" href="{{ asset('client/themes/admin/assets/modules/summernote/summernote-bs4.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('client/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.css') }}" />

<!-- Plugins css -->
<link rel="stylesheet" href="{{ asset('be-layouts/assets/plugins/summernote/dist/summernote.css') }}"/>
<link rel="stylesheet" href="{{ asset('be-layouts/assets/plugins/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('be-layouts/assets/plugins/summernote/dist/summernote.css') }}"/>
<link rel="stylesheet" href="{{ asset('be-layouts/assets/plugins/sweetalert/sweetalert.css') }}"> 
<!-- Core css -->
<link rel="stylesheet" href="{{ asset('be-layouts/assets/css/style.min.css') }}"/>


<link rel="stylesheet" href="{{ asset('client/themes/admin/assets/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('client/css/admin.css') }}">

<link href="{{ asset('client/vendor/select2/css/select2.min.css') }}" rel="stylesheet" />
<script src="{{ asset('client/themes/admin/assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('be-layouts/assets/bundles/lib.vendor.bundle.js') }}"></script> 
<script src="{{ asset('client/vendor/jquery-ui-1.11.4/jquery-ui.min.js') }}"></script>
@yield('header') 

</head>
{{-- right_tb_toggle remove if you need to add right section --}}
<body class="font-muli theme-cyan gradient right_tb_toggle">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div> 
    <div id="main_content">
        <!-- Start Main top header -->
        <div id="header_top" class="header_top">
            <div class="container">
                @include('partials.left-sidebar')
                <div class="hright">
                    {{-- <a href="javascript:void(0)" class="nav-link icon right_tab"><i class="fe fe-align-right"></i></a> --}}
                    <a href="javascript:void(0)" onclick="$('#logout-form').submit();" class="nav-link icon ">
                        <i class="fe fe-power"></i>
                    </a>  
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"  style="display: none;" class="d-none">
                        @csrf
                    </form>
                    {{-- <a href="login.html" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                 --}}
                </div>
            </div>
        </div>
        <!-- Start Rightbar setting panel -->
        @include('partials.settingbar')
        <!-- Start Theme panel do not add in project -->
        {{-- <div class="theme_div">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-unstyled">
                        <li class="list-group-item mb-2">
                            <p>Light Version</p>
                            <a href="#"><img src="{{ asset('be-layouts/assets/images/themes/default.png') }}" class="img-fluid" alt="" /></a>
                        </li>
                        <li class="list-group-item mb-2">
                            <p>Dark Version</p>
                            <a href="#"><img src="{{ asset('be-layouts/assets/images/themes/dark.png') }}" class="img-fluid" alt="" /></a>
                        </li>
                        <li class="list-group-item mb-2">
                            <p>RTL Version</p>
                            <a href="#"><img src="{{ asset('be-layouts/assets/images/themes/rtl.png') }}" class="img-fluid" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>        
        </div> --}}
        <!-- Start Quick menu with more functio -->
        
        <!-- Start Main leftbar navigation -->
        @include('partials.sidebar')
        <!-- Start project content area -->
        <div class="page" id="content"> 
            <!-- Start Page header --> 
            <div class="section-body" id="page_top">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="left">                        
                            {{-- <div class="input-group">
                                <input type="text" class="form-control" placeholder="What you want to find">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Search</button>
                                </div>
                            </div> --}}
                        </div>
                        <div class="right">
                             
                            <div class="notification d-flex"> 
                                <div class="dropdown d-flex">
                                    <a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
                                        <span class="avatar" @if(!empty(Auth::user()->picture) && file_exists(Auth::user()->picture)) style="background-image: url({{ asset(Auth::user()->picture) }})" @else style="background-image: url({{ asset('client/themes/admin/assets/img/avatar/avatar-1.png')}})" @endif></span> {{Auth::user()->name}}</a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        {{-- <div class="dropdown-title">@lang('default.account')</div> --}}
                                        <a href="@route('admin.account.profile')" class="dropdown-item has-icon">
                                            <i class="fe fe-user"></i> @lang('default.profile')
                                        </a>
                                        <a href="@route('admin.account.email')" class="dropdown-item has-icon">
                                            <i class="fe fe-send"></i> @lang('default.change-email')
                                        </a>
                                        <a href="@route('admin.account.password')" class="dropdown-item has-icon">
                                            <i class="fe fe-unlock"></i> @lang('default.change-password')
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <div class="dropdown-divider"></div>
                                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="#" class="dropdown-item has-icon text-danger">
                                            <i class="fe fe-sign-out-alt"></i> @lang('default.logout')
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Start Page title and tab -->
            
            {{-- content here !! --}}
            <div class="section-body">
                <div class="container-fluid">
                    <div class=" mt-3">
                                                
 
                        @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif


                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))

                                <div class="alert alert-{{ $msg }} alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                            <span></span>
                                        </button>
                                        {!! clean(Session::get('alert-' . $msg)) !!}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span></span>
                                    </button>
                                    {!! clean(Session::get('flash_message')) !!}
                                </div>
                            </div>
                        @endif

                        @if(isset($flash_message))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span></span>
                                    </button>
                                    {!! clean($flash_message) !!}
                                </div>
                            </div>
                        @endif
                        @yield('content')
                    </div>
                </div>
            </div>
            {{-- @yield('content') --}}
    
    
            <!-- Start main footer --> 
            @include('partials.footer')
        </div>    
    </div> 

 

<!-- Start Main project js, jQuery, Bootstrap --> 
 

{{-- <script src = "https://code.jquery.com/jquery-1.10.2.js"></script> --}}
{{-- <script src="{{ asset('be-layouts\assets/plugins/jquery/jquery-3.4.1.min.js') }}"></script> --}}

<!-- Start all plugin js --> 

<!-- Start project main js  and page js --> 


{{-- <script src="{{ asset('be-layouts/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script> --}}

<!-- General JS Scripts -->

{{-- <script src="{{ asset('client/themes/admin/assets/modules/popper.js') }}"></script>
<script src="{{ asset('client/themes/admin/assets/modules/tooltip.js') }}"></script> --}}
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="{{ asset('client/themes/admin/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('client/themes/admin/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('client/themes/admin/assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('client/themes/admin/assets/js/stisla.js') }}"></script>

<script src="{{ asset('be-layouts/assets/plugins/sparkline/sparkline.min.js') }}"></script>
<script src="{{ asset('be-layouts/assets/plugins/metisMenu/metisMenu.js') }}"></script>
<script src="{{ asset('client/vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('client/app/lib.js') }}"></script>
<!-- JS Libraies -->
<script src="{{ asset('client/themes/admin/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('client/themes/admin/assets/modules/chart.min.js') }}"></script>
<script src="{{ asset('client/themes/admin/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('client/themes/admin/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
{{-- <script src="{{ asset('be-layouts/assets/bundles/summernote.bundle.js') }}"></script> --}}
<script src="{{ asset('client/themes/admin/assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('client/themes/admin/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>


<!-- Template JS File -->
<script src="{{ asset('client/themes/admin/assets/js/scripts.js') }}"></script>
<script src="{{ asset('client/themes/admin/assets/js/custom.js') }}"></script>


<script src="{{ asset('be-layouts/assets/js/core.js') }}"></script>  

<div class="modal fade" id="generalModal" tabindex="-1" role="dialog"  >
    <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="generalModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"  id="genmodalinfo">
              </div>

            </div>
          </div>
</div>

<div class="modal fade" id="generalLargeModal" tabindex="-1" role="dialog"  >
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="generalLargeModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"  id="genLargemodalinfo">
            </div>

        </div>
    </div>
</div>

<!-- END SIMPLE MODAL MARKUP -->
<script>
    function openModal(title,url){
        $('#genmodalinfo').html(' <img  src="{{ asset('img/ajax-loader.gif')  }}');
        $('#generalModalLabel').text(title);
        $('#genmodalinfo').load(url);
        $('#generalModal').modal();
    }
    function openLargeModal(title,url){
        $('#genLargemodalinfo').html(' <img  src="{{ asset('img/ajax-loader.gif')  }}');
        $('#generalLargeModalLabel').text(title);
        $('#genLargemodalinfo').load(url);
        $('#generalLargeModal').modal();
    }
    function openPopup(url){
        window.open(url, "_blank", "toolbar=no,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        return false;
    }
</script>
 
@yield('footer')
 
</body>
</html>
