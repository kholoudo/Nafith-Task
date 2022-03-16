@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" method="post" action="{{url('updateemployee/'.$employee->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="controls ">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name"> Employee Name</label> <input id="form_name" type="text" name="employee_name"   value="{{$employee->employee_name}}" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name"> Employee Email</label> <input id="form_name" type="text" name="employee_email"   value="{{$employee->employee_email}}" class="form-control" placeholder="Please enter your Email *" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name"> Employee phone</label> <input id="form_name" type="text" name="employee_phone"   value="{{$employee->employee_phone}}" class="form-control" placeholder="Please enter your Phone *" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                </div>
        </div>
    </div>
                                <div class="col-md-12 mt-3"> <input style="width: 10em" type="submit" class="btn btn-success btn-send pt-2 mt-2 btn-block " value="submit"> </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
@endsection
