@extends('layouts.app')

@section('scripts')
	<script src="{{ asset('js/knet_register.js') }}" defer></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

						<div class="knet_step knet_company">
							<h3>{{ __('Company Information') }}</h3>
							<section>
								<div class="form-group row">
									<label for="companyname" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

									<div class="col-md-6">
										<input id="companyname" type="text" class="form-control @error('companyname') is-invalid @enderror" name="companyname" value="{{ old('companyname') }}" required autocomplete="companyname">

										@error('companyname')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								
								<div class="form-group row mb-0">
									<div class="col-md-6 offset-md-4">
										<button type="button" class="knet_register_company_next_button btn btn-primary">
											{{ __('Next') }}
										</button>
									</div>
								</div>
							</section>
						</div>
						<div class="knet_step knet_user">
							<h3>{{ __('Account Information') }}</h3>
							<section>
								<div class="form-group row">
									<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

									<div class="col-md-6">
										<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

										@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

									<div class="col-md-6">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<div class="form-group row">
									<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

									<div class="col-md-6">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<div class="form-group row">
									<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

									<div class="col-md-6">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
									</div>
								</div>

								<div class="form-group row mb-0">
									<div class="col-md-6 offset-md-4">
										<button type="button" class="btn btn-primary knet_register_user_previous_button">
											{{ __('Previous') }}
										</button>
										<button type="submit" class="btn btn-primary">
											{{ __('Register') }}
										</button>
									</div>
								</div>
							</section>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
