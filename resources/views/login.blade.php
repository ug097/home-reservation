<!DOCTYPE html>
<html>
    <head>
        <title>Home Reservation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body class="login-bg">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="{{url('/')}}">Home Reservation</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-wrapper">
                        <div class="box">
                            <div class="content-wrap">
                                <h6>ログイン</h6>
                                <input class="form-control" type="text" name="mail" placeholder="メールアドレス">
                                <input class="form-control" type="password" name="password" placeholder="パスワード">
                                <div class="action">
                                    <a class="btn btn-primary signup" href="index.html">ログイン</a>
                                </div>
                            </div>
                        </div>

                        <div class="already">
                            <p>オーナーとして登録する方はこちら</p>
                            <a href="{{url('signup')}}">新規登録</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
