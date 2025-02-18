@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
  @vite([
  'resources/assets/vendor/scss/pages/page-auth.scss'
  ])
@endsection

@section('content')
  <div class="header">
    <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-2" aria-controls="navbar-ex-2" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-ex-2">
          <div class="navbar-nav me-auto">
            <a class="nav-item nav-link active" href="javascript:void(0)">Trang chủ</a>
            <a class="nav-item nav-link" href="javascript:void(0)">Giới thiệu</a>
            <a class="nav-item nav-link" href="javascript:void(0)">Liên hệ</a>
          </div>

          <span class="navbar-text me-5">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
            info@dvkh-fivestars.com
          </span>
          <span class="navbar-text">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
            1900 888 644
          </span>
        </div>
      </div>
    </nav>
  </div>
  <div>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" style="height: 70vh;" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/2.png')  }}" alt="First slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 70vh;" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/3.png') }}" alt="Second slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 70vh;"  src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/4.png') }}" alt="Third slide" />
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
@endsection
