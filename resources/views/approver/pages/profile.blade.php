@include('approver.head')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages /</span> My Profile</h4>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        
        <form action="{{route('profileApprover.update')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" class="form-control" name="fullname" id="fullname" value="{{ Auth::user()->fullname }}">
            </div>
            <div class="form-group mt-2">
                <label for="picture">Profile Picture URL</label>
                <input type="text" class="form-control" name="picture" id="picture" value="{{ Auth::user()->profile_picture_url }}">
                <img src="{{ Auth::user()->profile_picture_url }}" alt="Image" class="mt-1" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;" />
            </div>
            <div class="form-group mt-2">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{ Auth::user()->username }}">
            </div>
            <div class=" form-group mt-2">
                <label for="password">New Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
            </div>
            <div class="form-group mt-2">
                <label for="role">Role</label>
                <input type="text" class="form-control" name="role" id="role" value="approver" disabled>
            </div>
            <div class="form-group d-flex justify-content-end mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        @include('approver.foot')