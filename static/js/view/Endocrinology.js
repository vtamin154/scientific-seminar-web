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
          nội tuyến
        </div>
        <div
          class="col-lg-9 bg-img"
          style="
            background-image: url(./img/chemicals.jpg);
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
            background: url(./img/noi-tuyen.jpg);
            height: 150px;
            background-position: center;
            background-size: cover;
          "
        ></div>
        <div class="col-lg-7">
          <h3>Rối loạn tăng trưởng</h3>
          <p class="text-justify">
            Chuỗi bốn hội thảo trên web này sẽ bao gồm tất cả các khía cạnh của chẩn đoán và điều trị các rối loạn tầm vóc thấp lớn. Định nghĩa và chẩn đoán về tầm vóc thấp sẽ được mô tả, cùng với các hội chứng phổ biến nhất mà thiếu hụt tăng trưởng là một trong những triệu chứng của chúng.
          </p>
        </div>
        <div class="col-lg-2 button px-4 mt-1">
          <a href="/" class="btn text-white">Đăng ký</a>
        </div>
      </div>
      <div class="row">
        <div
          class="col-lg-3"
          style="
            background: url(./img/endo-landing-top-banner-mobile.jpg);
            height: 150px;
            background-position: center;
            background-size: cover;
          "
        ></div>
        <div class="col-lg-7">
          <h3>Hiểu biết về rối loạn tăng trưởng</h3>
          <p class="text-justify">
            Tăng trưởng là một trong những dấu hiệu sức khỏe quan trọng nhất trong thời thơ ấu và theo dõi phụ khoa là một cột mốc quan trọng của thực hành lâm sàng tốt cho các bác sĩ nhi khoa trên toàn thế giới. Thật vậy, nhiều bệnh mắc phải hoặc bẩm sinh ban đầu có thể chỉ biểu hiện khi tăng cân và / hoặc chiều cao kém.
          </p>
        </div>
        <div class="col-lg-2 button px-4 mt-1">
          <a href="/" class="btn text-white">Đăng ký</a>
        </div>
      </div>
    </section>
    `;
  }
}
