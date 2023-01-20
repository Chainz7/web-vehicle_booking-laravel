@include('admin.headAuth')

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-3">
                        <a href="{{ route('register.index') }}" class="app-brand-link gap-2">
                            <span class="app-brand-text demo text-body fw-bolder">SIGN UP</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <form id="formAuthentication" class="mb-3" action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Fullname</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your fullname" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" class="form-control" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="role_id" class="form-label">Role</label>
                            <select name="role_id" id="role_id" class="form-control" required>
                                @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="profile_picture_url" class="form-label">Profile Picture URL</label>
                            <input type="text" class="form-control" id="profile_picture_url" name="profile_picture_url" placeholder="Enter your profile picture url" required>
                        </div>
                        <div class="mb-3 mt-5">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign Up</button>
                        </div>
                    </form>
                    <p class="text-center">
                        <span>already have an account?</span>
                        <a href="{{ route('login.index') }}">
                            <span>Sign in now</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>
@include('admin.foot')