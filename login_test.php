<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Wibu</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form onsubmit="event.preventDefault()" class="box" action="proses_login.php" method="post">
                        <h1>Web Login</h1>
                        <p class="text-muted">Masukkan Akun Anda Ato Saya Santet</p>
                        <input type="text" name="username" placeholder="Username" class="form-control">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                        <a class="forgot text-muted" href="#">Forgot password?</a>
                        <input type="submit" class="btn btn-success" name="login" value="LOGIN">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
