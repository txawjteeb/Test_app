<html>
<head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
    body {
        background-image: url(http://i.ytimg.com/vi/4BGnQDDgN-w/maxresdefault.jpg);
        background-size: 1920px 1080px;
        background-repeat: no-repeat;
        font-size: 20px;
    }
    h1 {
        margin-left: 40px;
        color: white;
    }
    .black {
        color: black;
        margin-top: 270px;
        margin-left: 110px;
    }
    #login {
        background: rgba(255,255,255,.7);
        padding: 40px;
    }


    </style>
</head>
<body>
    <nav class="nav navbar-inverse" id="nav">
        <div class="row">
            <div class="col-md-2">
                <h1>Test App</h1>
            </div>
            <div class="col-md-8 middle">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="/main/index">Home</a></li>
                </ul>
            </div>
            <div class="col-md-2 middle">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="/main/sign_in">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    

    <div class="col-md-11">
    <div><center><h1 class="black">Sign In</h1></div>
        <div class="col-md-4 col-md-offset-1"></div>
            <form class="col-md-3" id="login">
                <div class="form-group">
                    <input type="text" class="form-control input-md" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-md" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-md" placeholder="Confirm">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        <div class="col-md-4 col-md-offset-1"></div>
    </div>
</body>
</html>