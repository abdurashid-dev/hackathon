@extends('layout.admin')
@section('title')
    Hospital
@stop
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                Doktor qo'shish
            </div>
            <div class="col-md-6 col-sm-12 text-end">
                <a class="btn btn-sm btn-primary" href="{{route('admin.doctor.index')}}"><i class="fas fa-arrow-left"></i> Orqaga</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <!-- form start -->
        <form method="POST" action="{{ route('admin.doctor.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group mt-3">
                <label>FIO</label>
                <input type="text" required class="form-control" name="name">
            </div>
            @error ('name')
            <p class="text-danger">* {{$message}}</p>
            @enderror
            <div class="form-group mt-3">
                <label>Telefon raqami</label>
                <input type="text" required class="form-control" name="phone">
            </div>
            @error ('phone')
            <p class="text-danger">* {{$message}}</p>
            @enderror
            <div class="form-group mt-3">
                <label>Parol</label>
                <input type="text" required class="form-control" name="password">
            </div>
            @error ('password')
            <p class="text-danger">* {{$message}}</p>
            @enderror
            <div class="form-group mt-3">
                <label>Parolni takrorlang</label>
                <input type="text" required class="form-control" name="password_confirmation">
            </div>
            @error ('password_confirmation')
            <p class="text-danger">* {{$message}}</p>
            @enderror
            <div class="form-group mt-3">
                <label>Lavozimi</label>
                <input type="text" required class="form-control" name="position">
            </div>
            @error ('position')
            <p class="text-danger">* {{$message}}</p>
            @enderror
            <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>
        {{--end form--}}
    </div>
</div>
@stop
