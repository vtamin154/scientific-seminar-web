<?php
// session_start();

// include('connection.php');
include('authentication.php');
include('../header.php');

// add 
if (isset($_POST['addNew'])) {

    $specialty = $_POST['specialty'];
    $event = $_POST['event'];

    $query = "insert into login.event value (null, '$specialty', '$event')";
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

// edit 

if (isset($_POST['save'])) {
    $specialty = $_POST['specialty'];
    $event = $_POST['event'];
    $id = $_POST['id'];

    // echo "$specialty";
    $query_run = mysqli_query($connect, "update login.event set specialty = '$specialty', event = '$event' where id = '$id'");
}

// remove 
if (isset($_POST['del'])) {
    $id = $_POST['id'];

    $query = "delete from login.event where id = '$id'";
    $query_run = mysqli_query($connect, $query);

    // if ($query_run) {
    //     $_SESSION['message'] = "Delete success!";
    // } else {
    //     $_SESSION['message'] = "Error!";
    // }
}

// if (isset($_POST['search'])) {
//     $search = $_POST['search'];
//     $query = "select * from login.event where event like '%$search%' ";

//     $query_run = mysqli_query($connect, $query);

//     if (mysqli_num_rows($query_run) > 0) {
// while ($row = mysqli_fetch_assoc($query_run)) {
//     echo "
//     <tr>
//     <td>" . $row['specialty'] . "</td>
//     <td>" . $row['event'] . "</td>
//     </tr>
//     ";
// }
//         echo "ok";
//     } else {
//         echo "No result!";
//     }
// }
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
                        <h4>Hội thảo</h4>
                    </div>
                    <div class="card-body">

                        <input type="text" placeholder="Tìm kiếm" class="form-control w-25 d-inline " id="search" name="search" style="margin-top:0px" />

                        <button class="btn btn-info text-white mb-2 d-inline float-end" data-bs-toggle="modal" data-bs-target="#add" data-role="add">
                            Thêm sự kiện
                        </button>


                        <table class="table table-hover table-bordered" id="event_tbl">
                            <thead>
                                <tr class="tbl-item">
                                    <!-- <th scope="col">STT</th> -->
                                    <th scope="col">Chuyên khoa</th>
                                    <th scope="col">Sự kiện</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>

                            <tbody id="output">
                                <?php
                                $query = "select * from event";
                                $query_run = mysqli_query($connect, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                ?>
                                        <tr id="<?= $row['id']; ?>">
                                            <td data-target="specialty"><?= $row['specialty']; ?></td>
                                            <td data-target="event"><?= $row['event']; ?></td>

                                            <!-- edit button  -->
                                            <td>
                                                <button class="btn btn-warning" name="edit" data-id="<?= $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#edit" data-role="edit">Sửa</button>
                                            </td>

                                            <!-- edit button  -->
                                            <td>
                                                <button class="btn btn-danger" data-id="<?= $row['id']; ?>" name="remove" id="remove" data-bs-toggle="modal" data-bs-target="#delete" data-role="remove">Xóa</button>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>


                        <!-- add event  -->
                        <div class="modal fade" id="add" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-4">Thêm sự kiện</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                            <!-- &times; -->
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <!-- <form action="" method="POST"> -->
                                        <div class="form-group">
                                            <label>Chuyên khoa</label>
                                            <input type="text" name="specialty" class="form-control" id="specialtyNew">
                                        </div>

                                        <div class="form-group">
                                            <label>Sự kiện</label>
                                            <input type="text" name="event" class="form-control" id="eventNew">
                                        </div>

                                        <div class="modal-footer">
                                            <button class=" btn btn-secondary" data-bs-dismiss="modal">
                                                Hủy
                                            </button>
                                            <button class="btn btn-success" type="submit" name="addNew" id="addNew">
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
                                        <h4 class="modal-title mt-4">Sửa sự kiện</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal">
                                            <!-- &times; -->
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Chuyên khoa</label>
                                            <input type="text" name="specialty" id="specialty" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Sự kiện</label>
                                            <input type="text" name="event" id="event" class="form-control">
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
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- delete  -->
                        <div class="modal fade" id="delete" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title mt-4">Xóa sự kiện</h4>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                            <!-- &times; -->
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <h5>Bạn có chắc chắn muốn xóa?</h5>
                                        <div class="mt-3">
                                            <input type="hidden" id="idDel" class="form-control">
                                            <button class="btn btn-danger" name="delete" id="delete">
                                                Xóa
                                            </button>
                                            <button class="btn btn-default" type="button" data-bs-dismiss="modal">
                                                Hủy
                                            </button>
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
</div>

<script>
    // add 

    $(document).ready(function() {
        $(document).on('click', 'button[data-role=add]', function() {
            $('#add').modal('toggle');
        })

        $('#addNew').click(function() {
            var specialty = $('#specialtyNew').val();
            var event = $('#eventNew').val();
            var addNew = $('#addNew').val();

            // console.log("name" + event);
            $.ajax({
                url: 'event.php',
                method: 'post',
                data: {
                    specialty: specialty,
                    event: event,
                    addNew: addNew
                },
                success: function(response) {
                    // console.log(response);
                    var row = '<tr><td>' + specialty + '</td> <td>' + event + '</td> <td><button class="btn btn-warning" name="edit" data-id="<?= $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#edit" data-role="edit">Sửa</button></td><td><button class="btn btn-danger" data-id="<?= $row['id']; ?>" name="remove" data-bs-toggle="modal" data-bs-target="#delete" data-role="remove">Xóa</button></td> </tr>';
                    $('#event_tbl tr:last').after(row);
                    $('#add').modal('toggle');
                }
            });
        });
        // edit 
        $(document).on('click', 'button[data-role=edit]', function() {
            // alert($(this).data('id'));

            var id = $(this).data('id');
            var specialty = $('#' + id).children('td[data-target=specialty]').text();
            var event = $('#' + id).children('td[data-target=event]').text();

            $('#specialty').val(specialty);
            $('#event').val(event);
            $('#id').val(id);
            $('#edit').modal('toggle');
        });

        $('#save').click(function() {
            var id = $('#id').val();
            var specialty = $('#specialty').val();
            var event = $('#event').val();
            var save = $('#save').val();

            console.log(specialty);
            $.ajax({
                url: 'event.php',
                method: 'post',
                data: {
                    specialty: specialty,
                    event: event,
                    id: id,
                    save: save
                },
                success: function(response) {
                    // console.log(response);
                    $('#' + id).children('td[data-target=specialty]').text(specialty);
                    $('#' + id).children('td[data-target=event]').text(event);
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
                url: 'event.php',
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
        });

        // search 
        $('#search').keyup(function() {
            var text = $('#search').val();
            $.post('search.php', {
                data: text
            }, function(data) {
                $('#output').html(data);
                // console.log(data);
            })
        })
    });
</script>