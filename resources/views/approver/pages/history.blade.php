@include('approver.head')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        @if ($errors->any())
        <div class="alert alert-danger">
            Please Wait For Your Last Booking Vehicle to Get Approved or Rejected
        </div>
        @endif
        @if($vehicleBookings != null)
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages /</span> History</h4>
        <!-- Driver -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Vehicle</th>
                            <th>Approver</th>
                            <th>Driver</th>
                            <th>Submiter</th>
                            <th>Approve Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vehicleBookings as $vehicleBooking)
                        <tr>
                            <td><strong><span class="fab fa-angular fa-lg text-primary me-3">{{ $vehicleBooking->masterVehicle->name }}</span></strong></td>
                            <td>{{ Auth::user()->fullname }}</td>
                            <td>{{ $vehicleBooking->driver->fullname }}</td>
                            <td>{{ $vehicleBooking->userSubmitter->fullname }}</td>
                            <td>{{ date('d-m-Y', strtotime($vehicleBooking->updated_at)) }}</td>
                            <td>
                                @if($vehicleBooking->status == '1')
                                <span class="badge bg-label-warning me-1">Pending</span>
                                @elseif($vehicleBooking->status == '2')
                                <span class="badge bg-label-success me-1">Accept</span>
                                @else($vehicleBooking->status == '3')
                                <span class="badge bg-label-danger me-1">Declined</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="table-border-bottom-0">
                        <tr>
                            <th>Vehicle</th>
                            <th>Approver</th>
                            <th>Driver</th>
                            <th>Submiter</th>
                            <th>Approve Date</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        @else
        <div class="alert alert-danger">Data Not Found</div>
        @endif
    </div>
</div>
@include('approver.foot')