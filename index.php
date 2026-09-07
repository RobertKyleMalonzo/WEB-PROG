<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet">
</head>

<body>
<?php
    if(isset($_GET["info"])){
        echo $_GET["info"];
    }
?>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Student Registration Form</h3>
        </div>

        <div class="card-body">

            <form method="POST" action="process_register.php">

                <!-- Student Number -->
                <div class="mb-3">
                    <label for="student_number" class="form-label">
                        Student Number
                    </label>

                    <input 
                        type="text"
                        class="form-control"
                        id="student_no"
                        name="student_no"
                        placeholder="Enter student number">
                </div>

                <!-- Name -->
                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="first_name" class="form-label">
                            Student Name
                        </label>

                        <input 
                            type="text"
                            class="form-control"
                            id="student_name"
                            name="student_name"
                            placeholder="Enter student name">
                    </div>
                    
                </div>

                <!-- Course and Year Level -->
                <div class="row">

                    <div class="col-md-8 mb-3">

                        <label for="course" class="form-label">
                            Course
                        </label>

                        <select 
                            class="form-select"
                            id="course"
                            name="course">

                            <option value="">Select Course</option>
                            <option value="ACT">
                                Associate in Computer Technology
                            </option>

                            <option value="CT">
                                Computer Technology
                            </option>

                        </select>

                    </div>

                

                <!-- Submit Button -->
                <div class="d-grid">

                    <button 
                        type="submit"
                        class="btn btn-primary"
                        name="register">

                        Register Student

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>