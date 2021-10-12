@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card mt-2">
                <div class="text-center">
                    <img src="{{url('/images/icons/barangay_community.png')}}" width="150"  style="margin-top: 15px" alt="...">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="card-title"><b>POPULATION</b></h3>
                        <h1 class="display-text">1,200</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mt-2">
                <div class="text-center">
                    <img src="{{url('/images/icons/barangay_blotter.png')}}" width="150"  style="margin-top: 15px" alt="...">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="card-title"><b>BLOTTER</b></h3>
                        <h1 class="display-text">10</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mt-2">
                <div class="text-center">
                    <img src="{{url('/images/icons/barangay_household.png')}}" width="150"  style="margin-top: 15px" alt="...">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="card-title"><b>HOUSEHOLD</b></h3>
                        <h1 class="display-text">312</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
