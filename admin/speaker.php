<?php
// session_start();

// include('connection.php');
include('authentication.php');
include('../header.php');

// add 
if (isset($_POST['addNew'])) {

    $name = $_POST['name'];
    $degree = $_POST['degree'];
    $specialty = $_POST['specialty'];

    $query = "insert into login.speaker value (null, '$name', '$degree','$specialty')";
    $query_run = mysqli_query($connect, $query);

    // SET  @num := 0;

    // UPDATE login.speaker SET id = @num := (@num+1);

    // ALTER TABLE login.speaker AUTO_INCREMENT =1;
}

// edit 
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $degree = $_POST['degree'];
    $specialty = $_POST['specialty'];
    $id = $_POST['id'];

    $query_run = mysqli_query($connect, "update login.speaker set specialty = '$specialty', name = '$name', degree = '$degree' where id = '$id'");

    // if ($query_run) {
    //     $_SESSION['message'] = "Update success!";
    // } else {
    //     $_SESSION['message'] = "Error!";
    // }
}

// remove 
if (isset($_POST['del']) != '') {
    $id = $_POST['id'];

    // if (isset($_POST['delete'])) {
    $query = "delete from login.speaker where id = '$id'";
    $query_run = mysqli_query($connect, $query);
    // }

}
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

                        <button class="btn btn-info text-white mb-2" data-bs-toggle="modal" data-bs-target="#add" data-role="add">
                            Thêm diễn giả
                        </button>

                        <table class="table table-hover table-bordered" id="speaker">
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
                                                <!-- <form action="" method="post"> -->
                                                <button class="btn btn-danger" data-id="<?= $row['id']; ?>" name="remove" data-bs-toggle="modal" data-bs-target="#delete" data-role="remove">
                                                    Xóa
                                                </button>
                                                <!-- </form> -->
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>

                        <!-- add speaker  -->
                        <div class="modal fade" id="add" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-4">Thêm diễn giả</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                            <!-- &times; -->
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <!-- <form action="" method="POST"> -->
                                        <div class="form-group">
                                            <label>Tên diễn giả</label>
                                            <input type="text" name="name" class="form-control" id="nameNew">
                                        </div>

                                        <div class="form-group">
                                            <label>Học vị</label>
                                            <input type="text" name="degree" class="form-control" id="degreeNew">
                                        </div>

                                        <div class="form-group">
                                            <label>Chuyên ngành</label>
                                            <input type="text" name="specialty" class="form-control" id="specialtyNew">
                                        </div>

                                        <div class="modal-footer">
                                            <button class=" btn btn-secondary" data-bs-dismiss="modal">
                                                Hủy
                                            </button>
                                            <button class="btn btn-success" id="addNew" type="submit" name="addNew">
                                                Ok
                                            </button>
                                        </div>
                                        <!-- </form> -->
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
                                            <button class=" btn btn-secondary" data-bs-dismiss="modal">
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
                        <div class="modal fade" id="delete" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-4">Xóa diễn giả</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                            <!-- &times; -->
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <!-- <form action="#" method="POST"> -->
                                        <h5>Bạn có chắc chắn muốn xóa?</h5>
                                        <div class="mt-3">
                                            <input type="hidden" id="idDel" class="form-control">
                                            <button class="btn btn-danger" name="delete" id="delete">
                                                Xóa
                                            </button>
                                            <button class=" btn btn-secondary">
                                                Hủy
                                            </button>
                                        </div>
                                        <!-- </form> -->
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
        // add 
        $(document).on('click', 'button[data-role=add]', function() {
            $('#add').modal('toggle');
        })

        $('#addNew').click(function() {
            var name = $('#nameNew').val();
            var degree = $('#degreeNew').val();
            var specialty = $('#specialtyNew').val();
            var addNew = $('#addNew').val();

            console.log("name" + degree);
            $.ajax({
                url: 'speaker.php',
                method: 'post',
                data: {
                    name: name,
                    degree: degree,
                    specialty: specialty,
                    addNew: addNew
                },
                success: function(response) {
                    // console.log(response);
                    var row = '<tr><td>' + name + '</td> <td>' + degree + '</td> <td>' + specialty + '</td> <td><button class="btn btn-warning" name="edit" data-id="<?= $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#edit" data-role="edit">Sửa</button></td><td><button class="btn btn-danger" data-id="<?= $row['id']; ?>" name="remove" data-bs-toggle="modal" data-bs-target="#delete" data-role="remove">Xóa</button></td> </tr>';
                    $('#speaker tr:last').after(row);
                    $('#add').modal('toggle');
                }
            });
        });

        // edit 
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
            var save = $('#save').val();

            // console.log(specialty);
            $.ajax({
                url: 'speaker.php',
                method: 'post',
                data: {
                    name: name,
                    degree: degree,
                    specialty: specialty,
                    id: id,
                    save: save
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
        });

        // remove 
        $(document).on('click', 'button[data-role=remove]', function() {
            // alert($(this).data('id'));

            var id = $(this).data('id');
            $('#idDel').val(id);
            // console.log('id = ' + id);
            $('#delete').modal('toggle');
        });

        $('#delete').click(function() {
            var id = $('#idDel').val();
            var del = $('#delete').val();

            console.log(del);
            $.ajax({
                url: 'speaker.php',
                method: 'post',
                data: {
                    id: id,
                    del: del
                },
                success: function(response) {
                    // console.log(response);
                    $('#' + id).remove();
                    $('#delete').modal('toggle');
                }
            });
        })

    })
</script>