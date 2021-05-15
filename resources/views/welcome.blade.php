

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>પ્રશ્નપત્રિકા</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    @include('layout.navbar')
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" >
                <div id="div1">
                    <h1><strong id="head"></strong><br></h1>
                    <p class="text-justify" id="para" style="font-size: 21px;"></p>
                </div>
            </div>
            <form method="post" action="{{route('login')}}">
                @csrf
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="userid" placeholder="ID" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                @section('msg')
                <div>User ID or Password is wrong</div>
                @endsection
    <div class="form-group">
        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required>I agree to the license terms.</label></div>
    </div>
    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a class="already" href="#">Forgot password? Login here.</a></form>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
@include('layout.footer')