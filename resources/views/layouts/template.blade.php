<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title'){{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
		<!-- <link rel="canonical" href="https://preview.keenthemes.com/rider" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/logo.png')}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle-dashboard.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/calon-tenaga-ahli.css')}}" rel="stylesheet" type="text/css" />
	<!-- sweetalert -->
	{{-- <link rel="stylesheet" href="{{url('assets/css/sweetalert2.min.css')}}"> --}}
		<!--end::Global Stylesheets Bundle-->
		@yield('css')
		@yield('css01')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside bg-white" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto pt-9 pb-7 px-9" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="index.html">
							<img alt="Logo" src="{{ asset('assets/media/logos/logo-text.png')}}" class="img-fluid" />
							<img alt="Logo" src="{{ asset('assets/media/logos/logo-compact.svg')}}" class="max-h-50px logo-minimize" />
						</a>
						<!--end::Logo-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid px-3 px-lg-6">
						<!--begin::Aside Menu-->
						<!--begin::Menu-->
						<div class="menu menu-column menu-pill menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-arrow-gray-500 fw-bold fs-5 my-5 mt-lg-2 mb-lg-0" id="kt_aside_menu" data-kt-menu="true">
							<div class="hover-scroll-y me-n3 pe-3" id="kt_aside_menu_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="20px">
								<div class="menu-item mb-1">
									<a class="menu-link {{ Route::is('home') ? 'active' : '' }}" href="{{route('home')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
														<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Dasbor Utama</span>
									</a>
								</div>
								{{-- @if(Auth::user()->role_id == 1) --}}
									{{-- START MENU Admin --}}

									{{-- END MENU Admin --}}
								{{-- @elseif(Auth::user()->role_id == 2) --}}
									{{-- START MENU Tenaga Ahli --}}
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
														<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Ubah Data</span>
											<span class="menu-arrow"></span>
										</span>

										<div class="menu-sub menu-sub-accordion">
											<div class="menu-item">
												<a class="menu-link" href="general/about.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">SKA (Sertifikat Keahlian)</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="general/about.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Pengalaman Kerja</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="general/about.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Riwayat Pendidikan</span>
												</a>
											</div>
										</div>
									</div>

									{{-- start sunting akun tenaga ahli --}}
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1 {{ Route::is('akun*') ? 'hover show' : '' }}">
										<span class="menu-link" href="{{route('akun')}}">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Akun Saya</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div class="menu-item">
												<a class="menu-link {{ Route::is('akun') ? 'active' : '' }}" href="{{route('akun')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Informasi Akun</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link {{ Route::is('akun.suntingakun') ? 'active' : '' }}" href="{{route('akun.suntingakun')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Sunting Akun</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link {{ Route::is('akun.gantiemail') ? 'active' : '' }}" href="{{route('akun.gantiemail')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Ganti Email</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link {{ Route::is('akun.gantipw') ? 'active' : '' }}" href="{{route('akun.gantipw')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Ganti Kata Sandi</span>
												</a>
											</div>
										</div>
									</div>
									{{-- end sunting akun tenaga ahli --}}

									{{-- END MENU Tenaga Ahli --}}
								{{-- @elseif(Auth::user()->role_id == 3) --}}
									{{-- START MENU Tim Pengembangan Tenaga Ahli --}}

									{{-- END MENU Tim Pengembangan Tenaga Ahli --}}
								{{-- @elseif(Auth::user()->role_id == 4) --}}
									{{-- START MENU Marketing Manager --}}
									{{-- start data master pelanggan --}}
									<div class="menu-item mb-1">
										<a class="menu-link {{ Route::is('pelanggan*') ? 'active' : '' }}" href="{{route('pelanggan.index')}}" title="Data Master Pelanggan" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-arrange.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000" />
															<path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Data Master Pelanggan</span>
										</a>
									</div>
									{{-- end data master pelanggan --}}
									{{-- start Paket Pekerjaan dan Kriteria Kebutuhan Pegawai --}}
									<div class="menu-item">
										<a class="menu-link {{ Route::is('paket_pekerjaan*') ? 'active' : '' }} {{ Route::is('kriteria_paket_pekerjaan*') ? 'active' : '' }}" href="{{route('paket_pekerjaan.index')}}">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotone/Interface/Calendar.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C6 2.44772 6.44772 2 7 2C7.55228 2 8 2.44772 8 3V4H16V3C16 2.44772 16.4477 2 17 2C17.5523 2 18 2.44772 18 3V4H19C20.6569 4 22 5.34315 22 7V19C22 20.6569 20.6569 22 19 22H5C3.34315 22 2 20.6569 2 19V7C2 5.34315 3.34315 4 5 4H6V3Z" fill="#191213" />
														<path fill-rule="evenodd" clip-rule="evenodd" d="M10 12C9.44772 12 9 12.4477 9 13C9 13.5523 9.44772 14 10 14H17C17.5523 14 18 13.5523 18 13C18 12.4477 17.5523 12 17 12H10ZM7 16C6.44772 16 6 16.4477 6 17C6 17.5523 6.44772 18 7 18H13C13.5523 18 14 17.5523 14 17C14 16.4477 13.5523 16 13 16H7Z" fill="#121319" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Paket Pekerjaan dan Kriteria Kebutuhan Pegawai</span>
										</a>
									</div>
									{{-- end Paket Pekerjaan dan Kriteria Kebutuhan Pegawai --}}
									{{-- start sunting akun marketing manager --}}
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1 {{ Route::is('akun*') ? 'hover show' : '' }}">
										<span class="menu-link" href="{{route('akun')}}">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Akun Saya</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div class="menu-item">
												<a class="menu-link {{ Route::is('akun') ? 'active' : '' }}" href="{{route('akun')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Informasi Akun</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link {{ Route::is('akun.suntingakun') ? 'active' : '' }}" href="{{route('akun.suntingakun')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Sunting Akun</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link {{ Route::is('akun.gantiemail') ? 'active' : '' }}" href="{{route('akun.gantiemail')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Ganti Email</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link {{ Route::is('akun.gantipw') ? 'active' : '' }}" href="{{route('akun.gantipw')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Ganti Kata Sandi</span>
												</a>
											</div>
										</div>
									</div>
									{{-- end sunting akun marketing manager --}}
									{{-- END MENU Marketing Manager --}}
								{{-- @elseif(Auth::user()->role_id == 5) --}}
									{{-- START MENU Direksi --}}

									{{-- END MENU Direksi --}}
								{{-- @else --}}
								{{-- @endif --}}
								
							</div>
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer-->
					
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-2 mb-5 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="text-dark fw-bolder mt-1 mb-1 fs-2">@yield('title') 
								<small class="text-muted fs-6 fw-normal ms-1"></small></h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb fw-bold fs-base mb-1">
									<li class="breadcrumb-item text-muted">
										<a href="index.html" class="text-muted text-hover-primary">Home</a>
									</li>
									<li class="breadcrumb-item text-dark">@yield('title')</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title=-->
							<!--begin::Logo bar-->
							<div class="d-flex d-lg-none align-items-center flex-grow-1">
								<!--begin::Aside Toggle-->
								<div class="btn btn-icon btn-circle btn-active-light-primary ms-n2 me-1" id="kt_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
									<span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
												<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Aside Toggle-->
								<!--begin::Logo-->
								<a href="index.html" class="d-lg-none">
									<img alt="Logo" src="{{asset('assets/media/logos/logo-compact.svg')}}" class="max-h-40px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Logo bar-->
							<!--begin::Toolbar wrapper-->
							<div class="d-flex align-items-stretch flex-shrink-0">
								<!--begin::User-->
								<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-circle symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
										<img alt="Pic" src="{{asset('storage/image/pengguna')}}/{{ Auth::user()->photo }}" />
									</div>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px symbol-circle me-5">
													{{-- <img alt="Logo" src="{{asset('assets/media/avatars/150-1.jpg')}}" /> --}}
													<img alt="Logo" src="{{asset('storage/image/pengguna')}}/{{ Auth::user()->photo }}"/>
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->nama_lengkap }} 
													</div>
													<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
												</div>
												<!--end::Username-->
											</div>
											<p class="d-flex align-items-center px-3 fw-bold text-muted fs-7">Anda Login Sebagai <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">{{ Auth::user()->Role->nama_role }}</span></p>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="{{route('akun')}}" class="menu-link px-5">Akun Saya</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a class="menu-link px-5" href="{{ route('logout') }}"
								            onclick="event.preventDefault();
								            document.getElementById('logout-form').submit();" >{{ __('Logout') }}</a>
								            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								              @csrf
								            </form>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User -->
							</div>
							<!--end::Toolbar wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid fs-6" id="kt_content">
						<!--begin::Container-->
						<div class="container" id="kt_content_container">
							<!--begin::Card-->
							       @yield('content_top')
							<div class="card mb-5">
								<!--begin::Card body-->
								<div class="card-body p-0">
									@yield('content')
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							       @yield('content_bottom')
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row flex-stack">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-gray-400 fw-bold me-1">Dibuat oleh</span>
								<a href="#" class="text-muted text-hover-primary fw-bold me-2 fs-6">Muhammad Alfian Saniputra</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							{{-- <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">FAQ</a>
								</li>
								<li class="menu-item">
									<a href="https://keenthemes.com/" target="_blank" class="menu-link px-2">Kebijakan & Privasi</a>
								</li>
								<li class="menu-item">
									<a href="https://keenthemes.com/products/rider-html-pro" target="_blank" class="menu-link px-2"></a>
								</li>
							</ul> --}}
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!--begin::Drawers-->
		<!--begin::Exolore drawer toggle-->
		
		<!--end::Exolore drawer-->
		<!--begin::Chat drawer-->
		
		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop rounded-circle" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		{{-- <script src="{{ asset('assets/js/custom/modals/create-account.js')}}"></script> --}}
		{{-- <script src="{{ asset('assets/js/custom/modals/users-search.js')}}"></script> --}}
		{{-- <script src="{{ asset('assets/js/custom/modals/new-card.js')}}"></script> --}}
		{{-- <script src="{{ asset('assets/js/custom/widgets.js')}}"></script> --}}
		{{-- <script src="{{ asset('assets/js/custom/modals/create-app.js')}}"></script> --}}
		{{-- <script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script> --}}
		<script src="{{ asset('assets/js/custom/intro.js')}}"></script>
		<!--end::Page Custom Javascript-->
		<!-- sweetalert -->
		{{-- <script src="{{url('assets/js/sweetalert2.all.min.js')}}"></script> --}}
		@if(Session::get('message') != NULL)
		<script>
			Swal.fire({
                    text: "{{Session::get('message')}}",
                    icon: "{{Session::get('error')}}",
					customClass: {
						confirmButton: "btn fw-bold btn-primary",
						cancelButton: "btn fw-bold btn-active-light-primary"
					}
                })
		</script>
		@endif
		<script>
				$('form').submit(function() {
				$(this).find("button[type='submit']").prop('disabled',true);
				let timerInterval
						Swal.fire({
							title: 'Sedang Proses',
							html: 'Mohon bersabar, dan jangan menekan tombol apapun!.',
							timer: 20000,
							timerProgressBar: true,
							onBeforeOpen: () => {
							Swal.showLoading()
							timerInterval = setInterval(() => {
								Swal.getContent().querySelector('b')
								.textContent = Swal.getTimerLeft()
							}, 100)
							},
							onClose: () => {
							clearInterval(timerInterval)
							}
						})
				});
			</script>
		@yield('js01')
		@yield('js')
		@yield('js2')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>