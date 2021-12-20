@extends('layout.admin')
@section('title')
    Dashboard
@endsection
@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$hospitals->count()}}</h3>

                        <p>Shifoxonalar</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-hospital"></i>
                    </div>
                    <a href="#" class="small-box-footer">Ko'proq <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @endif
    <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$doctors->count()}}</h3>

                    <p>Shifokorlar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-nurse"></i>
                </div>
                <a href="#" class="small-box-footer">Ko'proq <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>#</h3>

                    <p>Foydali linklar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-link"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>#</h3>

                    <p>Slayderlar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-sliders-h"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
@endsection
