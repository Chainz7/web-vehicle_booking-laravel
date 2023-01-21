@include('admin.head')
<div class="content-wrapper">
    <div class="container-xxl container-p-y">
        @if ($errors->any())
        <div class="alert alert-danger">
            Please Choose a Vehicle First
        </div>
        @endif
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages /</span> Vehicles</h4>
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <div class="row mb-5">
            @foreach($vehicles as $vehicle)
            <div class="col-6 col-md-4 col-lg-3 mb-3">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $vehicle->vehicle_picture_url }}" alt="Card image cap" style="width: 400px; height: 200px; object-fit: cover;" />
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $vehicle->name }}</strong></h5>
                        <p class="card-text">
                            Type : <span class="badge bg-label-primary me-1">{{ $vehicle->vehicle_type }}</span>
                        </p>
                        <p class="card-text">
                            Ownership : <span class="badge bg-label-primary me-1">{{ $vehicle->vehicle_ownership == 1 ? 'Owned' : 'Rent' }}</span>
                        </p>
                        <p class="card-text">
                            Fuel Consume : <span class="badge bg-label-primary me-1">{{ $vehicle->fuel_consume }}/Km</span>
                        </p>
                        <p class="card-text">
                            Booking Count : <span class="badge bg-label-primary me-1">{{ $vehicle->booking_count }} Times</span>
                        </p>
                        <p class="card-text">
                            Service :
                            @if(date_create($vehicle->service_schedule) < date_create())<span class="badge bg-label-warning me-1">{{ date_format(date_create($vehicle->service_schedule), 'd M Y') }}</span>
                                @else
                                <span class="badge bg-label-primary me-1">{{ date_format(date_create($vehicle->service_schedule), 'd M Y') }}</span>
                                @endif
                        </p>
                        <p class="card-text">
                            Available :
                            @if($vehicle->is_available == true)
                            <span class="badge bg-label-primary me-1">YES</span>
                            @elseif(date_create($vehicle->service_schedule) < date_create()) <span class="badge bg-label-danger me-1">SERVICE</span>
                                @else
                                <span class="badge bg-label-danger me-1">NO</span>
                                @endif
                        </p>
                        @if($vehicle->is_available == false)
                        <a href="{{ route('vehicle.choose', $vehicle->id) }}" class="btn btn-primary disabled">Choose</a>
                        @elseif(date_create($vehicle->service_schedule) < date_create()) <a href="{{ route('vehicle.choose', $vehicle->id) }}" class="btn btn-primary disabled">Choose</a>
                            @else
                            <a href="{{ route('vehicle.choose', $vehicle->id) }}" class="btn btn-primary">Choose</a>
                            @endif

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@include('admin.foot')