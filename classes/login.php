<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                    <div class="col-md-6">
                        <h1>Login</h1>
                        <div id="login_status"></div>
                        <form id="login">
                            <div class="form-group">
                                <label for="login_username">Username</label>
                                <input type="text" class="form-control" name="login_username" id="login_username">
                            </div>
                            <div class="form-group">
                                <label for="login_password">Password</label>
                                <input type="password" class="form-control" name="login_password" id="login_password">
                            </div>
                            <div>
                                <button type="button" class="btn btn-success mt-2 login">Log In</button>
                            </div>
                            <div>
                                <input type=button onClick="location.href='index.php'"value='Register'>
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
