@include('approver.head')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">

    <!-- Content wrapper -->
    <div class="content-wrapper">
      <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
          <div class="col-lg-12 mb-4 order-0">
            <div class="card">
              <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                  <div class="card-body">
                    <h5 class="card-title text-primary">Welcome {{ Auth::user()->username }} 🎉 You are Login as Approver</h5>
                    <p class="mb-4">
                      You have <span class="fw-bold">
                        @if($latestVehicleBooking == true)
                        {{$total_orders}}
                        @else
                        0
                        @endif
                      </span> Booking Order
                    </p>
                    <a href="{{ route('booking.index') }}" class="btn btn-sm btn-outline-primary">View History</a>
                  </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                  <div class="card-body pb-0 px-0 px-md-4">
                    <img src="{{ asset('css/img/illustrations/man-with-laptop-light.png') }}" style=" height: 130px; object-fit: cover;" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png') }}" data-app-light-img="illustrations/man-with-laptop-light.png') }}" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Order Statistics -->
          <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                  <h5 class="m-0 me-2">Vehicles Booked Statistics</h5>
                  <small class="text-muted">{{ $total_orders }} Total Vehicle Booked</small>
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                    <a class="dropdown-item" href="{{ route('booking.index') }}">View More</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div class="d-flex flex-column align-items-center gap-1">
                    <h2 class="mb-2">{{ $total_orders }}</h2>
                    <span>Total Booked</span>
                  </div>
                  <div id="orderStatisticsChart"></div>
                </div>
                <ul class="p-0 m-0">
                  @foreach($orders as $order)
                  <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                      <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">{{$order->vehicleDashboard->name }}</h6>
                        <small class="text-muted">{{$order->vehicleDashboard->vehicle_type }}</small>
                      </div>
                      <div class="user-progress">
                        <small class="fw-semibold">{{$order->vehicleDashboard->vehicle_ownership == 1 ? 'Owned' : 'Rent' }}</small>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <!--/ Order Statistics -->



          <!-- Transactions -->
          <div class="col-md-6 col-lg-8 order-2 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Booked</h5>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                    <a class="dropdown-item" href="{{ route('booking.index') }}">View More</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="p-0 m-0">
                  @foreach ($orders as $order)
                  <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="{{ asset('css/img/icons/unicons/paypal.png') }}" alt="User" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">{{$order->driverDashboard->fullname }}</small>
                        <h6 class="mb-0">{{$order->vehicleDashboard->name }}</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">{{$order->user->fullname }}</h6>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <!--/ Transactions -->
        </div>
      </div>
      <!-- / Content -->

    </div>
  </div>
  @include('approver.foot')