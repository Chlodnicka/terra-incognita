<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | Terra Incognita</title>

    <!-- Bootstrap -->
    <link href="{!! asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{!! asset('assets/vendors/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{!! asset('assets/vendors/nprogress/nprogress.css') !!}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{!! asset('assets/vendors/iCheck/skins/flat/green.css') !!}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{!! asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!}"
          rel="stylesheet">
    <!-- JQVMap -->
    <link href="{!! asset('assets/vendors/jqvmap/dist/jqvmap.min.css') !!}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{!! asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{!! asset('assets/build/css/custom.min.css') !!}" rel="stylesheet">

</head>

<body class="nav-md">
@if(Session::has('alert_success'))
    <div class="alert alert-success"><span
                class="glyphicon glyphicon-ok"></span><em> {!! session('alert_success') !!}</em></div>
@elseif(Session::has('alert_error'))
    <div class="alert alert-error"><span
                class="glyphicon glyphicon-error"></span><em> {!! session('alert_error') !!}</em></div>
@endif
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Terra Incognita</span></a>
                </div>

                <div class="clearfix"></div>

                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="assets/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Witaj,</span>
                        <h2> {{ Auth::user()->name }}</h2>
                    </div>
                </div>

                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="/"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li><a href="/news"><i class="fa fa-newspaper-o"></i> Aktualności</a></li>
                            <li><a href="/partners"><i class="fa fa-users"></i> Partnerzy</a></li>
                            <li><a href="/video"><i class="fa fa-youtube-play"></i> Galeria video</a></li>
                            <li><a href="/expeditions"><i class="fa fa-road"></i> Wyprawy</a></li>
                            <li><a href="/media"><i class="fa fa-share-alt"></i> Media</a></li>
                            <li><a><i class="fa fa-edit"></i> Strony treściowe <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/support">Wesprzyj nas</a></li>
                                    <li><a href="/about-us">O nas</a></li>
                                    <li><a href="/contact">Kontakt</a></li>
                                </ul>
                            </li>
                            <li><a href="/multimedia"><i class="fa fa-picture-o"></i> Multimedia</a></li>
                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="assets/images/img.jpg" alt="">{{ Auth::user()->name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                                class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="assets/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="assets/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="assets/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="assets/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{!! asset('assets/vendors/jquery/dist/jquery.min.js') !!}"></script>
<!-- Bootstrap -->
<script src="{!! asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('assets/vendors/fastclick/lib/fastclick.js') !!}"></script>
<!-- NProgress -->
<script src="{!! asset('assets/vendors/nprogress/nprogress.js') !!}"></script>
<!-- Chart.js -->
<script src="{!! asset('assets/vendors/Chart.js/dist/Chart.min.js') !!}"></script>
<!-- gauge.js -->
<script src="{!! asset('assets/vendors/gauge.js/dist/gauge.min.js') !!}"></script>
<!-- bootstrap-progressbar -->
<script src="{!! asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}"></script>
<!-- iCheck -->
<script src="{!! asset('assets/vendors/iCheck/icheck.min.js') !!}"></script>
<!-- Skycons -->
<script src="{!! asset('assets/vendors/skycons/skycons.js') !!}"></script>
<!-- Flot -->
<script src="{!! asset('assets/vendors/Flot/jquery.flot.js') !!}"></script>
<script src="{!! asset('assets/vendors/Flot/jquery.flot.pie.js') !!}"></script>
<script src="{!! asset('assets/vendors/Flot/jquery.flot.time.js') !!}"></script>
<script src="{!! asset('assets/vendors/Flot/jquery.flot.stack.js') !!}"></script>
<script src="{!! asset('assets/vendors/Flot/jquery.flot.resize.js') !!}"></script>
<!-- Flot plugins -->
<script src="{!! asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') !!}"></script>
<script src="{!! asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') !!}"></script>
<script src="{!! asset('assets/vendors/flot.curvedlines/curvedLines.js') !!}"></script>
<!-- DateJS -->
<script src="{!! asset('assets/vendors/DateJS/build/date.js') !!}"></script>
<!-- JQVMap -->
<script src="{!! asset('assets/vendors/jqvmap/dist/jquery.vmap.js') !!}"></script>
<script src="{!! asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') !!}"></script>
<script src="{!! asset('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') !!}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{!! asset('assets/vendors/moment/min/moment.min.js') !!}"></script>
<script src="{!! asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') !!}"></script>
<script src="{!! asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js') !!}"></script>

<script src="{!! asset('assets/vendors/tinymce/tinymce.min.js') !!}"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );

    var editor_config = {
        path_absolute: "/",
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback: function (field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>
<!-- Custom Theme Scripts -->
<script src="{!! asset('/vendor/laravel-filemanager/js/lfm.js') !!}"></script>
<script src="{!! asset('assets/build/js/custom.min.js') !!}"></script>
<script>
    var domain = "";
    $('#lfm').filemanager('image', {prefix: domain});

    console.log($('#lfm'));
</script>

</body>
</html>