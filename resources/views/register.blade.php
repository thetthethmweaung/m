@extends('layout')
@section('content')
<form action="{{route('mmCn.store')}}" method="Post" style="padding-top: 50px;color:black">
  @csrf
<div class="container">
    <h1 class="text-center mb-5 mt-5">Register Form</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text "><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Name">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="NRC">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Region">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-flag"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Nationality">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="City">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Phone Number">
                </div>
                <div class="form-group row">
                    <label for="nrc" class="col-md-4">Channel</label>
                    <select name="cars" class="custom-select col-md-6">
                        <option selected>Facebook</option>
                        <option value="volvo">Radio</option>
                        <option value="fiat">Supervisor</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Supervisor">
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form action="">
				<div class="form-group row">
                    <label for="name" class="col-md-2">Gender</label>
                    <div class="custom-control custom-radio custom-control-inline col-md-6">
                        
                        <i class="fa fa-male" style="font-size: 24px"></i><input type="radio" class="mr-2"">
                        <i class="fa fa-female" style="font-size: 24px"></i><input type="radio" class="ml-2 mr-2">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Person Type">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Person Status">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Job Description Career">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Education">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-book-reader"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Education / Year">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-grade"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Major / Grade">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="University / School">
                </div>
            </form>
        </div>
    </div>
    <button class="btn btn-info d-flex align-self-center">Submit</button>
</div>
</form>
<script type="text/javascript" src="../assets/script/bootstrap.min.js"></script>
@endsection
