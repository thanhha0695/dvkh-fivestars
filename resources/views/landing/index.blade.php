@extends('layouts/blankLayout')

@section('title', 'Five Stars')

@section('page-style')
  <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
  <!-- Page -->
  <style type="text/css">
    .width-social {
      width: 1rem;
    }

    .ts-control {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .ts-dropdown {
      border-radius: 8px;
      border: 1px solid #dcdcdc;
      font-size: 14px;
    }

    .ts-dropdown [data-selectable].active {
      background-color: #f3f4f6;
    }

    [id] {
      scroll-margin-top: 80px;
    }
  </style>
@endsection

@section('content')
  {{-- Navbar Header --}}
  @include('layouts/sections/navbar/client/navbar')
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
        <h4 class="text-uppercase rounded-3 bg-label-info py-2 px-3">Đăng ký - Hỗ trợ dịch vụ</h4>
      </div>
      <div class="d-flex justify-content-center">
        <form class="w-50 needs-validation" id="feedback-form" action="#" method="POST" novalidate>
          <div class="d-none alert" id="contact-message"></div>
          @csrf
          <div class="card d-flex justify-content-center">
            <div class="card-body">
              <h5>Thông tin dịch vụ</h5>
              <div class="row mt-5">
                <label class="form-label">
                  Loại dịch vụ (<span class="error">*</span>)
                </label>
                <select id="service-type" name="type" required>
                  <option value="">---Chọn dịch vụ---</option>
                  <option value="1">Đăng ký bảo hành</option>
                  <option value="2">Bảo hành - Sữa chữa</option>
                  <option value="3">Hỗ trợ & Giải đáp</option>
                </select>
                <div class="invalid-feedback">
                  Vui lòng chọn dịch vụ.
                </div>
              </div>
              <div class="row mt-5">
                <label class="form-label">
                  Sản phẩm (<span class="error">*</span>)
                </label>
                <select id="product" name="product_id" required>
                  <option value="">---Chọn sản phẩm---</option>
                </select>
                <div class="invalid-feedback">
                  Vui lòng chọn sản phẩm.
                </div>
              </div>
              <div class="row mt-5">
                <label class="form-label">
                  Ngày mua (<span class="error">*</span>)
                </label>
                <div class="col-12">
                  <input type="date" class="form-control" name="buy_date" placeholder="Ngày mua" required />
                  <div class="invalid-feedback">
                    Vui lòng nhập ngày mua.
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h5>Thông tin khách hàng</h5>
              <div class="row">
                <label class="form-label">
                  Họ & tên (<span class="error">*</span>)
                </label>
                <div class="col-12">
                  <input type="text" class="form-control" name="name" placeholder="Nguyễn Văn A" required />
                  <div class="invalid-feedback">
                    Vui lòng nhập họ và tên.
                  </div>
                </div>
              </div>
              <div class="row mt-5">
                <label class="form-label">
                  Số điện thoại (<span class="error">*</span>)
                </label>
                <div class="col-12">
                  <input type="number" class="form-control" name="phone" placeholder="Số điện thoại" required />
                  <div class="invalid-feedback">
                    Vui lòng nhập số điện thoại.
                  </div>
                </div>
              </div>

              <div class="row mt-5">
                <label class="form-label">
                  Địa chỉ (<span class="error">*</span>)
                </label>
                <div class="col-12">
                  <input type="text" class="form-control" name="address" placeholder="Số 1, Nguyễn Huy Tưởng, Hà Nội" required />
                  <div class="invalid-feedback">
                    Vui lòng nhập địa chỉ.
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h5>Nội dung hỗ trợ</h5>
              <div class="row mt-5">
                <label class="form-label" id="content-support-label">
                  Nội dung
                </label>
                <div class="col-12">
                  <textarea type="textarea" class="form-control" id="content-support" name="content" placeholder="Nhập nội dung yêu cầu" rows="10"></textarea>
                  <div class="invalid-feedback">
                    Vui lòng nhập nội dung.
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="justify-content-center d-flex mb-2">
                <button type="reset" class="btn btn-secondary me-2">Làm lại</button>
                <button type="submit" class="btn btn-primary">Gửi yêu cầu</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{--Footer--}}
  @include('layouts/sections/navbar/client/footer')

  @include('layouts/sections/footer/footer')
@endsection

@section('page-script')
  <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script type="text/javascript">
    let target = document.location.hash
    const API_URL = "{{ env('API_URL') }}";

    if (target.length > 1) {
      scrollToTarget(target.replace('#', ''))
    }

    function scrollToTarget(id) {
      const targetElement = document.getElementById(id);
      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    }

    const TomInstanceProduct = new TomSelect("#product", {
      create: false,
      plugins: ['clear_button'],
      labelField: 'name',
      valueField: 'id',
      searchField: ['name'],
      loadThrottle: 300,
      persist: false,
      preload: true,
      load: function (query, callback) {
        fetch(`${ API_URL }/client/products?search=${ query }`)
        .then(res => res.json())
          .then(json => {
            callback(json.data || []);
          })
        .catch(() => callback());
      }
    });

    const TomInstanceService = new TomSelect("#service-type", {
      create: false,
      plugins: ['clear_button'],
      persist: false
    });

    document.addEventListener('DOMContentLoaded', function () {
      const form = document.getElementById('feedback-form');
      const message = document.getElementById('contact-message');
      const serviceType = document.getElementById('service-type');

      form.addEventListener('submit', async function (e) {
        e.preventDefault();

        message.classList.add('d-block');
        message.textContent = '';
        if (!form.checkValidity()) {
          form.classList.add('was-validated');
          return;
        }

        const formData = new FormData(form);

        try {
          const response = await fetch("{{ route('contact.store') }}", {
            method: "POST",
            headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
          });

          if (!response.ok) throw new Error('Request failed');

          const result = await response.json();

          form.reset();
          TomInstanceService.clear();
          TomInstanceProduct.clear();
          form.classList.remove('was-validated');
          message.classList.remove('d-none');
          message.classList.remove('alert-danger');
          message.classList.add('alert-success');
          message.textContent = "Gửi thành công!";
        } catch (error) {
          message.classList.remove('alert-success');
          message.classList.remove('d-none');
          message.classList.add('alert-danger');
          message.textContent = 'Có lỗi xảy ra khi gửi form!';
          console.error(error);
        }
      });

      serviceType.addEventListener('change', async function (e) {
        const type = this.value;
        const contentSupportLabel = document.getElementById('content-support-label');
        const contentSupport = document.getElementById('content-support');

        if (parseInt(type) === 1) {
          contentSupportLabel.textContent = 'Nội dung';
          contentSupport.required = false;
        } else {
          contentSupportLabel.innerHTML = 'Nội dung (<span class="error">*</span>)';
          contentSupport.required = true;
        }
      })
    });
  </script>
@endsection
