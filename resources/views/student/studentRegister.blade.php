

    
@include('notification')
@include('include.header')

    <div class="register-page">
        <div class="container">
            <div class="row border" style="transform: translateY(0.5rem);">
                <div class="col-md-12">
                    <div class="card p-3 box-shadow">
                        <div class="row">
                            <div class="col-md-5">
                                {{-- image --}}
                            </div>
                            <div class="col-md-7 border-left">
                                <div class="form">
                                    <div class="h3 fw-bold text-center py-3">STUDENT REGISTER</div>
                                    <form action="Registerstudent" class="px-3" method="POST">
                                        @csrf
                                        
                                        <div class="mb-3">
                                            <label for="fullname" class="form-label">Full Name</label>
                                            <input type="fullname" class="form-control" name="fullname" id="fullname" value="{{ @old('fullname') }}" placeholder="Full Name">
                                            <span class="text-danger"> @error('fullname'){{ $message }} @enderror </span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{ @old('email') }}" placeholder="user@example.com">
                                                    <span class="text-danger"> @error('email'){{ $message }} @enderror </span>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="username" id="username" value="{{ @old('username') }}" placeholder="UserName">
                                                    <span class="text-danger"> @error('username'){{ $message }} @enderror </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input type="phone" class="form-control" name="phone" id="phone" value="{{ @old('phone') }}" placeholder="Phone Number">
                                                    <span class="text-danger"> @error('phone'){{ $message }} @enderror </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="birthdate" class="form-label">BirthDate</label>
                                                    <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{ @old('birthdate') }}" placeholder="Birth Date">
                                                    <span class="text-danger"> @error('birthdate'){{ $message }} @enderror </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="gender" class="form-label">Gender</label>
                                                    <select name="gender" id="gender" class="form-control" value="{{ @old('gender') }}">
                                                        <option value="" selected>--choose gender--</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                    <span class="text-danger"> @error('gender'){{ $message }} @enderror </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="reg_no" class="form-label">Registration No.</label>
                                                    <input type="text" class="form-control" name="reg_no" id="reg_no" value="{{ @old('reg_no') }}" placeholder="Registration No.">
                                                    <span class="text-danger"> @error('reg_no'){{ $message }} @enderror </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="Course" class="form-label">Course</label>
                                                    {{-- <input type="text" class="form-control" id="course_id" value="@old('fname')" placeholder="Course"> --}}
                                                    <select name="course_id" id="course" class="form-control">
                                                        <option value="" selected>--select course--</option>
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id}}">{{ $course->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger"> @error('course_id'){{ $message }} @enderror </span>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Password --}}
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" value="{{ @old('password') }}" placeholder="password">
                                            <div class="my-2 form-checkbox w-100">
                                                <label for="show-password" class="form-check-label text-muted">
                                                    <input type="checkbox" class="form-check-control" id="show-password"> <span id="label-word">Show Password</span>
                                                </label>
                                            </div>
                                            <span class="text-danger"> @error('password'){{ $message }} @enderror </span>
                                        </div>
                                        <div class="w-100 text-center pb-3 pt-3">
                                            <button type="submit" class="btn btn-dark w-50">Register</button>
                                        </div>
                                        <div class="links text-center pb-3">
                                            <div> Already Registered? <a href="studentLogin" style="text-decoration-line: underline;">Login Here</a> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>                          
        </div>
    </div>

@include('include.footer')