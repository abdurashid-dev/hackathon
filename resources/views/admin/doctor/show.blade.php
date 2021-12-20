@extends('layout.admin')
@section('title')
    Hospital show
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="card-title">Hospital show</h3>
                        </div>
                        <div class="col-md-2">
                            <a type="button" href="{{ route('admin.hospital.index') }}" class="btn btn-block btn-primary btn-sm">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0 table-responsive">
                    <table class="table table-sm">
                        <tr>
                            <th>#</th>
                            <td>{{ $hospital->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>
                                {{ $hospital->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>
                                {{ $hospital->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>Longitude</th>
                            <td>
                                {{ $hospital->longitude }}
                            </td>
                        </tr>
                        <tr>
                            <th>Latitude</th>
                            <td>
                                {{ $hospital->latitude }}
                            </td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>
                                {{ $hospital->address }}
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
