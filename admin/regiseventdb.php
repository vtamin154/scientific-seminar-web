<?php
include('connection.php');
include('../header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Registered event</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">SĐT</th>
                                <th scope="col">Ngày tham dự</th>
                                <th scope="col">Sự kiện</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "select * from eventregisted";
                            $query_run = mysqli_query($connect, $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $row) {
                            ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['name']; ?></td>
                                        <td><?= $row['phone']; ?></td>
                                        <td><?= $row['date']; ?></td>
                                        <td><?= $row['event']; ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>