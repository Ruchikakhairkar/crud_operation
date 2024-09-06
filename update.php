<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<?php
include 'connection.php';

$message = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM details WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result || mysqli_num_rows($result) == 0) {
        echo "No record found for this ID";
        exit;
    }
    $users = mysqli_fetch_assoc($result);
} else {
    echo "ID parameter is missing";
    exit;
}

if (isset($_POST["submit"])) {
    $name = ($_POST['Name']);
    $surname = ($_POST['Surname']);
    $employeeid = ($_POST['employeeid']);

    $update = "UPDATE details SET Name='$name', Surname='$surname', employeeid='$employeeid' WHERE id = '$id'";

    $query = mysqli_query($connection, $update);
    // if (!$query) {
    //     echo "Update failed: " . mysqli_error($connection);
    // } else {
    //     echo "Update Successfully";
    // }

    if (!$query) {
        $message = "<div class='alert alert-danger'>Update failed: " . mysqli_error($connection) . "</div>";
    } else {
        $message = "<div class='alert alert-success'>Update Successfully</div>";
    }
}
?>


<form action="update.php?id=<?php echo $users['id']; ?>" method="post" class="container mt-5 p-4 border rounded shadow"
    style="max-width: 600px">
    <input type="hidden" name="id" value="<?php echo $users['id']; ?>">

    <h2 class="mb-4">Update User Information</h2>

    <div class="form-group mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" id="Name" name="Name" class="form-control" value="<?php echo $users['Name']; ?>"
            placeholder="Enter your name">
    </div>

    <div class="form-group mb-3">
        <label for="Surname" class="form-label">Surname</label>
        <input type="text" id="Surname" name="Surname" class="form-control" value="<?php echo $users['Surname']; ?>"
            placeholder="Enter your surname">
    </div>

    <div class="form-group mb-4">
        <label for="employeeid" class="form-label">Employee ID</label>
        <input type="text" id="employeeid" name="employeeid" class="form-control"
            value="<?php echo $users['employeeid']; ?>" placeholder="Enter your employee ID">
    </div>

    <input type="submit" class="btn btn-success mb-4" name="submit" value="UPDATE">

    <?php if ($message): ?>
        <?php echo $message; ?>
    <?php endif; ?>
</form>