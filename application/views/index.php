<html>
<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
    body {
        background-image: url(http://i.ytimg.com/vi/4BGnQDDgN-w/maxresdefault.jpg);
        background-size: 1920px 1080px;
        background-repeat: no-repeat;
        font-size: 20px;
    }
    .middle {
        vertical-align : middle;
    }
    #body {
        background: rgba(255, 255, 255, 0.7);
        margin-top: 90px;
        padding: 20px 40px;
    }
    #body2 {
        margin-top: 50px;
    }
    #body3 {
        background: rgba(255, 255, 255, 0.7);
        height: 300px;
        padding: 20px 40px;
    }
    h1 {
        margin-left: 40px;
        color: white;
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
            <div class="col-md-1 col-md-offset-1"></div>
            <div class="col-md-9" id="body">
                <h2>Welcome to the Test</h2>
                <p>We're going to build a cool application using a MVC framework! This application was built with the Village88 folks!</p>
                <br>
                <br>
                <form action="/main/sign_in">
                    <input type="submit" name="start" value="Start">
                </form>
                <br>
            </div>
            <div class="col-md-1 col-md-offset-1"></div>
        </div>
        <div class="col-md-11" id="body2">
            <div class="col-md-1 col-md-offset-1"></div>
            
            <div class="col-md-3" id="body3">
                <h3>Manage Users</h3>
                <p class="">Using this application, you'll learn how to add, remove and edit users for the application.</p>
            </div>
            <div class="col-md-3" id="body3">
                <h3>Leave Messages</h3>
                <p>Users will be able to leave a message to another user using the application</p>
            </div>
            <div class="col-md-3" id="body3">
                <h3>Edit User Information</h3>
                <p>Admins will be able to edit another user's information (email address, first name, last name, etc.)</p>
            </div>
            <div class="col-md-1 col-md-offset-1"></div>
        </div>
    </div>

</body>
</html>