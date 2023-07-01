@extends('dashboard.layouts.main')

@section('index')
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Data Anggota</h1>
				    </div>
				    @include('dashboard.components.lists.tab_utils')
			    </div>
			    	    <div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
    <tr>
      <th class="px-4" scope="col">No</th>
      <th class="px-4" scope="col">Nama</th>
      <th class="px-4" scope="col">Gender</th>
      <th class="px-4" scope="col">Kelas</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th class="px-4" scope="row">{{ $loop -> iteration }}</th>
      <td class="px-4">{{ $user -> nama }}</td>
      <td class="px-4">{{ $user -> gender }}</td>
      <td class="px-4">{{ $user -> kelas }}</td>
    </tr>
    @endforeach
    </tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
						@include('dashboard.components.lists.pagination')
						
			        </div><!--//tab-pane-->
			        
			 
				</div>
		 <!--//container-fluid-->
@endsection