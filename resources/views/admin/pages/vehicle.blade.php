@include('admin.head')
<div class="content-wrapper">
    <div class="container-xxl container-p-y">
                    </tbody>
        <h4 class="fw-bold py-2 m-1 mb-0"><span class="text-muted fw-light">Pages /</span> Vehicles</h4>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y pt-0">
        <div class="card">
            <h5 class="card-header">List Vehicle</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Ownership</th>
                        <th>Fuel Consume</th>
                        <th>Service Schedule</th>
                        <th>Is Availbale</th>
                        <th>Booking Count</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($vehicles as $item)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $item->name }}</strong></td>
                        <td>{{ $item->vehicle_type }}</td>
                        <td>{{ $item->vehicle_ownership == 1 ? 'Owned' : 'Rent' }}</td>
                        <td><span class="badge bg-label-primary me-1">{{ $item->fuel_consume }}/Km</span></td>
                        <td>{{ date_format(date_create($item->service_schedule), 'd M Y') }}</td>
                        <td>
                            @if($item->is_available == true)
                                <span class="badge bg-label-primary me-1">Available</span>
                            @else
                                <span class="badge bg-label-danger me-1">Not Available</span>
                            @endif
                        </td>
                        <td align="center"><strong>{{ $item->booking_count }}</strong></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@include('admin.foot')
