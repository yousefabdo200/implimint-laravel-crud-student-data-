<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" href= "images/logo.jpg"/>
        <link rel="stylesheet" href= "css/all.min.css"/>
        <link rel="stylesheet" href= "css/fontawesome.min.css"/>
        <link rel="stylesheet" href= "css/bootstrap.min.css"/>
        <link rel="stylesheet" href= "css/style.css"/>
    </head>
    <body>
        <div class="index">
        </div>
        <div class="control container row">
            
            <div class="col-sm-10 col-md-6 text-center">
                <img src="images/logo.jpg" alt="Francais">
            </div>
            <div class="login col-sm-10 col-md-4">
                @if(Session::has('error'))
                    {{Session::get('error')}}
                @endif
                <form method="POST" action="{{route('admin.log')}}">
                    @csrf
                    <h3 class="text-center">Sign In</h4>
                    <div class="input">
                        <i class="fa fa-user"></i><input class="form-control form-control-lg" type="text" name="user" placeholder="Username" autocomplete="off" required="required"/>
                    </div>
                    <div class="input">
                        <i class="fa fa-lock"></i><input class="form-control form-control-lg pass-input" type="password" name="pass" placeholder="Password" autocomplete="new-password"/><i class="fa fa-eye visual-password"></i>
                    </div>
                    <div class="">
                        <input class="btn btn-primary btn-lg input-group" type="submit" value="Login"/></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
        
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>