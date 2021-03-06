import AbstractView from './AbstractView.js';
export default class extends AbstractView {
  constructor() {
    super();
    // this.setTitle('Dashboard');
  }
  async getHtml() {
    // var ajax = new XMLHttpRequest();
    // ajax.open('GET', 'Dashboard.html', false);
    // ajax.send();

    // document.body.innerHTML += ajax.responseText;

    return `
    <section class="container">
      <div class="row">
        <div
          class="col-lg-12 bg-img"
          style="background-image: url('./img/article1.jpg'); height: 150px"
        ></div>
      </div>
    </section>

    <section class="container">
      <div class="row">
        <div class="col-lg-3 ps-0 mt-2 sidebar">
          <p class="mt-4 fs-5 text-uppercase text-white px-4" style="background: #63b5f3;">nghiên cứu khoa học</p>
          <ul class="ps-2">
            <li class="border-bottom list-unstyled actives">
              <a href="/" class="nav-link text-dark ps-0">Các kĩ thuật mới</a>
            </li>
            <li class="border-bottom list-unstyled actives">
              <a href="/" class="nav-link text-dark ps-0">Thông báo khoa học</a>
            </li>
            <li class="border-bottom list-unstyled actives">
              <a href="/" class="nav-link text-dark ps-0">Hoạt động khoa học</a>
            </li>
            <li class="border-bottom list-unstyled actives">
              <a href="/" class="nav-link text-dark ps-0"
                >Hội nghị, hội thảo khoa học</a
              >
            </li>
          </ul>
          <ul class="ps-0 mt-4">
            <li class=" list-unstyled">
              <p class="fw-bold"><span style="display: inline-block; width: 30px; height: 10px; background: #63b5f3; margin-right: 5px;"></span>VIDEO</p>
            </li>
            <li class="mt-4 list-unstyled">
              <iframe
                class="w-100"
                src="https://www.youtube.com/embed/pBt_AVvSlco"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
              <a
                href="https://www.youtube.com/embed/pBt_AVvSlco"
                class="nav-link text-dark ps-0"
                >Hội thảo khoa học: Chẩn đoán, điều trị đau vai</a
              >
            </li>
            <li class="mt-4 list-unstyled">
              <iframe
                class="w-100"
                src="https://www.youtube.com/embed/KNkZYlEy5_M"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
              <a
                href="https://www.youtube.com/embed/pBt_AVvSlco"
                class="nav-link text-dark ps-0"
                >Hội thảo khoa học: Điều trị suy tim mãn tính</a
              >
            </li>
            <li class="mt-4 list-unstyled">
              <iframe
                class="w-100"
                src="https://www.youtube.com/embed/aB203bCA0pw"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
              <a
                href="https://www.youtube.com/embed/pBt_AVvSlco"
                class="nav-link text-dark ps-0"
                >Hội thảo khoa học: Chiến lược điều trị Gerd</a
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-9">
          <h1 style="font-size: 25px" class="mt-4">
            Hội thảo khoa học trực tuyến: Chẩn đoán và điều trị ngủ ngáy và
            ngừng thở khi ngủ
          </h1>
          <p style="font-size: 13px">
            <i class="far fa-clock me-1"></i>07:23AM 16/10/2021
          </p>

          <p style="text-align: justify">
            Chiều ngày 15/10/2021 tại Hội trường 2 - Vitam đã diễn ra buổi Hội
            thảo khoa học trực tuyến với chủ đề: Chẩn đoán và điều trị ngủ ngáy
            và ngừng thở khi ngủ.
            <br />
            Tham dự buổi Hội thảo có Giáo sư Srinivas Kishore chuyên gia Tai mũi
            họng, Bệnh viện AIG, Hyderabad, Ấn Độ, Giáo sư Yap Yoke Yeow chuyên
            gia Tai mũi họng, Bệnh viện hạng đặc biệt KPJ Johor, Malaysia, TS.
            Đoàn Thị Thanh Hà - Chủ nhiệm khoa Tai Mũi Họng, Bệnh viện Trung
            ương Quân đội 108, cùng đông đảo các Bác sỹ chuyên ngành Tai Mũi
            Họng của Bệnh viện Trung ương Quân đội 108.
            <br />
            Buổi Hội thảo khoa học có ba báo cáo: Báo cáo “ Đánh giá tình trạng
            của bệnh nhân ngủ ngáy và ngừng thở khi ngủ” do giáo sư Yap Yoke
            Yeow chuyên gia Tai mũi họng, Bệnh viện hạng đặc biệt KPJ Johor,
            Malaysia trình bày, báo cáo “Phẫu thuật mũi và amidan điều trị ngủ
            ngáy và ngừng thở khi ngủ” và báo cáo “Phẫu thuật màn hầu, lưỡi và
            đáy lưỡi điều trị ngủ ngáy và ngừng thở khi ngủ” do hai giáo sư
            Srinivas Kishore chuyên gia Tai Mũi Họng, Bệnh viện AIG, Hyderabad,
            Ấn Độ và Yap Yoke Yeow chuyên gia Tai Mũi Họng, Bệnh viện hạng đặc
            biệt KPJ Johor, Malaysia cùng trình bày.
          </p>
          <p class="mt-4">Một số hình ảnh Hội thảo khoa học</p>
          <img class="mt-2 d-block w-100" src="./img/a1-2.jpg" alt="" />

          <p class="mt-2" style="text-align: justify">
            Kết thúc buổi Hội thảo khoa học, các bác sĩ đến từ nhiều chuyên
            ngành khác nhau của Bệnh viện TWQĐ 108 đã thảo luận rất sôi nổi về
            các nội dung được đề cập trong buổi Hội thảo khoa học. Buổi hội thảo
            đã mang lại cái nhìn mới cho các bác sĩ chuyên ngành Tai Mũi Họng về
            chẩn đoán và điều trị bệnh nhân ngủ ngáy và ngừng thở khi ngủ.
          </p>

          <div class="row" style="margin-top: 100px">
            <div>
              <p>Chia sẻ</p>
              <div class="social d-flex">
                <a href=""
                  ><i
                    class="fab fa-facebook-square fs-2 me-2"
                    style="color: #587abe"
                  ></i
                ></a>
                <a href=""
                  ><i
                    class="fab fa-linkedin fs-2 me-2"
                    style="color: #2a8cc0"
                  ></i
                ></a>
                <a href=""
                  ><i
                    class="fab fa-twitter-square fs-2"
                    style="color: #63b5f3"
                  ></i
                ></a>
              </div>
            </div>
            <h2 class="fs-6 text-uppercase mt-2">Tin cùng chuyên mục</h2>
            <article class="col-sm-4 col-md-4 px-auto article-img">
              <img src="./img/noi khoa.JPG" alt="" class="w-100 rounded" />
              <a href="/" class="fw-bold text-dark text-decoration-none"
                >Hội thảo khoa học: Cập nhật tiên tiến điều trị nội khoa</a
              >
              <p style="font-size: 13px">
                <i class="far fa-clock me-1"></i>15:27PM 13/10/2021
              </p>
            </article>
            <article class="col-sm-4 col-md-4 px-auto article-img">
              <img src="./img/xo-phoi.JPG" alt="" class="w-100 rounded" />
              <a href="/" class="fw-bold text-dark text-decoration-none"
                >Hội thảo khoa học: Chẩn đoán điều trị Xơ phổi</a
              >
              <p style="font-size: 13px">
                <i class="far fa-clock me-1"></i>14:36PM 14/10/2021
              </p>
            </article>
            <article class="col-sm-4 col-md-4 px-auto article-img">
              <img src="./img/noi-soi.JPG" alt="" class="w-100 rounded" />
              <a href="/" class="fw-bold text-dark text-decoration-none">
                Hội thảo Khoa học: Những tiến bộ trong Nội soi
              </a>
              <p style="font-size: 13px">
                <i class="far fa-clock me-1"></i>08:16AM 15/10/2021
              </p>
            </article>
          </div>

          <div class="row">
            <div class="pagenavi">
              <ul class="d-flex ps-0 mt-4 mb-4">
                <li class="me-4 list-unstyled">
                  <span><i class="fas fa-chevron-left"></i></span>
                </li>
                <li class="me-4 list-unstyled">
                  <span class="text-white rounded text-center" style=" display: inline-block; width: 30px; height: 30px; background:#2a8cc0;">1</span>
                </li>
                <li class="me-4 list-unstyled">
                  <a href="/" class="text-decoration-none text-dark">2</a>
                </li>
                <li class="me-4 list-unstyled">
                  <a href="/" class="text-decoration-none text-dark">3</a>
                </li>
                <li class="me-4 list-unstyled">
                  <a href="/" class="text-decoration-none text-dark">4</a>
                </li>
                <li class="me-4 list-unstyled">
                  <span><i class="fas fa-chevron-right"></i></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    `;
  }
}
