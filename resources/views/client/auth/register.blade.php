<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<title>CityCard</title>

		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/vendor/images/apple-touch-icon.png') }}"/>
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/image/logo/icons8-автомобиль-50.png') }}"/>
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/image/logo/icons8-автомобиль-50.png') }}"/>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
        <!-- Styling and icon -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/styles/core.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/styles/icon-font.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/styles/style.css') }}" />
        <!-- Styling and icon -->
        <!-- Scripts -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
        <!-- Scripts -->
	</head>

	<body class="login-page">
		<div class="login-header box-shadow">
			<div class="container-fluid d-flex justify-content-between align-items-center">
				<div class="brand-logo">
					<a href="login.html">
						<h2 style="color: blue;">CityCard</h2>
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="{{ route('client.login') }}">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
        <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="{{ asset('assets/image/pictures/grayom-Z6PH4kSs-V8-unsplash.jpg') }}" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Register Client</h2>
							</div>
							<form action="{{ route('client.register.post') }}" method="POST">
                                @csrf
                                @if (Session::get('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
								<div class="select-role">
									<div class="btn-group btn-group-toggle" data-toggle="buttons">
										<label class="btn active">
											<input type="radio" id="admin" />
											<div class="icon">
												<img src="{{ asset('assets/vendor/images/briefcase.svg') }}" class="svg" alt=""/>
											</div>
											<span>I'm</span>
											Client
										</label>
										<label class="btn">
											<input type="radio" id="user" />
											<div class="icon">
												<img src="{{ asset('assets/vendor/images/person.svg') }}" class="svg" alt=""/>
											</div>
											<span>I'm</span>
											Admin
										</label>
									</div>
								</div>
								<div class="input-group custom">
									<input type="text" name="number" class="form-control form-control-lg" placeholder="Card Numer" value="{{ old('number') }}"/>
									<div class="input-group-append custom">
										<span class="input-group-text">
                                            <i class="icon-copy dw dw-user1"></i>
                                        </span>
									</div>
								</div>
                                @error('number')
                                    <div class="d-block text-danger" style="margin-top: -25px; margin-bottom: 15px;">
                                        {{ $message }}
                                    </div>
                                @enderror
								<div class="input-group custom">
									<input type="text" name="password" class="form-control form-control-lg" placeholder="Phone Number" value="{{ old('password') }}"/>
									<div class="input-group-append custom">
										<span class="input-group-text">
                                            <i class="dw dw-padlock1"></i>
                                        </span>
									</div>
								</div>
                                @error('password')
                                    <div class="d-block text-danger" style="margin-top: -25px; margin-bottom: 15px;">
                                        {{ $message }}
                                    </div>
                                @enderror
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- welcome modal end -->
		<!-- js -->
		<script src="{{ asset('assets/vendor/scripts/core.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/script.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/process.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/layout-settings.js') }}"></script>
		<script src="{{ asset('plugins/jquery-steps/jquery.steps.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/steps-setting.js') }}"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe>
        </noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
