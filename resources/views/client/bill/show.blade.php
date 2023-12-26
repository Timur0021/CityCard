<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<title>CityCard</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/image/logo/icons8-автомобиль-50.png') }}"/>
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/image/logo/icons8-автомобиль-50.png') }}"/>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/image/logo/icons8-автомобиль-50.png') }}"/>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/styles/core.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/styles/icon-font.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/css/dataTables.bootstrap4.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/css/responsive.bootstrap4.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/styles/style.css') }}" />
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
	</head>
	<body>

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
			</div>
			<div class="header-right">
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a class="dropdown-toggle" style="padding-top: 15px;" href="#" role="button" data-toggle="dropdown">
							<span class="user-name">{{ Auth::guard('client')->user()->role }}</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
							<a class="dropdown-item" href="profile.html">
                                <i class="dw dw-user1"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                <i class="fa fa-user-secret" style="color: #000000;"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12">
                        User Interface Settings
                    </span>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">
                            White
                        </a>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">
                            White
                        </a>
					</div>
					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>
        @include('client.includes.sidebar')
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
<div class="invoice-wrap">
            <div class="invoice-box">
                <div class="invoice-header">
                    <div class="logo text-center">
                        <img src="vendors/images/deskapp-logo.png" alt="">
                    </div>
                </div>
                <h4 class="text-center mb-30 weight-600">TICKET</h4>
                <div class="row pb-30">
                    <div class="col-md-6">
                        <h5 class="mb-15">Client Name: {{ Auth::guard('client')->user()->role }}</h5>
                        <p class="font-14 mb-5">
                            Date Issued: <strong class="weight-600">{{ $bill->created_at }}</strong>
                        </p>
                        <p class="font-14 mb-5">
                            Invoice No: <strong class="weight-600">#{{ $bill->id }}</strong>
                        </p>
                    </div>
                </div>
                <div class="invoice-desc pb-30">
                    <div class="invoice-desc-head clearfix">
                        <div class="invoice-sub">Description</div>
                        <div class="invoice-hours">Hours</div>
                        <div class="invoice-subtotal">Subtotal</div>
                    </div>
                    <div class="invoice-desc-body">
                        <ul>
                            <li class="clearfix">
                                <div class="invoice-sub">{{ $bill->card_number_id }}</div>
                                <div class="invoice-hours">{{ $bill->created_at }}</div>
                                <div class="invoice-subtotal">
                                    <span class="weight-600" style="color: red;">{{ $bill->amount }}$</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="invoice-desc-footer">
                        <div class="invoice-desc-head clearfix">
                            <div class="invoice-rate">Due By</div>
                            <div class="invoice-subtotal">Total Due</div>
                        </div>
                        <div class="invoice-desc-body">
                            <ul>
                                <li class="clearfix">
                                    <div class="invoice-rate font-20 weight-600">
                                        {{ $bill->updated_at }}
                                    </div>
                                    <div class="invoice-subtotal">
                                        <span class="weight-600 font-24 text-danger">{{ $bill->amount }}$</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4 class="text-center pb-20">Thank You!!</h4>
            </div>
        </div>
		</div>
		<!-- js -->
		<script src="{{ asset('assets/vendor/scripts/core.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/script.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/process.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/layout-settings.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
	</body>
</html>
