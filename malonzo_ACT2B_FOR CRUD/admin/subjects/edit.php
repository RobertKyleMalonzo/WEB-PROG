<?php
session_start();
include "../../config/database.php";

// Only admin users can access this page.
if(!isset($_SESSION["role"]) || $_SESSION["role"] != "admin"){
    header("Location:../../index.php");
    exit;
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch subject record using prepared statement
$stmt = mysqli_prepare($conn, "SELECT * FROM subjects WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$subject = mysqli_fetch_assoc($result);

if(!$subject){
    die('Subject not Found!');
}

$message = "";

if(isset($_POST['update'])){
    $subject_code = trim($_POST['subject_code']);
    $subject_name = trim($_POST['subject_name']);
    $units = intval($_POST['units']);

    // Define $sql and update record safely using a prepared statement
    $sql = "UPDATE subjects SET 
    subject_code = ?, 
    subject_name = ?, 
    units = ? 
    WHERE id = ?";
    $update_stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($update_stmt, "ssii", $subject_code, $subject_name, $units, $id);

    if(mysqli_stmt_execute($update_stmt)){
        header("Location: index.php");
        exit;
    } else {
        $message = "Could not Update!"; // Fixed variable typo ($messaage -> $message)
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subject Form</title>

    <!-- Bootstrap CSS -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Main Container -->
    <div class="container py-5" style="max-width: 700px;">

        <!-- Subject Form Card -->
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">

                <h2>Edit Subject Form</h2>
                
                <?php if($message != ""){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo htmlspecialchars($message); ?>
                    </div>
                <?php } ?>

                <!-- Form method set to POST -->
                <form method="POST" action="">

                    <!-- Subject Code -->
                    <div class="mb-3">
                        <label class="form-label">Subject Code</label>
                        <input type="text" class="form-control" name="subject_code" value="<?php echo htmlspecialchars($subject['subject_code']);?>" required>
                    </div>

                    <!-- Subject Name -->
                    <div class="mb-3">
                        <label class="form-label">Subject Name</label>
                        <input type="text" class="form-control" name="subject_name" value="<?php echo htmlspecialchars($subject['subject_name']);?>" required>
                    </div>

                    <!-- Units -->
                    <div class="mb-3">
                        <label class="form-label">Units</label>
                        <input type="number" class="form-control" name="units" min="1" value="<?php echo htmlspecialchars($subject['units']);?>" required>
                    </div>

                    <!-- Form Actions -->
                    <button type="submit" class="btn btn-primary" name="update">
                        Update Subject
                    </button>

                    <a href="index.php" class="btn btn-secondary">
                        Cancel
                    </a>

                </form>

            </div>
        </div>

    </div>

</body>
</html>