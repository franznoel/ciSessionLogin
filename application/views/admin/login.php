<!DOCTYPE HTML>
<html>
    <head>
        <title>CodeIgniter Session Login</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        {username} {password}
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div id="login-form" class="panel panel-default" style="margin-top:25%;">
                        <div class="panel-body">
                            <form method="post" action="login">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" />
                                </div>
                                <input type="submit" value="Login" class="btn btn-primary"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html>