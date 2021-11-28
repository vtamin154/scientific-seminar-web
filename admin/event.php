<?php
include('connection.php');
include('../header.php');

if (isset($_POST['add'])) {

    $specialty = $_POST['specialty'];
    $event = $_POST['event'];

    $query = "insert into event value (null, '$specialty', '$event')";
    $query_run = mysqli_query($connect, $query);

    // if ($query_run) {
    //     $message = "Add event success!";
    //     echo "<script type='text/javascript'>alert('$message');</script>";
    // } else {
    //     echo "Can't add event!";
    // }



    // SET  @num := 0;

    // UPDATE login.event SET id = @num := (@num+1);

    // ALTER TABLE login.event AUTO_INCREMENT =1;
}
if (isset($_POST['remove'])) {
    $id = $_POST['remove'];

    $query = "delete from login.event where id = '$id'";
    $query_run = mysqli_query($connect, $query);

    // if ($query_run) {
    //     $message = "Delete event success!";
    //     echo "<script type='text/javascript'>alert('$message');</script>";
    // } else {
    //     echo "Can't delete event!";
    // }
}
?>

<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Event</h4>
                    </div>
                    <div class="card-body">

                        <button class="btn btn-info text-white mb-2" data-bs-toggle="modal" data-bs-target="#add">
                            Thêm sự kiện
                        </button>

                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="tbl-item">
                                    <!-- <th scope="col">STT</th> -->
                                    <th scope="col">Chuyên khoa</th>
                                    <th scope="col">Sự kiện</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "select * from event";
                                $query_run = mysqli_query($connect, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                ?>
                                        <tr>
                                            <td><?= $row['specialty']; ?></td>
                                            <td><?= $row['event']; ?></td>
                                            <td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">Sửa</button></td>
                                            <td>
                                                <form action="" method="post">
                                                    <button class="btn btn-danger"  value="<?= $row['id']; ?>" name="remove">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>

                        <!-- add event  -->

                        <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-4">Sửa sự kiện</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                            <!-- &times; -->
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label>Chuyên khoa</label>
                                                <input type="text" name="specialty" placeholder="Chuyên khoa" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Sự kiện</label>
                                                <input type="text" name="event" placeholder="Sự kiện" class="form-control">
                                            </div>

                                            <div class="modal-footer">
                                                <button class=" btn btn-secondary" data-bs-dismiss="modal">
                                                    Hủy
                                                </button>
                                                <button class="btn btn-success" data-bs-dismiss="modal" type="submit" name="add">
                                                    Ok
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- edit  -->
                        <div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-4">Thêm sự kiện</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                            <!-- &times; -->
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label>Chuyên khoa</label>
                                                <input type="text" name="specialty" placeholder="Chuyên khoa" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Sự kiện</label>
                                                <input type="text" name="event" placeholder="Sự kiện" class="form-control">
                                            </div>

                                            <div class="modal-footer">
                                                <button class=" btn btn-secondary" data-bs-dismiss="modal">
                                                    Hủy
                                                </button>
                                                <button class="btn btn-success" data-bs-dismiss="modal" type="submit" name="submit">
                                                    Ok
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- remove  -->
                        <div class="modal fade" id="remove" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-4">Xóa sự kiện</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                            <!-- &times; -->
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="#" method="POST">
                                            <h5>Bạn có chắc chắn muốn xóa?</h5>
                                            <div class="mt-3">
                                                <button class="btn btn-danger" data-bs-dismiss="modal" name="delete">
                                                    Xóa
                                                </button>
                                                <button class="btn btn-default" type="button" data-bs-dismiss="modal">
                                                    Hủy
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>