@extends('layout')
@section('content')

                               
                                <form class="forms-sample" method="post" action="{{ URL:: to('/save_farmland') }}" enctype="multipart/form-data" >
                                    {{csrf_field()}}
                                    
                                <div class="form-row">

                                    <div class="form-group col-md-12" style="Background: #5F8094;">
                                     <font color="white"> FARM LAND DESCRIPTION </font>
                                    </div>
                                    
                                        <div class="form-group col-md-12">
                                                <label for="student_id">Client Reference/Control No.</label>
                                                <select name="student_id" id="student_id" class="form-control">
                                                @foreach ($students as $student)
                                                <option value="{{ $student->student_id }}">{{ $student->student_controlnum }}</option>
                                                @endforeach
                                                </select>
                                        </div>
                                        <br></br>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Location (Barangay):</label>
                                            <input type="text" class="form-control p-input" name="brgy" aria-describedby="emailHelp" placeholder="Enter location of barangay">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Location (Municipality):</label>
                                            <input type="text" class="form-control p-input" name="mun" aria-describedby="emailHelp" placeholder="Enter location of municipality">
                                        </div>

                                        <div class="form-group col-md-1">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Registered Owner?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="regisowner" value="Yes" checked>
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="regisowner" value="No">
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="exampleInputEmail1">Ownership Document no:</label>
                                            <input type="text" class="form-control p-input" name="ownerdocno" aria-describedby="emailHelp" placeholder="Enter Document No.">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Tenant?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="tenant">
                                                <label class="form-label">
                                                Name of Land owner:<input type="text" class="form-control p-input" name="tenant" aria-describedby="emailHelp" placeholder="Enter name of Land owner">
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="tenant" value="No"checked>
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
                                                <input class="form-input" type="radio" name="lessee">
                                                <label class="form-label">
                                                Name of Land owner:<input type="text" class="form-control p-input" name="lessee" aria-describedby="emailHelp" placeholder="Enter name of Land owner">
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="lessee" value="No"checked>
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
                                                <input class="form-input" type="radio" name="other">
                                                <label class="form-label">
                                                Name of Land owner:<input type="text" class="form-control p-input" name="other" aria-describedby="emailHelp" placeholder="Enter name of Land owner">
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="other" value="No"checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Farm Type:</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="farm_type" value="Irrigated" checked>
                                                <label class="form-label">
                                                    Irrigated
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="farm_type" value="Rainfed upland">
                                                <label class="form-label">
                                                    Rainfed upland
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="farm_type" value="Rainfed lowland">
                                                <label class="form-label">
                                                    Rainfed lowland
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Organic Practitioner?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="orgaprac" value="Yes" checked>
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="orgaprac" value="No">
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
                                                    <th>TOTAL FARM AREA(has.)</th>
                                                
                                                
                                                </tr>
                                                </thead>
                                                <tbody>
                                            
                                                <tr class="tr-light">
                                                    <td> <input type="text" class="form-control p-input" name="rice_area" aria-describedby="emailHelp" ></td>
                                                    <td> <input type="text" class="form-control p-input" name="corn_area" aria-describedby="emailHelp" ></td>
                                                    <td> <input type="text" class="form-control p-input" name="vegetable_area" aria-describedby="emailHelp" ></td>
                                                    <td> <input type="text" class="form-control p-input" name="fruit_area" aria-describedby="emailHelp" ></td>
                                                    <td> <input type="text" class="form-control p-input" name="industrialcrop_area" aria-describedby="emailHelp" ></td>
                                                    <td> <input type="text" class="form-control p-input" name="poultry_area" aria-describedby="emailHelp" ></td>
                                                    <td> <input type="text" class="form-control p-input" name="agrifishery_area" aria-describedby="emailHelp" ></td>
                                                    <td> <input type="text" class="form-control p-input" name="total_area" aria-describedby="emailHelp" ></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>
                                                
                                                    </td>
                                                </tr>
                                                

                                                </tbody>
                                            </table>
                                        </div>
                
                                </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                            </form>