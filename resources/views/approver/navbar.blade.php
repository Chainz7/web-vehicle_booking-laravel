<!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    <ul class="navbar-nav flex-row align-items-center ms-auto">
      <!-- User -->
      @if(!Auth::check())
      <a href="#" class="btn btn-primary">Login</a>
      @else
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
            <img src="{{ Auth::user()->profile_picture_url }}" alt class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;" />
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <div class="dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar avatar-online">
                    <img src="{{ Auth::user()->profile_picture_url }}" alt class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;" />
                  </div>
                </div>
                <div class="flex-grow-1">
                  <span class="fw-semibold d-block">{{ Auth::user()->username }}</span>
                  <small class="text-muted">Approver</small>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <a class="dropdown-item" href="{{ route('profileApprover.index') }}">
              <i class="bx bx-user me-2"></i>
              <span class="align-middle">My Profile</span>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <form method="POST" action="{{ route('login.logout') }}">
              @csrf
              <a href="#" class="dropdown-item">
                <i class="bx bx-power-off me-2"></i>
                <button type="submit" class="btn" style="margin-left: -1.2rem;">Logout</button>
              </a>
            </form>
          </li>
        </ul>
      </li>
      @endif
    </ul>
  </div>
</nav>

<!-- / Navbar -->