@extends('layouts.nav')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="card">
        <div class="card-body text-style-13">
            <form method="POST" action="{{ url("/save") }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputAddress">Student ID Number</label>
                    <input type="text" class="form-control" name="StudentID">
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Student Family name</label>
                    <input type="text" class="form-control" name="StudentLname">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Student First name</label>
                    <input type="text" class="form-control" name="StudentFname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Student Middle name </label>
                  <input type="text" class="form-control" name="StudentMname" placeholder="[Optional Input]">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Student Birthday</label>
                  <input type="date" class="form-control" name="StudentBirthday" >
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputCity">Student Email </label>
                    <input type="email" class="form-control" name="StudentEmail">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputCity">Student Home Address</label>
                    <input type="text" class="form-control" name="StudentAddress">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">Student Mobile Number</label>
                    <input type="text" class="form-control" name="StudentMNumber">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">Student Course</label>
                    <input type="text" class="form-control" name="StudentCourse">
                  </div>
                </div>

                <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-2 pt-0">Student Gender </legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="Male" id="gridRadios1" value="M" checked>
                          <label class="form-check-label" for="gridRadios1">
                            Male
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="Female" id="gridRadios2" value="F">
                          <label class="form-check-label" for="gridRadios2">
                            Female
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                <button type="submit" class="btn btn-success btn-block">Save</button>
              </form>
        </div>
      </div>
</div>
@endif
@endsection
