@extends('layouts.login')

@section('index')
	<section class="ftco-section">
		<div class="container">
		  @if(session()->has('err'))
		  <div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      {{ session('err') }}
    </div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
@endif
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div id="icon" class="icon d-flex align-items-center justify-content-center">
		      	  <img class="rounded" src="assets/img/logo.webp">
		      	</div>
		      	<h3 id="h3" class="text-center mb-4">Login sebagai admin</h3>
						<form method="post" action="/login" class="login-form">
						  @csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Email" name="email" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
	            </div>
	            <div class="form-group">
	            	<button id="btn" type="submit" class="btn rounded submit p-3 px-5">Login</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

@endsection