
@extends('layouts.app')
@section('content')
<div class="table-responsive">

    <!--Table-->
    <table class="table">

      <!--Table head-->
      <thead>
        @if( Auth::user()->role==='admin' )
        <a  href="{{url('/admin/employees/create')}}">  <button type="button" style="margin:0 40%"class="btn btn-primary mb-3">Create new Employee</button></a>
       @endif
        <tr>
          <th>#</th>
          <th class="th-lg">Employee Name</th>
          <th class="th-lg">Employee Email</th>
          <th class="th-lg">Employee phone</th>
          @if( Auth::user()->role==='admin' )
          <th class="th-lg">Action</th>
          @endif
        </tr>
      </thead>
      <!--Table head-->
@php
  $i=1;
@endphp
      <!--Table body-->
      <tbody>
          @foreach($employees as $employee)
        <tr>
            <td>{{$i++}}</td>
          <td>{{$employee->employee_name}}</td>
          <td>{{$employee->employee_email}}</td>
          <td>{{$employee->employee_phone}}</td>
          @if(Auth::user()->role==='superadmin' )
          <td><a  href="{{url('editemployee/'.$employee->id)}}"><button class="btn btn-success">Edit</button></a>
            <a  href="{{url('deleteemployee/'.$employee->id)}}"> <button class="btn btn-danger">Delete</button></a>
            @endif
        </td>

        </tr>
        @endforeach

      </tbody>
      <!--Table body-->

    </table>
    <!--Table-->

  </div>
  @endsection
