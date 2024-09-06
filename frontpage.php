<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .main-heading {
            margin-top: 20px;
            color: #343a40;
        }

        .section-heading {
            margin-top: 30px;
            margin-bottom: 20px;
            color: #495057;
        }

        .description,
        .features {
            margin-top: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .description h3,
        .features h3 {
            color: #007bff;
        }

        .list-group-item {
            background-color: #e9ecef;
            border: none;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center main-heading">
            <h1 class="display-4">CRUD Operation Project</h1>
        </div>

        <div class="section-heading">
            <h2>Project Overview</h2>
            <p>This project demonstrates a basic implementation of CRUD (Create, Read, Update, Delete) operations using
                various web technologies.</p>
        </div>

        <div class="description">
            <h3>Technologies Used</h3>
            <ul class="list-group">
                <li class="list-group-item">HTML: For structuring the web pages.</li>
                <li class="list-group-item">CSS: For styling and layout.</li>
                <li class="list-group-item">Bootstrap: For responsive design and ready-to-use components.</li>
                <li class="list-group-item">PHP: For server-side scripting and interaction with the database.</li>
                <li class="list-group-item">MySQL: For data storage and management.</li>
            </ul>
        </div>

        <div class="features">
            <h3>Features</h3>
            <ul class="list-group">
                <li class="list-group-item">Create: Insert new data into the database.</li>
                <li class="list-group-item">Read: Display existing data in a tabular format.</li>
                <li class="list-group-item">Update: Modify existing data.</li>
                <li class="list-group-item">Delete: Remove data from the database.</li>
            </ul>
        </div>

        <div class="section-heading">
            <h3>How It Works</h3>
            <p>Create Data: <a href="create.php" class="btn btn-primary">Click here</a> to add new records to the
                database.</p>
            <p>Read Data: <a href="read.php" class="btn btn-primary">Click here</a>to read data.</p>
        </div>


    </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .main-heading {
            margin-top: 20px;
            color: #343a40;
        }

        .section-heading {
            margin-top: 30px;
            margin-bottom: 20px;
            color: #495057;
        }

        .description,
        .features,
        .how-it-works {
            margin-top: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .description h3,
        .features h3,
        .how-it-works h3 {
            color: #007bff;
        }

        .list-group-item {
            background-color: #e9ecef;
            border: none;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .how-it-works {
            background: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .how-it-works .btn-custom {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
            margin-right: 10px;
        }

        .how-it-works .btn-custom:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center my-5">
            <h1 class="display-4">CRUD Operation Project</h1>
        </div>
        <div class="section-heading">
            <h2>Project Overview</h2>
            <p>This project demonstrates a basic implementation of CRUD (Create, Read, Update, Delete) operations using
                various web technologies.</p>
        </div>

        <div class="description">
            <h3>Technologies Used</h3>
            <ul class="list-group">
                <li class="list-group-item">HTML: For structuring the web pages.</li>
                <li class="list-group-item">CSS: For styling and layout.</li>
                <li class="list-group-item">Bootstrap: For responsive design and ready-to-use components.</li>
                <li class="list-group-item">PHP: For server-side scripting and interaction with the database.</li>
                <li class="list-group-item">MySQL: For data storage and management.</li>
            </ul>
        </div>

        <div class="features">
            <h3>Features</h3>
            <ul class="list-group">
                <li class="list-group-item">Create: Insert new data into the database.</li>
                <li class="list-group-item">Read: Display existing data in a tabular format.</li>
                <li class="list-group-item">Update: Modify existing data.</li>
                <li class="list-group-item">Delete: Remove data from the database.</li>
            </ul>
        </div>


        <div class="how-it-works p-4">
            <h3 class="text-center mb-4">How It Works</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="d-flex flex-column align-items-center text-center">
                        <p>Create Data:</p>
                        <a href="create.php" class="btn btn-custom">Add New Records</a>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="d-flex flex-column align-items-center text-center">
                        <p>Read Data:</p>
                        <a href="read.php" class="btn btn-custom">View Existing Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>