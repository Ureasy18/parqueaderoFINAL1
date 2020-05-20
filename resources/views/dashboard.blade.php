


------------------------------------------------
@extends('layouts.app', ['activePage' => 'Pagina Principal', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">insert_emoticon</i>
              </div>
              <p class="card-category">Total</p>
              <h3 class="card-title">100
                <small>Clientes</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger"></i>
                <a href="#pablo"></a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">directions_car</i>
              </div>
              <p class="card-category">Vehiculos</p>
              <h3 class="card-title">10</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons"></i> 
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment_turned_in</i>
              </div>
              <p class="card-category">Cupos</p>
              <h3 class="card-title">25</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons"></i> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-md-8">
          <h1 class="text-black text-center">{{ __('Software Parqueaderos UCC') }}</h1>
        </div>
        <div class="col-lg-10 col-md-8"> 
        <h5 class="text-black text-center">{{ __('Aqui podras encontrar todas las herramientas para tu software') }}</h5>
        </div>
      </div>
    </div>
  </div>
  
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush