@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Register Form</h1>
    <br>
    <!-- Nav pills -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#personal">Personal (require)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Person Type / Health</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Education</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="personal" class="container tab-pane active"><br>
            <div class="row">
                <div class="col-md-6">
                    <form action="">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user pr-1 pl-1"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Name ">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="NRC">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="date" class="form-control col-md-8">
                        </div>

                        <div class="input-group mb-4">
                            <!-- Default inline 1-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="male" name="gender">
                                <label class="custom-control-label" for="male"><i class="fa fa-male" style="font-size: 24px"></i></label>
                            </div>

                            <!-- Default inline 2-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="female" name="gender">
                                <label class="custom-control-label" for="female"><i class="fa fa-female" style="font-size: 24px"></i></label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                            </div>
                            <textarea name="" id="" rows="3" class="col-md-8 form-control" placeholder="Address"></textarea>
                        </div>


                    </form>
                </div>
                <div class="col-md-6">
                    <form action="">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Father Name">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Mother Name">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Nationality">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone pl-1 pr-1"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Phone Number">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-praying-hands"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Religion">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Email">
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <div class="row">
                <div class="col-md-6">
                    <form action="">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Person-status">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Person-type">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Job Career">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-heartbeat"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Diseases">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-hamburger"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Avoid Food">
                        </div>

                    </form>
                </div>
                <div class="col-md-6">
                    <form action="">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Supervisor">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Channel">
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div id="menu2" class="container tab-pane fade"><br>
            <div class="row">
                <div class="col-md-6">
                    <form action="">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Education">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-university"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="University / School">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Major / Grade">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-book-reader"></i></span>
                            </div>
                            <input type="text" class="col-md-8 form-control" placeholder="Education Year">
                        </div>
                    </form>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col text-center">
            <button class="btn btn-info col-4">Register</button>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $.dobPicker({
            daySelector: '#dobday', /* Required */
            monthSelector: '#dobmonth', /* Required */
            yearSelector: '#dobyear', /* Required */
            dayDefault: 'Day', /* Optional */
            monthDefault: 'Month', /* Optional */
            yearDefault: 'Year', /* Optional */
            minimumAge: 12, /* Optional */
            maximumAge: 80 /* Optional */
        });
    });
</script>
<script src="assets/script/jquery.js"></script>
<script src="assets/script/bootstrap.min.js"></script>
<script src="assets/Minimalist-jQuery-Plugin-For-Birthday-Selector-DOB-Picker/dobpicker.js"></script>
</body>
</html>