<?php
// session_start();

// include('connection.php');
include('authentication.php');
include('../header.php');

// add 
if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $degree = $_POST['degree'];
    $specialty = $_POST['specialty'];

    $query = "insert into speaker value (null, '$name', '$degree','$specialty')";
    $query_run = mysqli_query($connect, $query);

    // SET  @num := 0;

    // UPDATE login.speaker SET id = @num := (@num+1);

    // ALTER TABLE login.speaker AUTO_INCREMENT =1;
}

// edit 
// if (isset($_POST['degree'])) {
//     $name = $_POST['name'];
//     $degree = $_POST['degree'];
//     $specialty = $_POST['specialty'];
//     $id = $_POST['id'];

//     // echo "$specialty";
//     $query_run = mysqli_query($connect, "update login.speaker set specialty = '$specialty', name = '$name', degree = '$degree' where id = '$id'");

// if ($query_run) {
//     $_SESSION['message'] = "Update success!";
// } else {
//     $_SESSION['message'] = "Error!";
// }
// }

// remove 
if (isset($_POST['remove'])) {
    $id = $_POST['remove'];

    // if (isset($_POST['delete'])) {
    $query = "delete from login.speaker where id = '$id'";
    $query_run = mysqli_query($connect, $query);
    // }

    // if ($query_run) {
    //     $_SESSION['message'] = "Delete success!";
    // } else {
    //     $_SESSION['message'] = "Error!";
    // }
}
?>

<?php
include('message.php');
?>
<div>
    <div class="container-fluid">
        <div class="row">
            <?php
            include('sidebar.php');
            ?>
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Diễn giả</h4>
                    </div>
                    <div class="card-body">

                        <button class="btn btn-info text-white mb-2" data-bs-toggle="modal" data-bs-target="#add">
                            Thêm diễn giả
                        </button>

                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="tbl-item">
                                    <!-- <th scope="col">STT</th> -->
                                    <th scope="col">Tên diễn giả</th>
                                    <th scope="col">Học vị</th>
                                    <th scope="col">Chuyên ngành</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "select * from speaker";
                                $query_run = mysqli_query($connect, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                ?>
                                        <tr id="<?= $row['id']; ?>">
                                            <td data-target="name"><?= $row['name']; ?></td>
                                            <td data-target="degree"><?= $row['degree']; ?></td>
                                            <td data-target="specialty"><?= $row['specialty']; ?></td>
                                            <td>
                                                <!-- <form action="" method="get"> -->
                                                <button class="btn btn-warning" name="edit" data-id="<?= $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#edit" data-role="edit">Sửa</button>

                                                <!-- </form> -->
                                            </td>
                                            <td>
                                                <form action="" method="post">
                                                    <button class="btn btn-danger" value="<?= $row['id']; ?>" name="remove">
                                                        <!-- data-bs-toggle="modal" data-bs-target="#delete"  -->
                                                        Xóa
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>

                        <!-- add speaker  -->

                        <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-4">Thêm diễn giả</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                            <!-- &times; -->
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label>Tên diễn giả</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Học vị</label>
                                                <input type="text" name="degree" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Chuyên ngành</label>
                                                <input type="text" name="specialty" class="form-control">
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
                        <div class="modal fade" id="edit" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-4">Sửa diễn giả</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal">
                                            <!-- &times; -->
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <!-- <form action=""> -->

                                        <div class="form-group">
                                            <label>Tên diễn giả</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Học vị</label>
                                            <input type="text" name="degree" id="degree" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Chuyên ngành</label>
                                            <input type="text" name="specialty" id="specialty" class="form-control">
                                        </div>

                                        <input type="hidden" id="id" class="form-control">

                                        <div class="modal-footer">
                                            <button class=" btn btn-secondary pull-left" data-bs-dismiss="modal">
                                                Hủy
                                            </button>

                                            <button class="btn btn-success" type="submit" name="save" id="save">
                                                Cập nhật
                                            </button>
                                        </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- delete  -->
                        <div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-4">Xóa diễn giả</h4>
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

<script>
    $(document).ready(function() {
        $(document).on('click', 'button[data-role=edit]', function() {
            // alert($(this).data('id'));

            var id = $(this).data('id');
            var name = $('#' + id).children('td[data-target=name]').text();
            var degree = $('#' + id).children('td[data-target=degree]').text();
            var specialty = $('#' + id).children('td[data-target=specialty]').text();

            $('#name').val(name);
            $('#degree').val(degree);
            $('#specialty').val(specialty);
            $('#id').val(id);
            $('#edit').modal('toggle');
        });

        $('#save').click(function() {
            var id = $('#id').val();
            var name = $('#name').val();
            var degree = $('#degree').val();
            var specialty = $('#specialty').val();

            console.log(specialty);
            $.ajax({
                url: 'speaker.php',
                method: 'post',
                data: {
                    name: name,
                    degree: degree,
                    specialty: specialty,
                    id: id
                },
                success: function(response) {
                    // console.log(response);
                    $('#' + id).children('td[data-target=name]').text(name);
                    $('#' + id).children('td[data-target=degree]').text(degree);
                    $('#' + id).children('td[data-target=specialty]').text(specialty);
                    $('#edit').modal('toggle');
                    // console.log(specialty);
                }
            })
        })
    })
</script>