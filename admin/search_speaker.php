<?php
include('connection.php');
if (isset($_POST['data'])) {
    $search = $_POST['data'];
    $query = "select * from speaker where name like '%$search%'";

    $query_run = mysqli_query($connect, $query);

    if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_array($query_run)) {
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
    } else {
        echo "Không có kết quả!";
    }
}

?>