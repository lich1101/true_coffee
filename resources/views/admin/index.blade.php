@extends('layout.master')

@section('content')
    <div class="col-md-4">
        <div class="card text-dark mb-4" style="background-color: #FFF2DC">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <img src="{{ asset('pictures/Job Oppening.png') }}" width="20" height="20" alt="">
                        <h2>23</h2>
                        <p>Sản phẩm</p>
                    </div>
                    <div>
                        <i class="fas fa-box fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-dark mb-4" style="background-color: #FFEEF1">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <img src="{{ asset('pictures/Total Employees.png') }}" width="20" height="20" alt="">
                        <h2>1259</h2>
                        <p>Người dùng</p>
                    </div>
                    <div>
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
