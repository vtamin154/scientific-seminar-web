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
    <section class="container-fluid content">
      <div class="row">
        <div class="col-md-8 col-sm-10 mx-auto">
          <!-- mx-auto - center -->
          <h2 class="text-white ms-md-4 text-uppercase">
            hội thảo khoa học: tiếp cận khác biệt cuộc sống tốt 
          </h2>
          <p class="text-white ms-md-4">
            Vitam là một cộng đồng quốc gia bao gồm các bác sĩ và chuyên gia có
            bề dày kinh nghiệm về y tế, giáo dục cho các bác sĩ và y tá, mang
            đến cho họ một hành trình giáo dục hoàn chỉnh.
          </p>
        </div>

        <div class="col-md-8 mx-auto button">
          <div class="row justify-content-between">
            <a
              class="nav-link btn mb-3 text-white col-sm-3 col-md-3 mx-auto"
              href="#"
              >Tham gia ngay</a
            >
          </div>
        </div>
      </div>
      <!-- </div> -->
    </section>

    <!-- event  -->
    <section class="container event" id="event">
      <div class="row shadow py-4">
        <div class="col-sm-12 col-md-2 mx-auto my-auto">
          <img
            class="d-block my-4 mx-auto"
            src="img/doorstepctathumbnail.png"
          />
        </div>
        <div class="col-sm-12 col-md-7 my-auto mx-auto">
          <h2>
            Tham dự cuộc họp năm 2021: Sinh học tế bào của quá trình tái tạo và
            sửa chữa thần kinh
          </h2>
          <p class="mb-4">
            Cuộc họp Vitam 2021 sẽ tập trung vào sinh học tế bào của quá trình
            cân bằng nội môi, thoái hóa thần kinh và tái tạo tế bào thần kinh,
            với các cuộc thảo nghiên cứu thú vị từ các chuyên gia trong lĩnh vực
            này.
          </p>
          <p class="mb-5">
            Hạn cuối cùng để đăng ký là <strong>ngày 15 tháng 11.</strong>
          </p>
          <div class="button mb-3">
            <a href="#" class="btn">Tìm hiểu thêm</a>
          </div>
        </div>
      </div>
    </section>

    <!-- mission -->
    <section class="d-flex flex-wrap mission" id="mission">
      <div class="col-lg-6">
        <img src="img/Doctors stock.jpg" alt="" class="w-100" />
      </div>
      <div class="col-lg-6 py-4 px-4 text-white">
        <h2 class="text-uppercase">Nhiệm vụ</h2>
        <p class="text-justify">
          Nhiệm vụ của Vitam là cung cấp thông tin mới cập nhật, củng cố và mở
          rộng cơ sở kiến ​​thức của các chuyên gia bằng cách phát triển và cung
          cấp các hoạt động giáo dục trên toàn quốc.
          <br />
          Đội ngũ bác sĩ dày dặn kinh nghiệm đảm bảo sẽ truyền tải các kiến thức
          mới nhất và hướng dẫn thực hành chuyên nghiệp.
          <br />
          Hiệp hội Vitam hợp tác chặt chẽ với các trường đại học , Cơ quan Y tế
          địa phương, liên tục tìm kiếm các quan hệ đối tác khoa học đảm bảo nội
          dung mang tính thời sự và vô giá. Vitam còn tinh chỉnh cấu trúc giảng
          dạy của các hoạt động giáo dục, cung cấp các chương trình trực tiếp và
          trực tuyến tiếp cận người dùng rộng rãi hơn, đảm bảo đào tạo hiệu quả,
          cải thiện cuộc sống của bệnh nhân.
        </p>
      </div>
    </section>

    <!-- goals -->
    <section class="d-flex flex-wrap goals" id="goals">
      <div class="col-lg-6 my-auto px-4 py-4">
        <h2 class="text-uppercase">Mục tiêu</h2>
        <p class="text-justify">
          Mục tiêu của Vitam là xác định nhu cầu của các chuyên gia chăm sóc sức
          khỏe và cải thiện cơ hội học tập của họ.
          <br />
          Các chương trình giáo dục được nâng cao hơn nữa nhờ sự tham gia của
          các giảng viên chuyên gia.
          <br />
          Kinh nghiệm thu được trong nhiều năm đã cho phép chúng tôi tổ chức các
          cuộc họp và hội nghị trong nước và Quốc tế cho những người tham gia từ
          khắp nơi trên cả nước.
        </p>
      </div>
      <div class="col-lg-6">
        <img src="img/anh 1 to 5 1.jpg" alt="" class="w-100" />
      </div>
    </section>

    <!-- featured articles -->
    <section class="container articles mt-4" id="posts">
      <div class="row">
        <h2 class="text-uppercase">Các bài báo nổi bật</h2>
        <div class="col-lg-4 my-4">
          <div>
            <img
              class="w-100 rounded"
              src="img/noi khoa.JPG"
              class="d-block mx-auto"
            />
          </div>
          <div>
            <h4 class="mt-4 text-justify">
              Hội thảo trực tuyến: Điều trị ngủ ngáy và ngừng thở khi ngủ
            </h4>
            <p class="text-justify">
              Buổi Hội thảo khoa học có ba báo cáo: Báo cáo “ Đánh giá tình
              trạng của bệnh nhân ngủ ngáy và ngừng thở khi ngủ” do giáo sư Yap
              Yoke Yeow chuyên gia Tai mũi họng, Bệnh viện hạng đặc biệt KPJ
              Johor, Malaysia trình bày, báo cáo “Phẫu thuật mũi và…”
            </p>
          </div>
          <a class="nav-link" href="/article" data-link
            ><i class="fas fa-arrow-right ms-2"></i>Đọc thêm</a
          >
        </div>
        <div class="col-lg-4 my-4">
          <div>
            <img
              src="img/ung thu thuc quan.JPG"
              class="d-block mx-auto w-100 rounded"
            />
          </div>
          <div>
            <h4 class="mt-4 text-justify">
              Hội thảo khoa học: Cập nhật tiến bộ điều trị ung thư thực quản
            </h4>
            <p class="text-justify">
              Tham dự buổi Hội thảo khoa học có GS.TS. Mai Hồng Bàng - Giám đốc
              Bệnh viện Trung ương Quân đội 108, PGS.TS Nguyễn Anh Tuấn - Phó
              Viện trưởng Viện Phẫu thuật tiêu hóa - Bệnh viện Trung ương Quân
              đội 108, PGS. TS. Phạm Đức Huấn…
            </p>
          </div>
          <a href="/" class="nav-link" data-link><i class="fas fa-arrow-right"></i>Đọc thêm</a>
        </div>
        <div class="col-lg-4 my-4">
          <div>
            <img
              src="img/xet nghiem nuoc tieu.JPG"
              class="d-block mx-auto w-100 rounded"
            />
          </div>
          <div>
            <h4 class="mt-4 text-justify">
              Hội thảo khoa học: Ứng dụng lâm sàng của xét nghiệm cặn lắng nước
              tiểu
            </h4>
            <p class="text-justify">
              Tham dự buổi Hội thảo khoa học có PGS.TS. Lý Tuấn Khải – Chủ nhiệm
              khoa Huyết học - Bệnh viện Trung ương Quân đội 108, PGS. TS. Hà
              Phan Hải An - Phó Chủ tịch Hội thận học Việt Nam, BSCC. BSCKII Vũ
              Văn Trường - PGĐ Trung tâm Huyết học…
            </p>
          </div>
          <a href="/" class="nav-link" data-link><i class="fas fa-arrow-right"></i>Đọc thêm</a>
        </div>
        <div class="col-lg-4 my-4">
          <div>
            <img
              src="img/thuoc khang ket.JPG"
              class="d-block mx-auto w-100 rounded"
            />
          </div>
          <div>
            <h4 class="mt-4 text-justify">
              Hội thảo khoa học: Vai trò của thuốc kháng kết tập tiểu cầu trong
              bệnh mạch vành
            </h4>
            <p class="text-justify">
              Buổi Hội thảo khoa học có ba báo cáo: Báo cáo “Liệu pháp xuống
              thang thuốc kháng P2Y12 trong hội chứng vành cấp” do PGS.TS. Lê
              Văn Trường - Viện trưởng Viện Tim Mạch…
            </p>
          </div>
          <a href="/" class="nav-link" data-link><i class="fas fa-arrow-right"></i>Đọc thêm</a>
        </div>
        <div class="col-lg-4 my-4">
          <div>
            <img src="img/xo phoi.JPG" class="d-block mx-auto w-100 rounded" />
          </div>
          <div>
            <h4 class="mt-4 text-justify">
              Hội thảo khoa học: Chẩn đoán và điều trị Xơ phổi vô căn
            </h4>
            <p class="text-justify">
              Với mong muốn triển khai các giải pháp nâng cao chất lượng trong
              chẩn đoán và điều trị bệnh nhân Xơ phổi vô căn, Chiều ngày
              12/11/2020 tại Hội trường 2 Bệnh viện Trung ương Quân đội 108 đã
              tổ chức Hội thảo khoa học với chủ đề…
            </p>
          </div>
          <a href="/" class="nav-link" data-link><i class="fas fa-arrow-right"></i>Đọc thêm</a>
        </div>
        <div class="col-lg-4 my-4">
          <div class="mx-auto">
            <img
              src="img/soi mat tuy.JPG"
              class="d-block mx-auto w-100 rounded"
            />
          </div>
          <div>
            <h4 class="mt-4 text-justify">
              Hội thảo Khoa học: Những tiến bộ trong Nội soi mật tụy ngược dòng
            </h4>
            <p class="text-justify">
              Hội thảo trực tuyến lần này được tổ chức bởi Hội Nội soi Tiêu hóa
              châu Á Thái Bình Dương (APSDE), Liên Chi hội Nội soi tiêu hóa Việt
              Nam (VFDE) kết hợp với Viện điều trị các bệnh tiêu hóa- Bệnh viện
              Trung ương Quân đội 108. Tham dự…
            </p>
          </div>
          <a href="/" class="mx-3 nav-link" data-link
            ><i class="fas fa-arrow-right"></i>Đọc thêm</a
          >
        </div>
        <div class="button my-4 mx-3">
          <a class="btn">Bài viết khác</a>
        </div>
      </div>
    </section>

    <!-- dien gia  -->
    <section class="teams container my-4" id="teams">
        <h2 class="text-uppercase fs-1">Diễn giả</h2>
        <div class="cover owl-cover row ">
          <div class="card text-white col-lg-4">
            <div class="box">
              <img src="./img/ts-tran-thai-ha-105953-140520-57.jpg" alt="" />
              <p>Nguyen Thai Ha</p>
              <p>PGS-TS</p>
            </div>
          </div>
          <div class="card text-white col-lg-4">
            <div class="box">
              <img src="./img/ts-tran-thai-ha-105953-140520-57.jpg" alt="" />
              <p>Nguyen Thai Ha</p>
              <p>PGS-TS</p>
            </div>
          </div>
          <div class="card text-white col-lg-4">
            <div class="box">
              <img src="./img/ts-tran-thai-ha-105953-140520-57.jpg" alt="" />
              <p>Nguyen Thai Ha</p>
              <p>PGS-TS</p>
            </div>
          </div>
           
      </div>
    </section>

    <!-- activities areas -->
    <section class="activities container-fluid">
      <h2 class="text-center text-uppercase my-4">Chuyên khoa</h2>
      <div class="row">
        <div class="col-lg-4 mt-2">
          <div
            style="
              background-image: url(https://www.scientificseminars.com/wp-content/uploads/2019/07/cardiology_800x533.jpg);
            "
            class="bg-img"
          ></div>
          <div class="hover">
            <a href="/tim" data-link class="nav-link">TIM MẠCH</a>
          </div>
        </div>

        <div class="col-lg-4 mt-2">
          <div
            style="
              background-image: url(https://www.scientificseminars.com/wp-content/uploads/2019/07/endocrinology_960x640.jpg);
            "
            class="bg-img"
          ></div>
          <div class="hover">
            <a href="/noi-tuyen" data-link class="nav-link">NỘI TUYẾN</a>
          </div>
        </div>
        <div class="col-lg-4 mt-2">
          <div
            style="
              background-image: url(https://www.scientificseminars.com/wp-content/uploads/2019/07/reproductive_medicine_800x600.jpg);
            "
            class="bg-img"
          ></div>
          <div class="hover">
            <a href="/sinh-san" data-link class="nav-link"> SINH SẢN</a>
          </div>
        </div>
      </div>

      <div class="row mt-lg-4">
        <div class="col-lg-6 mt-2">
          <div
            style="
              background-image: url(https://www.scientificseminars.com/wp-content/uploads/2019/07/oncology_800x600.jpg);
            "
            class="bg-img"
          ></div>
          <div class="hover">
            <a href="/ung-thu" data-link class="nav-link">UNG THƯ</a>
          </div>
        </div>
        <div class="col-lg-6 mt-2">
          <div
            style="
              background-image: url(https://www.scientificseminars.com/wp-content/uploads/2019/07/neurology_800x455.jpg);
              width: 100%;
            "
            class="bg-img"
          ></div>
          <div class="hover">
            <a href="/than-kinh" data-link class="nav-link">THẦN KINH HỌC</a>
          </div>
        </div>
      </div>

      <div class="row mt-lg-4">
        <div class="col-lg-4 mt-2">
          <div
            style="
              background-image: url(https://www.scientificseminars.com/wp-content/uploads/2019/07/dermatology_960x640.jpg);
            "
            class="bg-img"
          ></div>
          <div class="hover">
            <a href="/da-lieu" data-link class="nav-link">DA LIỄU</a>
          </div>
        </div>
        <div class="col-lg-4 mt-2">
          <div
            style="
              background-image: url(https://www.scientificseminars.com/wp-content/uploads/2019/07/psicology_960x640.jpg);
            "
            class="bg-img"
          ></div>
          <div class="hover">
            <a href="/tam-ly" class="nav-link" data-link>TÂM LÝ</a>
          </div>
        </div>
        <div class="col-lg-4 mt-2">
          <div
            style="
              background-image: url(https://www.scientificseminars.com/wp-content/uploads/2019/07/cardiometabolic_800x600-1.jpg);
            "
            class="bg-img"
          ></div>
          <div class="hover">
            <a href="/mau" class="nav-link" data-link>MÁU</a>
          </div>
        </div>
      </div>
    </section>

    <!-- contact  -->
    <section class="container contact">
      <div class="row">
        <div class="col-lg-5">
          <h2 class="fs-1 text-uppercase">Đăng ký</h2>
          <p>Hãy tham gia với chúng tôi ngay để có thêm hiểu biết, giao lưu và gặp gỡ những chuyên gia y tế hàng đầu Việt Nam</p>
          <p>Mọi thắc mắc xin liên hệ qua</p>
        </div>
        <div class="col-lg-7">
          <form action="connection.php" method="post">
            <div class="fields">
                <div class="field name">
                    <input type="text" placeholder="Tên" required name="username">
                </div>
                <div class="field email">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
            </div>
            
            <div class="field textarea">
                <textarea cols="30" rows="10" placeholder="Tin nhắn..." required name="mota"></textarea>
            </div>
            <div class="button-area">
                <button type="submit">Gửi</button>
            </div>
        </form>
        </div>
      </div>
    </section>
    `;
  }
}
