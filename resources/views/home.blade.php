@extends('layouts.nav')
@section('content')
<div class="row">
    @foreach ($data as $key )
        <div class="col-sm-6 pb-2">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $key['Id_number'] }}</h5>
              <p class="card-text">{{ $key['Lname'] }},&nbsp;{{ $key['Fname'] }}</p>
            </div>
          </div>
        </div>
    @endforeach

@endsection
