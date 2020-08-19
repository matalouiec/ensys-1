@extends('student_layout')
@section('content')


    <!-- partial -->
    <div class="content-wrapper">
        <h1 class="page-title">Student Profile Setting </h1>
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
                        
                        <form class="forms-sample" method="post" action="{{ URL:: to('/student_won_update') }}"  >
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Name</label>
                                <input type="text" class="form-control p-input" name="student_fname" aria-describedby="emailHelp"
                                     value="{{$student_description_profile->student_fname}}"  >

                            </div><div class="form-group">
                                <label for="exampleInputEmail1">Student Roll</label>
                                <input type="text" class="form-control p-input" name="student_surname" aria-describedby="emailHelp"
                                     value="{{$student_description_profile->student_surname}}"  >

                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control p-input" name="student_password" aria-describedby="emailHelp"
                                       value="{{$student_description_profile->student_password}}" >

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Phone Number</label>
                                <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp"
                                       value="{{$student_description_profile->student_phone}}" >

                            </div>



                            <button type="submit" class="btn btn-success">Update your Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection