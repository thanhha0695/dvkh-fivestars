@php
$containerFooter = !empty($containerNav) ? $containerNav : 'container-fluid';
@endphp

<div class="footer mt-10 px-5" id="contact">
  <div class="header-elements d-flex justify-content-center">
    <h4 class="text-uppercase rounded-3 bg-label-info py-2 px-3">Thông tin liên hệ</h4>
  </div>
  <div class="row px-10">
    <div class="col-md-6 col-lg-6 col-sm-12 px-md-12 px-lg-12">
      <div class="row py-5 mt-10">
        <div class="col-2 col-md-1">
          <a href="#">
            <img class="img-fix" width="45" height="45" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/forseti.png') }}" alt="FORSETI - BETTER FOR LIFE" />
          </a>
        </div>
        <div class="col-10 col-md-11">
          <h6>Trung tâm dịch vụ khách hàng Five Stars - thuộc Công ty Cổ phần FORSETI Việt Nam</h6>
        </div>
      </div>
      <div>
        <div class="px-5">
          <p>
            <a style="width: 1px;" target="_blank" href="https://x.com/ForsetiVietnam" class="width-social btn btn-outline-light rounded-circle bg-label-info bg-info text-white">
              <i class='bx bxl-twitter'></i>
            </a>
            <span class="mt-1">Twitter</span>
          </p>
          <p>
            <a style="width: 1px;" target="_blank" href="https://www.facebook.com/Forseti.vn" class="width-social btn btn-outline-light rounded-circle text-info bg-label-info"><i class='bx bxl-facebook-circle'></i></a>
            <span class="mt-1">Facebook</span>
          </p>
          <p>
            <a style="width: 1px;" target="_blank" href="https://www.instagram.com/forsetivietnam" class="width-social btn btn-outline-light rounded-circle text-danger bg-label-info">
              <i class='bx bxl-instagram' ></i>
            </a>
            <span class="mt-1">Instagram</span>
          </p>
          <p>
            <a style="width: 1px;" target="_blank" href="https://www.youtube.com/@forsetivietnam-chuyengialo1854" class="width-social btn btn-outline-light rounded-circle text-danger bg-label-info">
              <i class='bx bxl-youtube' ></i>
            </a>
            <span class="mt-1">Youtube</span>
          </p>
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

<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ $containerFooter }}">
    <div class="footer-container d-flex align-items-center justify-content-end py-4 flex-md-row flex-column">
      <div class="text-body">
        © <script>document.write(new Date().getFullYear())</script>, made with ❤️ by <a href="https://forseti.vn/" target="_blank" class="footer-link">FORSETI</a>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer-->
