@extends('dashboard.layouts.main')

@section('index')
			    <h1 class="app-page-title">Akun saya</h1>
                <div class="row gy-4">
	                <div class="col-12 col-lg-6">
		                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder">
										    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
									    </div><!--//icon-holder-->
						                
							        </div><!--//col-->
							        <div class="col-auto">
								        <h4 class="app-card-title">Profile</h4>
							        </div><!--//col-->
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4 w-100">
							  <form method="post" action="/myposts/new/add" class="settings-form" enctype="multipart/form-data">
							    @csrf
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">Judul postingan<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="Judul postingan wajib di isi, karena akan di tampilkan di halaman utama."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
  <circle cx="8" cy="4.5" r="1"/>
</svg></span></label>
									    <input type="text" class="form-control" id="setting-input-1" name="title" placeholder="Judul postingan" required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-3" class="form-label">slug</label>
									    <input type="text" class="form-control" id="setting-input-3" name="slug" placeholder="slug" required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Nama author</label>
									    <input type="text" class="form-control" id="setting-input-2" name="author" placeholder="Nama penulis" required>
									</div>
								    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Deskripsi postingan</label>
									    <input type="text" class="form-control" id="setting-input-3" name="description" placeholder="Desktipsi postingan" required>
									</div>
									<div class="mb-3">
  <label for="formFileSm" class="form-label">Small file input example</label>
  <input class="form-control form-control-sm" id="formFileSm" type="file" name="image">
</div>
									<div class="mb-3">
									    <label for="setting-input-3" class="form-label">Isi postingan</label>
									    <input type="hidden" class="form-control" id="post-body" name="body" placeholder="Isi postingan" required>
									    <trix-editor input="post-body"></trix-editor>
									</div>
									<button type="submit" class="btn app-btn-primary mb-3">Buat postingan</button>
							    </form><!--//item-->
						    </div><!--//app-card-body-->

						   
						</div><!--//app-card-->
	                </div><!--//col-->
                </div><!--//row-->
		    @endsection
		    
		    
	