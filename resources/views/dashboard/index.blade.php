@extends('dashboard.layouts.main')			  

@section('index')			  
			    <h1 class="app-page-title">Overview</h1>
			    
			      @include('dashboard.components.index.alert')
			      @include('dashboard.components.index.card_info')
			        <div class="row g-4 mb-4">
			          @include('dashboard.components.index.user_percent_chart')
			          @include('dashboard.components.index.users_stats')
			       </div>
@endsection