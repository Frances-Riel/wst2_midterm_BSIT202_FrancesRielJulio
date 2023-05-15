<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .row {
           display: flex; 
           justify-content: center; 
           align-items: center;"
        }

        .form-group {
            font-weight: bold ;
            text-align: left;
            margin-left:20px;
            width: 500px;
        }
    </style>
</head>
<body>
    <div id="preloader">
        <div>
            <img src="assets/images/loading-gif.gif" alt="Loading">
        </div>
    </div>
    <main>
        <div class="row" style="display: flex; justify-content: center; align-items: center;">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-20">
                        <h1>Login</h1>
                        <div id="login_status"></div>
                        <form id="login">
                            <div class="form-group">
                                <label for="login_email">Email</label>
                                <input type="text" class="form-control" name="login_email" id="login_email">
                            </div>
                            <div class="form-group">
                                <label for="login_password">Password</label>
                                <input type="password" class="form-control" name="login_password" id="login_password">
                            </div>
                            <div>
                                <button type="button" class="btn btn-success mt-2 login">Log In</button>
                            </div>
                            <div>
                                <input type="button" class="btn btn-warning mt-2 register"onClick="location.href='index.php'"value='Register'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>
