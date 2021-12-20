@extends('layout.admin')
@section('title')
    Hospitals
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    Hospitals
                </div>
                <div class="col-md-6 col-sm-12 text-end">
                    <a class="btn btn-sm btn-primary" href="{{route('admin.hospital')}}"><i class="fas fa-plus"></i> Add</a>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
                @foreach($hospitals as $hospital)
                    <tr>
                        <td>{{$hospital->id}}</td>
                        <td>{{$hospital->name}}</td>
                        <td>{{$hospital->phone}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.hospital.show', $hospital->id) }}" type="button"
                                   class="btn btn-primary btn-flat">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.hospital.edit', $hospital->id) }}" type="button"
                                   class="btn btn-success btn-flat">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{route('admin.hospital.destroy',$hospital->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure ?')"
                                            type="submit" class="btn btn-danger btn-flat"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop
