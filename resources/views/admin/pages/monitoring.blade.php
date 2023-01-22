@include('admin.head')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages /</span> Monitoring</h4>
        <div class="card-group mb-5">
            <div class="card">
                <img class="card-img-top" src="{{ $chosen_vehicle->vehicle_picture_url }}" style="width: 420px; height: 250px;object-fit: cover;" />
                <div class="card-body">
                    <h4 class="card-title"><strong>Vehicle</strong></h4>
                    <p class="card-text">
                        <strong>Name: <span class="badge bg-label-primary me-1">{{ $chosen_vehicle->booking_count }}</span></strong>
                    </p>
                    <p class="card-text">
                        <strong>Type : <span class="badge bg-label-primary me-1">{{ $chosen_vehicle->vehicle_type }}</span></strong>
                    </p>
                    <p class="card-text">
                        <strong>Ownership: <span class="badge bg-label-primary me-1">{{ $chosen_vehicle->vehicle_ownership == 0 ? 'Owned' : 'Rent' }}</span></strong>
                    </p>
                    <p class="card-text">
                        <strong>Fuel Consume : <span class="badge bg-label-primary me-1">{{ $chosen_vehicle->fuel_consume }}/KM</span></strong>
                    </p>
                    <p class="card-text">
                        <strong>Service Schedule : <span class="badge bg-label-primary me-1">{{ date_format(date_create($chosen_vehicle->service_schedule), 'd M Y') }}</span></strong>
                    </p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ $chosen_driver->profile_picture_url }}" style="width: 420px; height: 250px;object-fit: cover;" />
                <div class="card-body">
                    <h4 class="card-title"><strong>Driver</strong></h4>
                    <p class="card-text">
                        <strong>Name: <span class="badge bg-label-primary me-1">{{ $chosen_driver->fullname }}</span></strong>
                    </p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ $chosen_approver->profile_picture_url }}" alt="Card image cap" style="width: 420px; height: 250px;object-fit: cover;" />
                <div class="card-body">
                    <h4 class="card-title"><strong>Approver</strong></h4>
                    <p class="card-text">
                        <strong>Name: <span class="badge bg-label-primary me-1">{{ $chosen_approver->fullname }}</span></strong>
                    </p>
                </div>
            </div>
        </div>

        <form action="{{route('vehiclebooking.store')}}" method="POST">
            @csrf
            <div class="form-group d-none">
                <label for="vehicle_id">Vehicle ID:</label>
                <input type="text" class="form-control" name="vehicle_id" id="vehicle_id" value="{{ $chosen_vehicle->id }}" required>
            </div>
            <div class="form-group d-none">
                <label for="approver_id">Approver ID:</label>
                <input type="text" class="form-control" name="approver_id" id="approver_id" value="{{ $chosen_approver->id }}" required>
            </div>
            <div class="form-group d-none">
                <label for="submitter_id">Submitter ID:</label>
                <input type="text" class="form-control" name="submitter_id" id="submitter_id" value="{{ $chosen_user->id }}" required>
            </div>
            <div class="form-group d-none">
                <label for="driver_id">Driver ID:</label>
                <input type="text" class="form-control" name="driver_id" id="driver_id" value="{{ $chosen_driver->id }}" required>
            </div>
            <div class="form-group d-none">
                <label for="booking_date">Booking Date:</label>
                <input type="date" class="form-control" name="booking_date" id="booking_date" value="{{ date('Y-m-d') }}" required>
            </div>
            <div class="form-group d-none">
                <label for="status">Status:</label>
                <input type="number" class="form-control" name="status" id="status" value="1" required>
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mb-5">Submit</button>
            </div>
        </form>
    </div>
    @include('admin.foot')