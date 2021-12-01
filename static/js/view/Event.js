import AbstractView from './AbstractView.js';
export default class extends AbstractView {
  constructor() {
    super();
    // this.setTitle('Event');
  }
  async getHtml() {
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'static/js/view/event.php', false);
    ajax.send();
    document.body.innerHTML = ajax.responseText;

    // return `
    //     <div>
    //     <div class="container">
    //         <div class="row">
    //             <div class="col-lg-12">
    //                 <div class="card">
    //                     <div class="card-header">
    //                         <h4>Hội thảo</h4>
    //                     </div>
    //                     <div class="card-body">

    //                         <table class="table table-hover table-bordered">
    //                             <thead>
    //                                 <tr class="tbl-item">
    //                                     <!-- <th scope="col">STT</th> -->
    //                                     <th scope="col">Chuyên khoa</th>
    //                                     <th scope="col">Sự kiện</th>
    //                                     <th scope="col">Đăng ký</th>
    //                                 </tr>
    //                             </thead>

    //                             <tbody>
    //                                 <?php
    //                                 $query = "select * from event";
    //                                 $query_run = mysqli_query($connect, $query);
    //                                 if (mysqli_num_rows($query_run) > 0) {
    //                                     foreach ($query_run as $row) {
    //                                 ?>
    //                                         <tr id="<?= $row['id']; ?>">
    //                                             <td data-target="specialty"><?= $row['specialty']; ?></td>
    //                                             <td data-target="event"><?= $row['event']; ?></td>
    //                                             <td>
    //                                                 <!-- <button class="btn btn-info text-white mb-2">Đăng ký</button> -->
    //                                                 <a href="./admin/regisevents.php" class="btn btn-info text-white mb-2">Đăng ký
    //                                                 </a>
    //                                             </td>
    //                                         </tr>
    //                                 <?php
    //                                     }
    //                                 }
    //                                 ?>
    //                             </tbody>
    //                         </table>
    //                     </div>
    //                 </div>
    //             </div>
    //         </div>
    //     </div>
    // </div>
    //     `;
  }
}
