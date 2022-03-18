<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href={{ asset("images/icons/favicon.ico")}}/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset("vendor/bootstrap/css/bootstrap.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset("fonts/Linearicons-Free-v1.0.0/icon-font.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset("vendor/animate/animate.css") }} >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset("vendor/css-hamburgers/hamburgers.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset("vendor/animsition/css/animsition.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset("vendor/select2/select2.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset("vendor/daterangepicker/daterangepicker.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset("css/util.css") }}>
	<link rel="stylesheet" type="text/css" href={{ asset("css/main.css")}}>
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>


	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
                    @csrf
					<span class="login100-form-title p-b-53">
						ShopBi Register
					</span>
{{--
					<a href="#" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-20">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a> --}}

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
                        <div class="input-group ">

                            <input name="name" type="text" class="form-control" placeholder="Username"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mt-3">
                            <p style="color: red">{{ $errors->has('name') ? $errors->first('name') : '' }}</p>
                        </div>
                    {{-- <div class="p-t-31 p-b-9">
						<span class="txt1">
							Address
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="address" >
						<span class="focus-input100"></span>
					</div>
                    <div class="p-t-31 p-b-9">
						<span class="txt1">
							PhoneNumber
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="phone_number" >
						<span class="focus-input100"></span>
					</div> --}}
                    <div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
                        <div class="input-group ">

                            <input name="email" type="text" class="form-control" placeholder="Email"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mt-3">
                            <p style="color: red">{{ $errors->has('email') ? $errors->first('email') : '' }}</p>
                        </div>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
                        <div class="input-group ">

                            <input name="password" type="text" class="form-control" placeholder="Password"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mt-3">
                            <p style="color: red">{{ $errors->has('password') ? $errors->first('password') : '' }}</p>
                        </div>

                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                               Confirm Password
                            </span>
                            <div class="input-group ">

                                <input name="confirmPassword" type="text" class="form-control" placeholder="Password"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mt-3">
                                <p style="color: red">{{ $errors->has('confirmPassword') ? $errors->first('confirmPassword') : '' }}</p>
                            </div>
                            @if (Session::has('msg'))
                            <p style="color: red">{{Session::get('msg')}}</p>
                            @endif

                        <div class="input-group ">

                            <input name="role_id" type="text" class="form-control" placeholder="Password"
                                aria-label="Username" aria-describedby="basic-addon1" value="3" hidden>
                        </div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>

					{{-- <div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="#" class="txt2 bo1">
							Sign up now
						</a> --}}
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src={{ asset("vendor/jquery/jquery-3.2.1.min.js") }}></script>
<!--===============================================================================================-->
	<script src={{ asset("vendor/animsition/js/animsition.min.js") }}></script>
<!--===============================================================================================-->
	<script src={{ asset("vendor/bootstrap/js/popper.js") }}></script>
	<script src={{ asset("vendor/bootstrap/js/bootstrap.min.js") }}></script>
<!--===============================================================================================-->
	<script src={{ asset("vendor/select2/select2.min.js") }}></script>
<!--===============================================================================================-->
	<script src={{ asset("vendor/daterangepicker/moment.min.js") }}></script>
	<script src={{ asset("vendor/daterangepicker/daterangepicker.js") }}></script>
<!--===============================================================================================-->
	<script src={{ asset("vendor/countdowntime/countdowntime.js") }}></script>
<!--===============================================================================================-->
	<script src={{ asset("js/main.js") }}></script>

    <script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </script>

</body>
</html>
