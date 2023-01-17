@include('admin/head')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Pages /</span> Monitoring</h4>
        <h4 class="pb-1 mb-3 fw-bold">On Going</h4>
        <div class="card-group mb-5">
            <div class="card">
                <img class="card-img-top" src="https://www.volvotrucks.id/content/dam/volvo-trucks/markets/master/home/services-updates/driver-support/services-driver-support-driver.jpg" alt="Card image cap" style="width: 450px; height: 300px;object-fit: cover;" />
                <div class="card-body">
                    <h5 class="card-title">Driver</h5>
                    <!-- <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content. This
                        content is a little bit longer.
                    </p> -->
                </div>
                <!-- <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div> -->
            </div>
            <div class="card">
                <img class="card-img-top" src="https://www.toyota.astra.co.id/sites/default/files/2022-12/home%20banner%20supra%20gr%201293x820_0.jpg" alt="Card image cap" style="width: 450px; height: 300px;object-fit: cover;" />
                <div class="card-body">
                    <h5 class="card-title">Toyota</h5>
                    <p class="card-text">
                        Owned by Company
                    </p>
                </div>
                <!-- <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div> -->
            </div>
            <div class="card">
                <img class="card-img-top" src="https://pub-static.fotor.com/assets/projects/pages/d5bdd0513a0740a8a38752dbc32586d0/fotor-03d1a91a0cec4542927f53c87e0599f6.jpg" alt="Card image cap" style="width: 450px; height: 300px;object-fit: cover;" />
                <div class="card-body">
                    <h5 class="card-title">Agreement</h5>
                    <!-- <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content. This
                        card has even longer content than the first to show that equal height action.
                    </p> -->
                </div>
                <!-- <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div> -->
            </div>
        </div>
        <h4 class="pb-1 mb-3 fw-bold">My Activity</h4>
        <!-- Driver -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Vehicle</th>
                            <th>Category</th>
                            <th>Driver</th>
                            <th>Agreement</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Toyota</strong></td>
                            <td>Owned by Company</td>
                            <td>Albert Cook</td>
                            <td>Albert Cook</td>
                            <td>
                                <span class="badge bg-label-primary me-1">Active</span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot class="table-border-bottom-0">
                        <tr>
                            <th>Vehicle</th>
                            <th>Category</th>
                            <th>Driver</th>
                            <th>Agreement</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!--/ Driver -->
    </div>
    <!-- / Content -->
    @include('admin/foot')