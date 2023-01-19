@include('admin.head')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-8 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                @foreach($users as $user)
                @endforeach
                <p class="card-text">1. Click the button on the dashboard to obtain the user/login substitute</p>
                <p class="card-text">2. Select a vehicle</p>
                <p class="card-text">3. Select a driver</p>
                <p class="card-text">4. Select an approver</p>
                <p class="card-text">5. Submit on the monitoring page</p>
                <p class="card-text">6. View history</p>
                <a href="{{ route('dashboard.choose', $user->id) }}" class="btn btn-primary">Choose</a>
              </div>
              </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('admin.foot')