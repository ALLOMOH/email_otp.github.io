@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 border border-primary rounded ">
                <h3 class="mt-5 text-center text-warning">Email Verification</h3>

                @if (session('activated'))
                    <div class="alert alert-success" role="alert">
                        {{ session('activated') }}
                    </div>
                @endif

                @if (session('incorrect'))
                    <div class="alert alert-success" role="alert">
                        {{ session('incorrect') }}
                    </div>
                @endif
                
                <form class=" form form-group d-flex flex-column row-gap-1000" action="{{ route('verifyOtp') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="token">Enter OTP</label>
                        <input class="form-control my-3 mx-auto p-3"  id="token" type="number" name="token" placeholder="Enter token">
                    </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
