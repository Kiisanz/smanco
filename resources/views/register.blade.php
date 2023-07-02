@extends('layouts.login')

@section('index')
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div id="icon" class="icon d-flex align-items-center justify-content-center">
		      	  <img class="rounded" src="assets/img/logo.webp">
		      	</div>
		      	<h3 id="h3" class="text-center mb-4">Join Compasmania</h3>
						<form method="post" action="/register/add" class="login-form">
						  @csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left @error('nama') is-invalid @enderror" placeholder="Nama Lengkap" name="nama" required>
		      			@error('nama')
		      			<div class="invalid-feedback">
		      			  {{ $message }}
		      			</div>
		      			@enderror
		      		</div>
		      		<div class="form-group">
		      			<select name="kelas" class="form-control">
		      			  <option selected>Kelas</option>
                    <option value="X-1">X-1</option>
                    <option value="X-2">X-2</option>
                    <option value="X-3">X-3</option>
                    <option value="X-4">X-4</option>
                    <option value="X-5">X-5</option>
                    <option value="X-6">X-6</option>
                    <option value="X-7">X-7</option>
                    <option value="X-8">X-8</option>
                    <option value="X-9">X-9</option>
                    <option value="X-10">X-10</option>
                    <option value="X-11">X-11</option>
                    </select>
		      		</div>
		      		<div class="form-group">
		      					<select name="gender" class="form-control">
		      			  <option selected>Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Lainya">Lainnya</option>
                    </select>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="text" class="form-control rounded-left @error('alasan') is-invalid @enderror" placeholder="Mengapa anda ingin bergabung?" name="alasan" required>
	              	@error('alasan')
		      			<div class="invalid-feedback">
		      			  {{ $message }}
		      			</div>
		      			@enderror
	            </div>
	            <div class="form-group">
	            	<button id="btn" type="submit" class="btn rounded submit p-3 px-5">Daftar</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

@endsection