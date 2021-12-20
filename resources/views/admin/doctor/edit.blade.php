@extends('layout.admin')
@section('title')
    Hospital
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    Doktor tahrirlash
                </div>
                <div class="col-md-6 col-sm-12 text-end">
                    <a class="btn btn-sm btn-primary" href="{{route('admin.doctor.index')}}"><i class="fas fa-arrow-left"></i> Orqaga</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- form start -->
            <form method="POST" action="{{ route('admin.doctor.update', $doctor->id) }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group mt-3">
                    <label>FIO</label>
                    <input type="text" required class="form-control" name="name" value="{{$doctor->name}}">
                </div>
                @error ('name')
                <p class="text-danger">* {{$message}}</p>
                @enderror
                <div class="form-group mt-3">
                    <label>Telefon raqami</label>
                    <input type="text" required class="form-control" name="phone" value="{{$doctor->phone}}">
                </div>
                @error ('phone')
                <p class="text-danger">* {{$message}}</p>
                @enderror
                <div class="form-group mt-3">
                    <label>Lavozimi</label>
                    <input type="text" required class="form-control" name="position" value="{{$doctor->position}}">
                </div>
                @error ('position')
                <p class="text-danger">* {{$message}}</p>
                @enderror
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-group mt-3">
                    <label>Rasm (ixtiyoriy)</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error ('image')
                <p class="text-danger">* {{$message}}</p>
                @enderror
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
            {{--end form--}}
        </div>
    </div>
@stop
