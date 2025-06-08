<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	@include('backend.section.link')
	<title>LMS -Admin Login</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">

					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="{{ asset('backend/assets/images/login-images/login-cover.svg') }}" class="img-fluid auth-img-cover-login" width="650" alt=""/>
							</div>
						</div>
						
					</div>

					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
										<img src="{{ asset('backend/assets/images/logo-icon.png') }}" width="60" alt="">
									</div>
									<div class="text-center mb-4">
										<h5 class="">Admin Login</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
										<form method="POST" action="{{ route('login') }}" class="row g-3">
                                            @csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input name="email" type="email" value="{{ old('email') }}" class="form-control" id="inputEmailAddress" placeholder="jhon@example.com">
                                                 <x-input-error :messages="$errors->get('email')" class="mt-2" />
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input name="password"  value="{{ old('password') }}" type="password" class="form-control border-end-0 p-2" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
												</div>
											</div>
											
											
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary mt-3">Sign in</button>
												</div>
											</div>
											
										</form>
									</div>
									
									

								</div>
							</div>
						</div>
					</div>

				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	@include('backend.section.script')
</body>

</html>