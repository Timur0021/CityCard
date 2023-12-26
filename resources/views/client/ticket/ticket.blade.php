<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>
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
            <h3 style="text-align: center; padding-top: 3rem;padding-bottom: 1rem;">Add Ticket</h3>
            <p style="text-align: center;;padding-bottom: 5rem;">Here is a list of your tickets for trip</p>

            <a href="{{ route('client.ticket.ticket.cteate') }}">
                <button class="btn btn-outline-success" type="submit">
                    Add Ticket
                </button>
            </a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Transport</th>
                    <th scope="col">City</th>
                    <th scope="col">Type Ticket</th>
                    <th scope="col">Price Ticket</th>
                    <th scope="col">Buy</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($ticket as $tickets)
                        <tr>
                            <th scope="row">{{ $tickets->id }}</th>
                            <th scope="row">{{ $tickets->transport->title }}</th>
                            <th scope="row">{{ $tickets->city->title }}</th>
                            <th scope="row">{{ $tickets->type->ticket_type }}</th>
                            <form action="{{ route('client.ticket.ticket.post') }}" method="POST">
                                @csrf
                                <th scope="row"><input name="amount" style="box-sizing: border-box; border-radius:10px;text-align:center;" value="{{$tickets->type->ticket_price }}">$</th>
                                <th scope="row">
                                    <button class="btn btn-outline-primary" type="submit">Buy</button>
                                </th>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>

		</div>
		<!-- js -->
		<script src="{{ asset('assets/vendor/scripts/core.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/script.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/process.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/layout-settings.js') }}"></script>
		<script src="{{ asset('plugins/apexcharts/apexcharts.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/scripts/dashboard.js') }}"></script>
	</body>
</html>
