@extends('layout.admin')
@section('title')
    Doctor show
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="card-title">{{$doctor->name}}</h3>
                        </div>
                        <div class="col-md-2">
                            <a type="button" href="{{ route('admin.doctor.index') }}" class="btn btn-block btn-primary btn-sm">
                                <i class="fas fa-arrow-left"></i> Orqaga
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0 table-responsive">
                    <table class="table table-sm">
                        <tr>
                            <th>#</th>
                            <td>{{ $doctor->id }}</td>
                        </tr>
                        <tr>
                            <th>FIO</th>
                            <td>
                                {{ $doctor->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>Telefon raqami</th>
                            <td>
                                {{ $doctor->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>Lavozimi</th>
                            <td>
                                {{ $doctor->position }}
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
