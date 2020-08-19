@extends('layout')
@section('content')


    <!-- partial -->
    <div class="content-wrapper">
        <h1 class="page-title">Basic elements</h1>
        <div class="row">
            <div class="col-18 col-lg-10 grid-margin">
                <div class="card">
                    <div class="card-body">



                        <form class="forms-sample" method="post" action="{{ URL:: to('/update_student',$student_description_profile->student_id) }}"  >
                            {{csrf_field()}}
                            <div class="form-row">

                                <div class="form-group col-md-12" style="Background: #575A55;">
                                <font color="white"> PART I: PERSONAL INFORMATION </font>
                                </div>
                                    <div class="form-group col-md-8">
                                            <label for="exampleInputEmail1">Reference/Control Number</label>
                                            <input type="text" class="form-control p-input" name="student_controlnum" aria-describedby="emailHelp" placeholder="Enter Reference/Control Number" value="{{($student_description_profile->student_controlnum)}}">

                                    </div>
                                    <div class="form-group col-md-3">
                                            <label>Upload Your Image</label>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                                    <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                                    <small id="fileHelp" class="form-text text-muted">Photo taken within 6 months.</small>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control p-input" name="student_fname" aria-describedby="emailHelp" placeholder="Enter first name"  value="{{($student_description_profile->student_fname)}}">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Surname</label>
                                        <input type="text" class="form-control p-input" name="student_surname" aria-describedby="emailHelp" placeholder="Enter surname"  value="{{($student_description_profile->student_surname)}}">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Middle Name</label>
                                        <input type="text" class="form-control p-input" name="student_midname" aria-describedby="emailHelp" placeholder="Enter Middle Name"  value="{{($student_description_profile->student_midname)}}">

                                    </div>

                                    <div class="form-group col-md-2">
                                        <fieldset>
                                        
                                            <label for="exampleInputEmail1">Sex</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_sex" value="Male" checked>
                                                <label class="form-label">
                                                    Male
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_sex" value="Female">
                                                <label class="form-label">
                                                    Female
                                                </label>
                                            </div>
                                        
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Civil Status</label>
                                            <select name="student_civilstatus" class="form-control"> 
                                                <option value="">Choose</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widowed">Widowed</option>
                                                <option value="Separated">Separated</option>
                                            </select>              
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Name of Spouse</label>
                                            <input type="text" class="form-control p-input" name="student_spouse" aria-describedby="emailHelp" placeholder="Enter spouse name" value="{{($student_description_profile->student_spouse)}}" disabled>

                                    </div>

                                    <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Religion</label>
                                            <input type="text" class="form-control p-input" name="student_religion" aria-describedby="emailHelp" placeholder="Enter Religion" value="{{($student_description_profile->student_religion)}}">

                                    </div>

                                    <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Date of Birth</label>
                                            <input type="date" class="form-control p-input" name="student_birthdate" aria-describedby="emailHelp" placeholder="Enter Birthdate" value="{{($student_description_profile->student_birthdate)}}">

                                    </div>

                                    <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Place of Birth</label>
                                            <input type="text" class="form-control p-input" name="student_birthplace" aria-describedby="emailHelp" placeholder="Enter Birth Place" value="{{($student_description_profile->student_birthplace)}}">

                                    </div>

                                    <div class="form-group col-md-12"><h5> ADDRESS </h5></div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">House/Lot/BLDG. No.</label>
                                                <input type="text" class="form-control p-input" name="student_addresshouse" aria-describedby="emailHelp" placeholder="Enter House/Lot/BLDG. No." value="{{($student_description_profile->student_addresshouse)}}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Street/Sitio/Subdv.</label>
                                                <input type="text" class="form-control p-input" name="student_addressstreet" aria-describedby="emailHelp" placeholder="Enter Street/Sitio/Subdv." value="{{($student_description_profile->student_addressstreet)}}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Barangay</label>
                                                <input type="text" class="form-control p-input" name="student_addressbrgy" aria-describedby="emailHelp" placeholder="Enter Barangay"  value="{{($student_description_profile->student_addressbrgy)}}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Municipality/City</label>
                                                <input type="text" class="form-control p-input" name="student_addressmun" aria-describedby="emailHelp" placeholder="Enter Municipality/City" value="{{($student_description_profile->student_addressmun)}}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Province</label>
                                                <input type="text" class="form-control p-input" name="student_addressprov" aria-describedby="emailHelp" placeholder="Enter Province" value="{{($student_description_profile->student_addressprov)}}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Region</label>
                                                <input type="text" class="form-control p-input" name="student_addressreg" aria-describedby="emailHelp" placeholder="Enter Region" value="{{($student_description_profile->student_addressreg)}}">
                                            </div>

                                            <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Contact Number</label>
                                            <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" placeholder="Enter Phone Number" value="{{($student_description_profile->student_phone)}}">

                                        </div>

                                        <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Highest Formal Education</label>
                                            <select name="student_hifored" class="form-control">
                                                <option value=""></option>
                                                <option value="None">None</option>
                                                <option value="Elementary">Elementary</option>
                                                <option value="High School">High School</option>
                                                <option value="Vocational">Vocational</option>
                                                <option value="College">College</option>
                                                <option value="Post Graduate">Post Graduate</option>
                                            </select>              
                                        </div>

                                    
                                        <div class="form-group col-md-2">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Person with Disability (PWD)</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_pwd" value="Yes">
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_pwd" value="No" checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Mother's Maiden Name</label>
                                            <input type="text" class="form-control p-input" name="student_mothersname" aria-describedby="emailHelp" placeholder="Mother's Maiden Name" value="{{($student_description_profile->student_mothersname)}}">

                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Name of Household Head</label>
                                            <input type="text" class="form-control p-input" name="student_household" aria-describedby="emailHelp" placeholder="Name of household head" value="{{($student_description_profile->student_household)}}">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Relationship</label>
                                            <input type="text" class="form-control p-input" name="student_houserela" aria-describedby="emailHelp" placeholder="Relationship to household head" value="{{($student_description_profile->student_houserela)}}">
                                        </div>

                                        <div class="form-group col-md-2   ">
                                            <label for="exampleInputEmail1">No. of living household members</label>
                                            <input type="text" class="form-control p-input" name="student_housememno" aria-describedby="emailHelp" placeholder="No. of living household members" value="{{($student_description_profile->student_housememno)}}">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="exampleInputEmail1">No. of male household members</label>
                                            <input type="text" class="form-control p-input" name="student_housemaleno" aria-describedby="emailHelp" placeholder="No. of male" value="{{($student_description_profile->student_housemaleno)}}">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="exampleInputEmail1">No. of female household members</label>
                                            <input type="text" class="form-control p-input" name="student_housefemaleno" aria-describedby="emailHelp" placeholder="No. of female" value="{{($student_description_profile->student_housefemaleno)}}">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">4p's Beneficiary?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_fourps" value="Yes" checked>
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_fourps" value="No">
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Member of any Indigenous Group?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_indige" value="Yes">
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_indige" value="No" checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">With Government I.D.?</label>
                                            <input type="text" class="form-control p-input" name="student_govid" aria-describedby="emailHelp" placeholder="Please specipy ID no." value="{{($student_description_profile->student_govid)}}">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Member of any Farmers Association/Coopertive?</label>
                                            <input type="text" class="form-control p-input" name="student_coopmem" aria-describedby="emailHelp" placeholder="Please specipy association name" value="{{($student_description_profile->student_coopmem)}}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">PERSON TO NOTIFY IN CASE OF EMERGENCY</label>
                                            <input type="text" class="form-control p-input" name="student_incaseofemer" aria-describedby="emailHelp" placeholder="Name of person to notify in case of emergency" value="{{($student_description_profile->student_incaseofemer)}}">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">CONTACT NUMBER</label>
                                            <input type="text" class="form-control p-input" name="student_incaseno" aria-describedby="emailHelp" placeholder="Enter contact number" value="{{($student_description_profile->student_incaseno)}}">
                                        </div>
                                    
                                    <div class="form-group col-md-12" style="Background: #575A55;">
                                     <font color="white"> PART II: FARM PROFILE </font>
                                    </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>   
                                            <label for="exampleInputEmail1">Main Livelihood</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_mainliveli" value="Farmer" checked>
                                                <label class="form-label">
                                                    Farmer
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_mainliveli" value="Farmworker/Laborer">
                                                <label class="form-label">
                                                    Farmworker/Laborer
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_mainliveli" value="Fisherfolk">
                                                <label class="form-label">
                                                    Fisherfolk
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Type of Farming Activity</label>
                                            <input type="text" class="form-control p-input" name="student_farmerstype" aria-describedby="emailHelp" placeholder="Enter type of Farming Activity" value="{{($student_description_profile->student_farmerstype)}}">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Kind of Work</label>
                                            <input type="text" class="form-control p-input" name="student_farmworkerskind" aria-describedby="emailHelp" placeholder="Enter kind of work" value="{{($student_description_profile->student_farmworkerskind)}}">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Type of Fishing Activity</label>
                                            <input type="text" class="form-control p-input" name="student_fisherfolktype" aria-describedby="emailHelp" placeholder="Enter type of Fishing Activity" value="{{($student_description_profile->student_fisherfolktype)}}">
                                        </div>
                                    
                                        <br>Gross Annual Income Last Year</br>	
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Farming:</label>
                                           <input type="text" class="form-control p-input" name="student_annualgrossfarm" aria-describedby="emailHelp" placeholder="Enter Gross Annual Income Last Year for Farming" value="{{($student_description_profile->student_annualgrossfarm)}}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Non-Farming:</label>
                                            <input type="text" class="form-control p-input" name="student_annualgrossnonfarm" aria-describedby="emailHelp" placeholder="Enter Gross Annual Income Last Year for Non-farming" value="{{($student_description_profile->student_annualgrossnonfarm)}}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Agrarian reform beneficiary?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_agrarianbene" value="Yes" >
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_agrarianbene" value="No" checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-12" style="Background: #5F8094;">
                                     <font color="white"> FARM LAND DESCRIPTION </font>
                                    </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">No. of farm parcels:</label>
                                            <input type="text" class="form-control p-input" name="student_farmparcels" aria-describedby="emailHelp" value="{{($student_description_profile->student_farmparcels)}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Location (Barangay):</label>
                                            <input type="text" class="form-control p-input" name="student_farmlocationbrgy" aria-describedby="emailHelp" value="{{($student_description_profile->student_farmlocationbrgy)}}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Location (Municipality):</label>
                                            <input type="text" class="form-control p-input" name="student_farmlocationmun" aria-describedby="emailHelp" value="{{($student_description_profile->student_farmlocationmun)}}"">
                                        </div>

                                        <div class="form-group col-md-1">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Registered Owner?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_regowner" value="Yes" checked>
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_regowner" value="No">
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="exampleInputEmail1">Ownership Document no:</label>
                                            <input type="text" class="form-control p-input" name="student_ownerdocno" aria-describedby="emailHelp" value="{{($student_description_profile->student_ownerdocno)}}">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Tenant?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_tenantname">
                                                <label class="form-label">
                                                Name of Land owner:<input type="text" class="form-control p-input" name="student_tenantname" aria-describedby="emailHelp" value="{{($student_description_profile->student_tenantname)}}">
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_tenantname" value="No"checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Lessee?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_lessee">
                                                <label class="form-label">
                                                Name of Land owner:<input type="text" class="form-control p-input" name="student_lessee" aria-describedby="emailHelp" value="{{($student_description_profile->student_lessee)}}">
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_lessee" value="No"checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Other?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_regownerother">
                                                <label class="form-label">
                                                Name of Land owner:<input type="text" class="form-control p-input" name="student_regownerother" aria-describedby="emailHelp" value="{{($student_description_profile->student_regownerother)}}">
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_regownerother" value="No"checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Farm Type:</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_farmtype" value="Irrigated" checked>
                                                <label class="form-label">
                                                    Irrigated
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_farmtype" value="Rainfed upland">
                                                <label class="form-label">
                                                    Rainfed upland
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_farmtype" value="Rainfed lowland">
                                                <label class="form-label">
                                                    Rainfed lowland
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-8">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Organic Practitioner?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="student_organicprac" value="Yes" checked>
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="student_organicprac" value="No">
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                       
                    <div class="col-12">
                        <table class="table table-striped" style="width:100%; Background: #D4F7AE;">
                            <thead>
                            <tr>
                           
                                <th>Rice Area(has.)</th>
                                <th>Corn Area(has.)</th>
                                <th>Vegetable Area(has.)</th>
                                <th>Fruit Area(has.)</th>
                                <th>Industrial Crop Area(has.)</th>
                                <th>Poultry Area(has.)</th>
                                <th>Agri-Fishery Area(has.)</th>
                                <th> <font color="red">TOTAL FARM AREA(has.)</font></th>
                               
                             
                            </tr>
                            </thead>
                            <tbody>
                           
                            <tr class="tr-light">
                                <td> <input type="text" class="form-control p-input" name="student_ricearea" aria-describedby="emailHelp" value="{{($student_description_profile->student_ricearea)}}" ></td>
                                <td> <input type="text" class="form-control p-input" name="student_cornarea" aria-describedby="emailHelp" value="{{($student_description_profile->student_cornarea)}}"></td>
                                <td> <input type="text" class="form-control p-input" name="student_vegetablearea" aria-describedby="emailHelp" value="{{($student_description_profile->student_vegetablearea)}}" ></td>
                                <td> <input type="text" class="form-control p-input" name="student_fruitarea" aria-describedby="emailHelp" value="{{($student_description_profile->student_fruitarea)}}"></td>
                                <td> <input type="text" class="form-control p-input" name="student_industrialcroparea" aria-describedby="emailHelp" value="{{($student_description_profile->student_industrialcroparea)}}"></td>
                                <td> <input type="text" class="form-control p-input" name="student_poultryarea" aria-describedby="emailHelp" value="{{($student_description_profile->student_poultryarea)}}"></td>
                                <td> <input type="text" class="form-control p-input" name="student_agrifisheryarea" aria-describedby="emailHelp" value="{{($student_description_profile->student_agrifisheryarea)}}" ></td>
                                <td> <input type="text" class="form-control p-input" name="student_farmarea" aria-describedby="emailHelp" value="{{($student_description_profile->student_farmarea)}}" ></td>
                                
                            </tr>
                            <tr>
                                <td>
                            
                                </td>
                            </tr>
                              

                            </tbody>
                        </table>
                    </div>                   

                            </div>

                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection