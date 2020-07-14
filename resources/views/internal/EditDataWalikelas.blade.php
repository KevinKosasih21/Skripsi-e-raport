@extends('template.internal_master')
@section('title', 'Dashboard')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Walikelas</h1>
          </div>
        </div>
      </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="/auth/internal/update/{{$walikelas->id}}">
     {{csrf_field()}}
      {{method_field('PUT')}}
      
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 col-12">
            <input type="hidden" name="id" value="{{$walikelas->id}}"">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomer Telpon</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>           
                    <td><input type="text" name="nama"  value="{{$walikelas->name}}"></td>
                    <td><input type="email" name="email"  value="{{$walikelas->email}}"></td>
                    <td><input type="text" name="phone"  value="{{$walikelas->phone}}"></td>
                  </tr>
                </tbody>
              </table>
              <br>
              <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
              </div>
            </div>
            <div class="col-md-4"></div>
          </div>
        </form>
@endsection