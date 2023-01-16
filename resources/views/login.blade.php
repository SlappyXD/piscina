<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/login/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(/login/images/back.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Academia de Natación "NADA BIEN"</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Ingresar al sistema</h3>
		      	<form method="post" action="{{ route ('identificacion') }}" class="signin-form">
                  @csrf
		      		<div class="form-group">
		      			<input type="text @error('name') is-invalid @enderror" class="form-control" placeholder="Username" value="{{old('name')}}" id="name" name="name" required >
                          @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
		      		</div>
	            <div class="form-group">
	              <input id="password-field @error('password') is-invalid @enderror" type="password" class="form-control" placeholder="Password" id="password" name="password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
	            </div>
	            <div class="form-group">
	            	<button class="form-control btn btn-primary submit px-3">Ingresar</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Recordarme siempre
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="/login/js/jquery.min.js"></script>
  <script src="/login/js/popper.js"></script>
  <script src="/login/js/bootstrap.min.js"></script>
  <script src="/login/js/main.js"></script>

	</body>
</html>

