import AbstractView from './AbstractView.js';
export default class extends AbstractView {
  constructor() {
    super();
    // this.setTitle('Event');
  }
  async getHtml() {
    // var ajax = new XMLHttpRequest();
    // ajax.open('GET', 'event.html', false);
    // ajax.send();
    // document.body.innerHTML += ajax.responseText;
    return `
    <section class="container">
      <div class="row">
        <div
          class="col-lg-3 text-center text-uppercase py-4"
          style="
            height: 100px;
            background: #e2e3e4;
            color: #1a9dbe;
            font-size: 30px;
          "
        >
          Tim mạch
        </div>
        <div
          class="col-lg-9 bg-img"
          style="
            background-image: url(./img/benh-tim-mach-2-360x240.jpg);
            height: 100px;
          "
        ></div>
      </div>
    </section>
    <!-- event -->
    <section class="container my-4 events">
      <h2 class="text-uppercase pt-4">Các hội thảo sắp tới</h2>
      <div class="row">
        <div
          class="col-lg-3"
          style="
            background: url(./img/huyet-ap-thap.jpg);
            height: 150px;
            background-position: center;
            background-size: cover;
          "
        ></div>
        <div class="col-lg-7">
          <h3 class = "mt-1">Bệnh tăng huyết áp</h3>
          <p class="text-justify">
            Tầm quan trọng của thuốc chẹn bêta trong điều trị tăng huyết áp, đặc
            biệt đối với những bệnh nhân có chỉ định thuyết phục, chẳng hạn như
            bệnh mạch vành, suy tim, nhịp tim cao hoặc rung nhĩ. Tìm loại thuốc
            phù hợp cho từng bệnh nhân và hồ sơ lâm sàng duy nhất của họ là rất
            quan trọng.
          </p>
        </div>
        <div class="col-lg-2 button px-4 mt-1">
          <a href="regisevent.php" class="btn 
          ">Đăng ký 
          </a>
        </div>
      </div>
      <div class="row">
        <div
          class="col-lg-3"
          style="
            background: url(./img/848_6_thoi_diem_nguy_hiem_doi_voi_nhung_nguoi_benh_tim_mach.png);
            height: 150px;
            background-position: center;
            background-size: cover;
          "
        ></div>
        <div class="col-lg-7">
          <h3 class = "mt-1">Hội thảo về cơ tim</h3>
          <p class="text-justify">
            Bệnh chuyển hóa tim là nguyên nhân chính gây ra bệnh tật và tử vong
            trên toàn thế giới. Trong tương lai rất gần, 75% bệnh nhân mắc chứng
            này sẽ sống ở các nước đang phát triển và sẽ mắc bệnh chuyển hóa tim
            do thay đổi lối sống của họ. Các Hội thảo Khoa học đang đề xuất một
            phương pháp giáo dục cấp cao, đa định dạng.
          </p>
        </div>
        <div class="col-lg-2 button px-4 mt-1">
          <a href="regisevent.php" class="btn ">Đăng ký</a>
        </div>
      </div>
      <div class="row">
        <div
          class="col-lg-3"
          style="
            background: url(./img/20190416_103208_362224_benh-tim-mach-chiaki.max-800x800.jpg);
            height: 150px;
            background-position: center;
            background-size: cover;
          "
        ></div>
        <div class="col-lg-7">
          <h3 class = "mt-1">Hệ thống đo tim mạch</h3>
          <p class="text-justify">
            Rối loạn chuyển hóa tim là nguyên nhân chính gây tử vong trên toàn
            thế giới, và có liên quan đến các rối loạn nội tiết như tiểu đường
            và rối loạn chức năng tuyến giáp. Ở bệnh nhân đái tháo đường týp 2.
            Hành trình học tập kết hợp bắt đầu với cuộc phỏng vấn với Giáo sư
            các bệnh tim mạch.
          </p>
        </div>
        <div class="col-lg-2 button px-4 mt-1">
          <a href="regisevent.php" class="btn ">Đăng ký</a>
        </div>
      </div>
      <div class="row">
        <div
          class="col-lg-3"
          style="
            background: url(./img/cac-dau-hieu-nhan-biet-cua-benh-tim-mach.jpg);
            height: 150px;
            background-position: center;
            background-size: cover;
          "
        ></div>
        <div class="col-lg-7">
          <h3 class = "mt-1">Các nguy cơ tim mạch</h3>
          <p class="text-justify">
            Hội thảo Khoa học đã thiết kế một Hành trình học tập kết hợp toàn
            diện nhằm nâng cao kiến ​​thức phòng chống bệnh tim mạch ở bệnh nhân
            tăng huyết áp động mạch. Chương trình này đề cập đến nghiên cứu gần
            đây nhất về các yếu tố nguy cơ tim mạch và thảo luận về cách tiếp
            cận tốt nhất quản lý lâm sàng bệnh nhân tăng huyết áp phức tạp.
          </p>
        </div>
        <div class="col-lg-2 button px-4 mt-1">
          <a href="regisevent.php" class="btn ">Đăng ký</a>
        </div>
      </div>
    </section>
    `;
  }
}
