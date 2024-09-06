<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<?php
include 'connection.php';

if (!$connection) {
    echo "failed to connect to database";
}
$query = "SELECT * FROM details";
$result = mysqli_query($connection, $query);
?>



<table class="table container mt-4 table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">employeeId</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $users) {
            ?>
            <tr>
                <td>
                    <?php echo $users['id'] ?>
                </td>
                <td>
                    <?php echo $users['Name'] ?>
                </td>
                <td>
                    <?php echo $users['Surname'] ?>
                </td>
                <td>
                    <?php echo $users['employeeid'] ?>
                </td>
                <td>
                    <a href="update.php?id=<?php echo $users['id']; ?>" class="btn btn-success">Update</a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $users['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>