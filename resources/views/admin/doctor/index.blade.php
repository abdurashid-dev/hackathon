@extends('layout.admin')
@section('title')
    Doctors
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    Shifokorlar
                </div>
                <div class="col-md-6 col-sm-12 text-end">
                    <a class="btn btn-sm btn-primary" href="{{route('admin.doctor.create')}}"><i class="fas fa-plus"></i> Add</a>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>FIO</th>
                    <th>Lavozimi</th>
                    <th>Harakatlar</th>
                </tr>
                @foreach($doctors as $doctor)
                    <tr>
                        <td>{{$doctor->id}}</td>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->position}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.doctor.show', $doctor->id) }}" type="button"
                                   class="btn btn-primary btn-flat">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.doctor.edit', $doctor->id) }}" type="button"
                                   class="btn btn-success btn-flat">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{route('admin.doctor.destroy',$doctor->id)}}" method="POST">
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
            {{$doctors->links()}}
@stop
