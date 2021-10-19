@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1 class="h1">Certificate</h1>
        </div>
        <div class="jumbotron border">
            <a href="{{ url('generate/barangay_certificate') }}" target="_blank" class="btn btn-primary btn-lg">
                Generate Certificate
            </a>
        </div>
    </div>
@endsection
