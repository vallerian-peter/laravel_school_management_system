

@include('include.header')
@include('notification')


    <div class="login-page">
        <div class="container">
            <div class="row border" style="transform: translateY(8rem);">
                {{-- <div class="col-md-1"></div> --}}
                <div class="col-md-12">
                    <div class="card p-3 box-shadow">
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <dotlottie-player src="https://lottie.host/828e7eb4-7047-41be-b097-9721097b3692/uAF1nIDAan.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player> --}}
                            </div>
                            <div class="col-md-6 border-left">
                                <div class="form">
                                    <div class="h3 fw-bold text-center py-3">LECTURE LOGIN</div>
                                    <form action="loginLecture" class="px-3" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ @old('email') }}" placeholder="user@example.com">
                                            <span class="text-danger"> @error('email') {{ $message }} @enderror  </span>
                                            {{-- @error('title') {{ $message }} @enderror  --}}
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" value="{{ @old('password') }}" placeholder="password">
                                            <div class="my-2 form-checkbox w-100">
                                                <label for="show-password" class="form-check-label text-muted">
                                                    <input type="checkbox" class="form-check-control" id="show-password"> <span id="label-word">Show Password</span>
                                                </label>
                                            </div>
                                            <span class="text-danger"> @error('password') {{ $message }} @enderror </span>
                                        </div>
                                        <div class="w-100 text-center pb-3 pt-3">
                                            <button type="submit" class="btn btn-dark w-50">Login</button>
                                        </div>
                                        <div class="links text-center pb-3">
                                            <div> Dont have an Account? <a href="lectureRegister" style="text-decoration-line: underline;">SignUp Here</a> </div>
                                            <div> <a href="LectureforgotPassword" style="text-decoration-line: underline;">forgot Password?</a> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                        <div class="row px-3 pt-3">
                            <a href="select" class="text-decoration-underline"> <i class="bi bi-arrow-left"></i> Back</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-1"></div> --}}
            </div>                          
        </div>
    </div>

@include('include.footer')