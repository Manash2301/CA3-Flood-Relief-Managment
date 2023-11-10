@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Found Person Info</div>
  <div class="card-body">
      
      <form action="{{ url('Donations') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Paid Dates</label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"></br>
        <label>Number</label></br>
        <input type="text" name="number" id="number" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop