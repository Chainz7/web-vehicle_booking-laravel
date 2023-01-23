@include('admin.head')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        @if ($errors->any())
        <div class="alert alert-danger">
            Please Choose Approver
        </div>
        @endif
        @if($approvers != null)
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages /</span> Approver</h4>
        <div class="col mb-5">
            @foreach($approvers as $approver)
            <div class="col-md">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-1">
                            <img class="card-img card-img-left" src="{{ $approver->profile_picture_url }}" alt="Card image" style="width: 110px; height: 87px;object-fit: cover;" />
                        </div>
                        <div class=" col-md-11">
                            <div class="card-body d-flex justify-content-between">
                                <h5 class="card-title fw-bold">{{ $approver->fullname }}</h5>
                                <a href="{{ route('approver.choose', $approver->id) }}" class="btn btn-primary">Choose</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="alert alert-danger">Data Not Found</div>
        @endif
    </div>
    @include('admin.foot')