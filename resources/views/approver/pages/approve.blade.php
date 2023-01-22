@include('approver.head')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages /</span> Approve</h4>
        <div class="card-group mb-5">

            <div class="card">
                <img class="card-img-top" src="{{ $bookings->masterVehicle->vehicle_picture_url }}" style="width: 420px; height: 250px;object-fit: cover;" />
                <div class="card-body">
                    <h4 class="card-title"><strong>Vehicle</strong></h4>
                    <p class="card-text">
                        <strong>Name: <span class="badge bg-label-primary me-1">{{ $bookings->masterVehicle->name }}</span></strong>
                    </p>
                    <p class="card-text">
                        <strong>Type : <span class="badge bg-label-primary me-1">{{ $bookings->masterVehicle->vehicle_type }}</span></strong>
                    </p>
                    <p class="card-text">
                        <strong>Ownership: <span class="badge bg-label-primary me-1">{{ $bookings->masterVehicle->vehicle_ownership == 0 ? 'Owned' : 'Rent' }}</span></strong>
                    </p>
                    <p class="card-text">
                        <strong>Fuel Consume : <span class="badge bg-label-primary me-1">{{ $bookings->masterVehicle->fuel_consume }}/KM</span></strong>
                    </p>
                    <p class="card-text">
                        <strong>Service Schedule : <span class="badge bg-label-primary me-1">{{ date_format(date_create($bookings->masterVehicle->service_schedule), 'd M Y') }}</span></strong>
                    </p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ $bookings->driver->profile_picture_url }}" style="width: 420px; height: 250px;object-fit: cover;" />
                <div class="card-body">
                    <h4 class="card-title"><strong>Driver</strong></h4>
                    <p class="card-text">
                        <strong>Name: <span class="badge bg-label-primary me-1">{{ $bookings->driver->fullname }}</span></strong>
                    </p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ $bookings->userSubmitter->profile_picture_url }}" alt="Card image cap" style="width: 420px; height: 250px;object-fit: cover;" />
                <div class="card-body">
                    <h4 class="card-title"><strong>Submitter</strong></h4>
                    <p class="card-text">
                        <strong>Name: <span class="badge bg-label-primary me-1">{{ $bookings->userSubmitter->fullname }}</span></strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end gap-2">
            @if($bookings->status == 1)
            <form action="{{route('approveApprover.reject')}}" method="POST">
                @csrf
                <div class="form-group d-none">
                    <input type="hidden" name="id" value="{{$bookings->id}}">
                    <input type="number" class="form-control" name="status" id="status" value="0" required>
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-danger mb-5">Reject</button>
                </div>
            </form>
            <form action="{{route('approveApprover.store')}}" method="POST">
                @csrf
                <div class="form-group d-none">
                    <input type="hidden" name="id" value="{{$bookings->id}}">
                    <input type="number" class="form-control" name="status" id="status" value="2" required>
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-success mb-5">Approve</button>
                </div>
            </form>
            @elseif($bookings->status == 0)
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-danger disabled mb-5">Rejected</button>
            </div>
            @elseif($bookings->status == 2)
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-success disabled mb-5">Approved</button>
            </div>
            @endif
        </div>


    </div>
    @include('approver.foot')