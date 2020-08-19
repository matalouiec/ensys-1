@extends('layout')
@section('content')



<div class="content-wrapper">
        <h1 class="page-title">Group by Address</h1>
        <div class="row">
            <div class="col-18 col-lg-10 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                        `           <div class="form-row">
                                         <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Barangay</label>
                                                <input list="barangay" class="form-control p-input" name="student_addressbrgy" placeholder="Enter Barangay">
                                                    <datalist id="barangay">
                                                    @foreach ($addressb as $addb)
                                                        <option value="{{ $addb }}">{{ $addb }}</option>
                                                    @endforeach
                                                    </datalist>
                                                </input>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Municipality/City</label>
                                                <input list="municipality" class="form-control" name="student_addressmun" placeholder="Enter Municipality">
                                                    <datalist id="municipality">
                                                   @foreach ($address as $add)
                                                        <option value="{{ $add }}">{{ $add }}</option>
                                                   @endforeach
                                                   </datalist>
                                                 </input>  
                                            </div>                    
                                            <table class="table table-bordered" style="width:50%;">
                                                <thead class="bg-success">
                                                    <tr>
                                                
                                                        <th>First Name</th>
                                                        <th>Last Name</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach( $reports as $report)
                                                    <tr>

                                                        <td>{{ $report->student_fname }} </td>
                                                        <td>{{ $report->student_surname }}</td>   
                                                    
                                                    </tr>
                                                    
                                                    @endforeach
                                                </tbody>
                                            </table>
                                    </div>
                        </div>                 
        
                    </div>                         
                </div>
            </div>
        </div>
</div>

























@endsection