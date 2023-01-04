@extends('layouts.base2')

@section('content')
<section class="overflow-hidden">
    <style>
    .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
    }
    </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <form novalidate method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(260, 81%, 95%)">
                        Dhofar University<br />
                        <span style="color: hsl(260, 81%, 75%)">Student Accommodation Attendance System</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(260, 81%, 85%)">

                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">


                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form>
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col text-center mb-2">
                                        <h2>Login
                                        </h2>
                                    </div>

                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example3" class="form-control" name="username" />
                                    <label class="form-label" for="form3Example3">User Name</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4" class="form-control" name="password" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>

                                <!-- Checkbox -->


                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Login
                                </button>

                                <!-- Register buttons -->

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>
<!-- Section: Design Block -->
@endsection