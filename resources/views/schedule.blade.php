<!DOCTYPE html>
<html>
    <head>
        <title>Home Reservation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1>
                                <a href="{{url('/')}}">Home Reservation</a>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group form">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Search..."
                                    />
                                    <span class="input-group-btn">
                                        <button
                                            class="btn btn-primary"
                                            type="button"
                                        >
                                            Search
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav
                                class="collapse navbar-collapse bs-navbar-collapse navbar-right"
                                role="navigation"
                            >
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a
                                            href="#"
                                            class="dropdown-toggle"
                                            data-toggle="dropdown"
                                            >My Account <b class="caret"></b
                                        ></a>
                                        <ul
                                            class="dropdown-menu animated fadeInUp"
                                        >
                                            <li>
                                                <a href="profile.html"
                                                    >Profile</a
                                                >
                                            </li>
                                            <li>
                                                <a href="login.html">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="container">
                <div class="col-md-10">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">予定表</div>
                    </div>
                    <div class="content-box-large box-with-header">
                        Pellentesque luctus quam quis consequat vulputate. Sed
                        sit amet diam ipsum. Praesent in pellentesque diam, sit
                        amet dignissim erat. Aliquam erat volutpat. Aenean
                        laoreet metus leo, laoreet feugiat enim suscipit quis.
                        Praesent mauris mauris, ornare vitae tincidunt sed,
                        hendrerit eget augue. Nam nec vestibulum nisi, eu
                        dignissim nulla.
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="copy text-center">
                    Copyright 2014 <a href="#">Website</a>
                </div>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
