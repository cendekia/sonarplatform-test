<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sonar Platform - Test</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Sonar Platform</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action {{ request()->segment(1) == null ? 'bg-dark active' : 'bg-light' }}" href="/">Dashboard</a>
                    <a class="list-group-item list-group-item-action {{ request()->segment(1) == 'conversation' ? 'bg-dark active' : 'bg-light' }}"
                        data-toggle="collapse"
                        data-target="#collapsibleConversation"
                        aria-expanded="{{ request()->segment(1) == 'conversation' ? 'show' : '' }}"
                        href="#!">Conversation</a>
                    <div class="collapse navbar-collapse {{ request()->segment(1) == 'conversation' ? 'show' : '' }}" id="collapsibleConversation">
                        <a class="list-group-item list-group-item-action bg-secondary {{ request()->segment(2) == 'twitter' ? 'active' : 'text-white' }}" href="{{ url('conversation/twitter') }}">Twitter</a>
                        <a class="list-group-item list-group-item-action bg-secondary {{ request()->segment(2) == 'facebook' ? 'active' : 'text-white' }}" href="{{ url('conversation/facebook') }}">Facebook</a>
                        <a class="list-group-item list-group-item-action bg-secondary {{ request()->segment(2) == 'instagram' ? 'active' : 'text-white' }}" href="{{ url('conversation/instagram') }}">Instagram</a>
                    </div>
                    <a class="list-group-item list-group-item-action {{ request()->segment(1) == 'report' ? 'bg-dark active' : 'bg-light' }}"
                        data-toggle="collapse"
                        data-target="#collapsibleReport"
                        aria-expanded="{{ request()->segment(1) == 'report' ? 'show' : '' }}"
                        href="#!">Report</a>
                    <div class="collapse navbar-collapse {{ request()->segment(1) == 'report' ? 'show' : '' }}" id="collapsibleReport">
                        <a class="list-group-item list-group-item-action bg-secondary {{ request()->segment(2) == 'channel' ? 'active' : 'text-white' }}" href="{{ url('report/channel') }}">Channel</a>
                        <a class="list-group-item list-group-item-action bg-secondary {{ request()->segment(2) == 'sentiment' ? 'active' : 'text-white' }}" href="{{ url('report/sentiment') }}">Sentiment</a>
                    </div>
                </div>
            </div>
            <!-- Page Content-->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ \Auth::user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">{{ \Auth::user()->email }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
