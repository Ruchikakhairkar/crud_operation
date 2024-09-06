<?php error_reporting(0); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<?php
include 'connection.php';

$message = '';


// if (!$connection) {
//     echo "connection failed";
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!$connection) {
        echo "<div class='alert alert-danger'>Connection failed</div>";
        exit;
    }

    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $employeeId = $_POST['employeeId'];

    $insert = "INSERT INTO details (Name, Surname, employeeid) VALUES ('$name','$surname','$employeeId')";
    $query = mysqli_query($connection, $insert);

    if (!$query) {
        $message = "<div class='alert alert-danger'>Insert data failed: " . mysqli_error($connection) . "</div>";
    } else {
        $message = "<div class='alert alert-success'> Data Added Successfully</div>";
    }
}
?>


<form action="insert.php" method="post" class="container mt-5 p-4 border rounded shadow" style="max-width: 600px;">
    <h2 class="mb-4">Add New User</h2>

    <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" id="Name" name="Name" class="form-control" placeholder="Enter your name" required>
    </div>

    <div class="mb-3">
        <label for="Surname" class="form-label">Surname</label>
        <input type="text" id="Surname" name="Surname" class="form-control" placeholder="Enter your surname" required>
    </div>

    <div class="mb-4">
        <label for="employeeId" class="form-label">Employee ID</label>
        <input type="text" id="employeeId" name="employeeId" class="form-control" placeholder="Enter your employee ID"
            required>
    </div>

    <button type="submit" class="btn btn-success mb-4" name="submit">SUBMIT</button>

    <?php if ($message): ?>
        <?php echo $message; ?>
    <?php endif; ?>
</form>