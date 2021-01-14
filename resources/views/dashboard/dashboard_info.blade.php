@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Pemasukan</h5>
              
              <span class="h2 font-weight-bold mb-0">Rp. {{number_format($total_pemasukan,0)}} </span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                <i class="fa fa-arrow-circle-down"></i>
              </div>
            </div>
          </div>
          <hr>
          <p class="mt-3 mb-0 text-sm">
            Total pemasukan sampai sekarang
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Pengeluaran</h5>
              <span class="h2 font-weight-bold mb-0">Rp. {{number_format($total_pengeluaran,0)}}</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                <i class="fa fa-arrow-circle-up"></i>
              </div>
            </div>
          </div>
          <hr>
          <p class="mt-3 mb-0 text-sm">
            Total pengeluaran sampai sekarang
          </p>
        </div>
      </div>
    </div>
    
    
  </div>
    
@endsection