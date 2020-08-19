@extends('layout')
@section('content')


    <!-- partial -->
    <div class="content-wrapper">
        <h1 class="page-title">Teacher Add</h1>
        <div class="row">
            <div class="col-12 col-lg-6 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <p class="alert-success">
                            <?php
                            $exception=Session::get('exception');
                            if($exception){
                                echo $exception;
                                Session :: put('exception',null);
                            }


                            ?>

                        </p>


                        <form class="forms-sample" method="post" action="{{ URL:: to('/save_teacher') }}" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Teacher Name</label>
                                <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" placeholder="Enter name">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Teacher Email</label>
                                <input type="email" class="form-control p-input" name="teacher_email" aria-describedby="emailHelp" placeholder="Enter Email">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control p-input" name="teacher_password" aria-describedby="emailHelp" placeholder="Enter Password">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Teacher Phone Number</label>
                                <input type="text" class="form-control p-input" name="teacher_phone" aria-describedby="emailHelp" placeholder="Enter Phone Number">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Teacher Address</label>
                                <input type="text" class="form-control p-input" name="teacher_address" aria-describedby="emailHelp" placeholder="Enter Address">

                            </div>


                            <div class="form-group">
                                <label>Upload Your Image</label>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                        <input type="file" class="form-control-file" name="teacher_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Teacher Department</label>
                                <select type="text" class="form-control p-input" name="teacher_department">
                                    <option value="1">SWE</option>
                                    <option value="2">CSE</option>
                                    <option value="3">BBA</option>
                                    <option value="4">EEE</option>
                                    <option value="5">ENG</option>
                                </select>

                            </div>

                            <button type="submit" class="btn btn-success">Add Teacher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection