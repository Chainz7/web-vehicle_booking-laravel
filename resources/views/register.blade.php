<form action="{{ route('register.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" name="fullname" id="fullname" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="role_id">Role</label>
        <select name="role_id" id="role_id" class="form-control" required>
            <option value="">Select Role</option>
            @foreach($roles as $role)
            <option value="{{ $role->id }}">{{ $role->role }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="profile_picture_url">Profile Picture</label>
        <input type="text" name="profile_picture_url" id="profile_picture_url" class="form-control" required>
    </div>
    <div class="form-group">
        <input type="submit" value="Register" class="btn btn-primary">
    </div>
</form>