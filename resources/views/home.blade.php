@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="card-body">
                <!--@include('layouts.flash')-->
                <x-alert />
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Загрузка аватара</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        <input type="submit" value="Upload" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
