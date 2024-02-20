

@include('include.header')
@include('notification')

    <div class="register-page">
        <div class="container pb-5">
            <div class="row border pb-4" style="transform: translateY(2.3rem);">
                <div class="col-md-12">
                    <div class="card p-3 box-shadow">
                        <div class="row">
                            <div class="col-md-5">
                                {{-- image --}}
                            </div>
                            <div class="col-md-7 border-left">
                                <div class="form">
                                    <div class="h3 fw-bold text-center py-3">LECTURE REGISTER</div>
                                    <form action="registerLecture" class="px-3" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="fullname" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="fullname" id="fullname" value="{{ @old('fullname') }}" placeholder="First Name">
                                            <span class="text-danger"> @error('fullname')  @message  @enderror </span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ @old('email') }}" placeholder="user@example.com">
                                            <span class="text-danger"> @error('email') @message @enderror </span>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="username" id="username" value="{{ @old('username') }}" placeholder="UserName">
                                                    <span class="text-danger"> @error('username') @message @enderror </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input type="phone" class="form-control" name="phone" id="phone" value="{{ @old('phone') }}" placeholder="Phone Number">
                                                    <span class="text-danger"> @error('phone') @message @enderror </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="module" class="form-label">Module</label>
                                            {{-- <input type="text" class="form-control" id="course_id" value="@old('fname')" placeholder="Course"> --}}
                                            <select name="module_id" id="module" class="form-control" value="{{ @old('module_id') }}">
                                                <option value="" selected>--select module--</option>
                                                @foreach ($modules as $module)
                                                    <option value="{{ $module->id}}">{{ $module->name }} </option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger"> @error('module_id') @message @enderror </span>
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
                                            <span class="text-danger"> @error('password') @message @enderror </span>
                                        </div>
                                        <div class="w-100 text-center pb-3 pt-3">
                                            <button type="submit" class="btn btn-dark w-50">Register</button>
                                        </div>
                                        <div class="links text-center pb-3">
                                            <div> Already Registered? <a href="lectureLogin" style="text-decoration-line: underline;">Login Here</a> </div>
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