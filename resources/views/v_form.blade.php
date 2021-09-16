@extends('layout.template')
@section('title', 'form-data')

@section('content')
<h1>Info kalian</h1>

<form action="/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-guru">
                    <label> Nama </label>
                    <input name="nama" class="form-control">
                    <div class="text-danger">
                        @error('nama')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-guru">
                    <label> Total Uang jajan sebulan </label>
                    <input name="uang" class="form-control">
                    <div class="text-danger">
                        @error('uang')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-guru">
                    <div class="rs-select2 js-select-simple select--no-search">
                        <select name="gender">
                            <option disabled="disabled" selected="selected">Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                        <div class="select-dropdown"></div>
                    </div>
                </div>
                <br>
                <div class="form-guru">
                    <label> Umur </label>
                    <input name="umur" class="form-control" type="text">
                    <div class="text-danger">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-guru">
                    <label> Minat dan Bakat </label>
                    <input name="minat" class="form-control" type="text">
                    <div class=" text-danger">
                        @error('minat')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-guru">
                    <button type = 'submit' class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection
