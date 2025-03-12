@extends('layouts/blankLayout')

@section('title', 'Five Stars - Pages')

@section('page-style')
  <!-- Page -->
  <style type="text/css">
    .width-social {
      width: 1rem;
    }
  </style>
@endsection

@section('content')
  {{-- Navbar Header --}}
  <div class="header">
    <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-2" aria-controls="navbar-ex-2" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-ex-2">
          <div class="me-12 row">
            <div class="col-1">
              <a href="#">
                <img class="img-fix" width="100" height="100" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/45x45.png') }}" alt="FORSETI - BETTER FOR LIFE" />
              </a>
            </div>
            <div class="col-11 text-center">
              <div class="fs-3 fw-bold text-info text-uppercase">
                Trung tâm dịch vụ khách hàng 5 sao
              </div>
              <div class="text-center text-uppercase mt-3 text-info fs-1 fw-bold">DVKH Five stars</div>
            </div>
          </div>
          <div class="d-flex justify-content-center me-auto ms-auto navbar-nav">
            <a class="nav-item nav-link active" href="#">Trang chủ</a>
            <a class="nav-item nav-link" href="javascript:void(0)" onclick="scrollToTarget('introduce')">Giới thiệu</a>
            <a class="nav-item nav-link" href="javascript:void(0)" onclick="scrollToTarget('feedback')">Feedback</a>
            <a class="nav-item nav-link" href="javascript:void(0)" onclick="scrollToTarget('contact')">Liên hệ</a>
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
  {{--slider--}}
  <div>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100"  height="400" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/2.png')  }}" alt="First slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="400" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/3.png') }}" alt="Second slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="400" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/4.png') }}" alt="Third slide" />
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
  {{--Content--}}
  <div class="content-wrapper bg-white">
    <div class="introduce py-5 px-5 bg-body" id="introduce">
      <div class="header-elements d-flex justify-content-center py-5">
        <h4 class="text-uppercase rounded-3 bg-label-info py-2 px-3">Giới thiệu</h4>
      </div>
      <div class="clearfix d-flex justify-content-center">
        <div class="w-75 row">
          <div class="col-md-6 col-sm-12 col-lg-6 text-center">
            <h6>DVKH FIVE STARS</h6>
            <p>
              FORSETI – Better for life cung cấp các cách liên hệ khách hàng cá nhân và doanh nghiệp, khách hàng ưu tiên, bao gồm kênh hotline, kênh hỗ trợ qua Zalo OA Dvkh Five Stars, kênh chi nhánh/ Cửa hàng giới thiệu sản phẩm, kênh bán hàng qua sàn thương mại điện thử. Bạn có thể tìm kiếm các kênh hỗ trợ hoặc tìm câu hỏi thường gặp trên website.
            </p>
            <p>
              FORSETI - Chuyên sản xuất và phân phối các sản phẩm máy lọc nước, cây nước nóng lạnh, gia dụng thông minh tại Việt Nam. Forseti cam kết mang đến cho khách hàng các sản phẩm chất lượng với thiết kế tinh tế, dịch vụ chăm sóc khách và bảo hành hoàn hảo nhất.
            </p>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
            <img class="img-fix" style="width: 30vw;" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/introduce.png') }}" alt="FORSETI - BETTER FOR LIFE" />
          </div>
        </div>
      </div>
    </div>
    <div class="service px-5 py-5">
      <div class="header-elements d-flex justify-content-center">
        <h4 class="text-uppercase rounded-3 bg-label-info py-2 px-3">Dịch vụ Khách hàng</h4>
      </div>
      <div class="clearfix d-flex justify-content-center py-5">
        <div class="row w-60">
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="d-flex justify-content-center">
              <img class="img-fix" width="80" height="50" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/setting.png') }}" alt="FORSETI - BETTER FOR LIFE" />
            </div>
            <div class="text-center">
              <h6 class="text-center">Bảo hành tận nhà</h6>
              <p>
                Dịch vụ bảo hành ở tất cả các
                đại lý trên toàn quốc
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="d-flex justify-content-center">
              <img class="img-fix" width="80" height="50" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/dolar.png') }}" alt="FORSETI - BETTER FOR LIFE" />
            </div>
            <div class="text-center">
              <h6 class="text-center">Tổng đài hỗ trợ 24/7</h6>
              <p>
                Hỗ trợ khách hàng 24/7
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="d-flex justify-content-center">
              <img class="img-fix" width="80" height="50" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/warranty.png') }}" alt="FORSETI - BETTER FOR LIFE" />
            </div>
            <div class="text-center">
              <h6 class="text-center">Bảo trì sản phẩm trọn đời</h6>
              <p>
                Tất cả các sản phẩm của Forseti đều được bảo trì miễn phí
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="d-flex justify-content-center">
              <img class="img-fix" width="80" height="50" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/refresh.png') }}" alt="FORSETI - BETTER FOR LIFE" />
            </div>
            <div class="text-center">
              <h6 class="text-center">Đổi trả</h6>
              <p>
                Đổi trả trong vòng 7 ngày khi phát sinh lỗi kỹ thuật theo quy định
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="feedback px-5 py-5" id="feedback">
      <div class="header-elements d-flex justify-content-center">
        <h4 class="text-uppercase rounded-3 bg-label-info py-2 px-3">Thông tin và nội dung liên hệ</h4>
      </div>
      <div class="d-flex justify-content-center">
        <form>
          <div class="card d-flex justify-content-center">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <input type="text" class="form-control" name="name" placeholder="Họ & tên (*)" required />
                </div>
                <div class="col-md-4 col-sm-12">
                  <input type="email" class="form-control" name="email" placeholder="Email (*)" required />
                </div>
                <div class="col-md-4 col-sm-12">
                  <input type="text" class="form-control" name="phone" placeholder="Số điện thoại (*)" required />
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12">
                  <textarea type="textarea" class="form-control" name="content" placeholder="Nội dung (*)" required></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="justify-content-center d-flex mb-2"><button type="submit" class="btn btn-primary">Gửi</button></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{--Footer--}}
  <div class="footer d-flex justify-content-center" id="contact">
    <div class="row px-10 w-75">
      <div class="col-md-6 col-lg-6 col-sm-12">
        <div class="py-2 mt-3">
          <a href="#">
            <img class="img-fix" width="60" height="60" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/45x45.png') }}" alt="FORSETI - BETTER FOR LIFE" />
          </a>
        </div>
        <div class="text-uppercase">
          <h6>Trung tâm dịch vụ khách hàng Five Stars 5 sao - thuộc Công ty Cổ phần FORSETI Việt Nam</h6>
          <div>
            <div class="px-5">
              <p>
                <a href="https://x.com/ForsetiVietnam" class="width-social btn btn-outline-light rounded-circle bg-label-info bg-info text-white">
                  <i class='bx bxl-twitter'></i>
                </a>
                <span class="mt-1">Twitter Forseti</span>
              </p>
              <p>
                <a href="https://www.facebook.com/Forseti.vn" class="width-social btn btn-outline-light rounded-circle text-info bg-label-info"><i class='bx bxl-facebook-circle'></i></a>
                <span class="mt-1">Facebook Forseti</span>
              </p>
              <p>
                <a href="https://www.instagram.com/forsetivietnam" class="width-social btn btn-outline-light rounded-circle text-danger bg-label-info">
                  <i class='bx bxl-instagram' ></i>
                </a>
                <span class="mt-1">Instagram Forseti</span>
              </p>
              <p>
                <a href="https://www.youtube.com/@forsetivietnam-chuyengialo1854" class="width-social btn btn-outline-light rounded-circle text-danger bg-label-info">
                  <i class='bx bxl-youtube' ></i>
                </a>
                <span class="mt-1">Youtube Forseti</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-sm-12 py-5 mt-10">
        <div>
          <h6 class="text-uppercase">Công ty Cổ phần Forseti Việt Nam</h6>
          <div>
            <div class="px-5">
              <div class="row">
                <div class="col-1">
                  <i class='bx bx-barcode-reader'></i>
                </div>
                <div class="col-11">
                  <p>Mã số thuế: 0108578808</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class='bx bx-time'></i>
                </div>
                <div class="col-11">
                  <p>Ngày cấp đăng ký kinh doanh: 18/01/2019 </p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class='bx bxs-map-pin' ></i>
                </div>
                <div class="col-11">
                  <p>Nơi cấp: Sở Kế hoạch và Đầu tư thành phố Hà Nội </p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class='bx bxs-user-rectangle' ></i>
                </div>
                <div class="col-11">
                  <p>Đại diện bởi: Ông Lê Công Anh</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class='bx bx-map' ></i>
                </div>
                <div class="col-11">
                  <p>Địa chỉ: Số 153 phố Quan Nhân, Phường Nhân Chính, Quận Thanh Xuân, Thành phố Hà Nội, Việt Nam</p>
                </div>
              </div>

              <div class="row">
                <div class="col-1">
                  <i class='bx bxs-phone' ></i>
                </div>
                <div class="col-11">
                  <p>Hotline:  1900 888 644</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class='bx bx-envelope' ></i>
                </div>
                <div class="col-11">
                  <p>info@dvkh-fivestars.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

<script type="text/javascript">
  let target = document.location.hash

  if (target.length > 1) {
    scrollToTarget(target.replace('#', ''))
  }

  function scrollToTarget(id) {
    const targetElement = document.getElementById(id);
    if (targetElement) {
      targetElement.scrollIntoView({ behavior: 'smooth' });
    }
  }
</script>
