@include('admin/head')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages /</span> Vehicles</h4>

    <!-- Grid Card -->
    <h3 class="pb-1 mb-4 fw-bold d-flex justify-content-center">Category</h3>
    <div class="d-flex justify-content-center mb-5">
      <button type="button" class="btn btn-primary active mx-2">Owned</button>
      <button type="button" class="btn btn-primary mx-2">Rent</button>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
      <div class="col">
        <div class="card h-100">
          <img class="card-img-top" src="{{ asset('css/img/elements/2.jpg') }}" alt="Card image cap" style="width: 300px; height: 300px;object-fit: cover;" />
          <div class="card-body">
            <div class="card text-center mb-3" style="box-shadow: none;">
              <div class="card-body">
                <h5 class="card-title">Toyota</h5>
                <p class="card-text">owned by the company / rent from a rental company</p>
                <!-- <a href="javascript:void(0)" class="btn btn-primary">Choose</a> -->
                <button type="button" class="btn btn-primary">Choose</button>
              </div>
            </div>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--/ Card layout -->
  </div>
  <!-- / Content -->
  @include('admin/foot')