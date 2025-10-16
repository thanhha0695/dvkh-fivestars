<nav class="navbar nav-pills nav-fill navbar-expand-lg navbar-light bg-card fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-2" aria-controls="navbar-ex-2" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-ex-2">
      <div class="me-12 row hide-mobile">
        <div class="col-2">
          <a href="#">
            <img class="img-fix" width="45" height="45" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/forseti.png') }}" alt="FORSETI - BETTER FOR LIFE" />
          </a>
        </div>
        <div class="col-10 text-center mt-1">
          <div class="fw-bold text-info text-uppercase" style="font-size: 12px;">
            DVKH Five stars
          </div>
          <span class="text-center mt-3 text-info" style="font-size: 11px;">Chăm sóc khách hàng</span>
        </div>
      </div>
      <ul class="nav nav-underline flex-column flex-md-row ms-md-auto">
        <li class="nav-item">
          <a class="nav-item nav-link" aria-current="page" href="#carouselExample" onclick="scrollToTarget('carouselExample')">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link" href="#introduce" onclick="scrollToTarget('introduce')">Giới thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link" href="#feedback" onclick="scrollToTarget('feedback')">Dịch vụ</a>
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link" href="#contact" onclick="scrollToTarget('contact')">Liên hệ</a>
        </li>
      </ul>

      <div class="d-flex hide-mobile ms-10">
        <div class="navbar-text me-5">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
          info@forseti.vn
        </div>
        <div class="navbar-text">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
          1900 888 644
        </div>
      </div>
    </div>
  </div>
</nav>

<style>
  @media (max-width: 767.98px) {
    .hide-mobile {
      display: none !important;
    }
  }

  @media (min-width: 992px) {
    body {
      padding-top: 56px;
    }
  }
</style>
