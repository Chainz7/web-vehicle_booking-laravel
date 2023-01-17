@include('admin/head')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages /</span> Drivers</h4>
        <!-- Driver -->
        <div class="col mb-5">
            <div class="col-md">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-1">
                            <img class="card-img card-img-left" src="{{ asset('css/img/elements/12.jpg') }}" alt="Card image" style="width: 110px; height: 87px;object-fit: cover;" />
                        </div>
                        <div class=" col-md-11">
                            <div class="card-body d-flex justify-content-between">
                                <h5 class="card-title fw-bold">Driver</h5>
                                <!-- <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to additional content.
                                    This content is a little bit longer.
                                </p> -->
                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                <button type="button" class="btn btn-primary">Choose</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Driver -->
    </div>
    <!-- / Content -->
    @include('admin/foot')