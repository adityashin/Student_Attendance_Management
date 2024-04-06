 <?php
                error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendence System</title>
    <link rel="stylesheet" href="Attendence.css" />
    <link rel="" </head>

<body>
    <script src="attendance.js">
    </script>
    <br>
    <center>
        <h1 class="heading">Dattakala Group of Institutions,College of <br>Engineering</h1>
    </center>
    <center>
        <h2>Student Attendence Management System</h2>
    </center>
    <center>
        <h3>Computer Science and Technology Department</h3>
    </center><br>
    <center><label class="ed1">
            <h3 style="color:red;">Take Attendance (Today's Date :
                <?php echo $todaysDate = date("m-d-Y"); ?>)</h1>
    </center><br><br>

    <form action="" method="post">
        <table class="table">
            <thead>
                <th name="rollno">Roll No.</th>
                <th name="sname">Name</th>
                <th name="email">Email ID</th>
                <th name="present" class="att">Attendence</th>
            </thead>
            <tbody>
                <?php
$conn = mysqli_connect('localhost', 'root', '', 'attendance');          
      $sql = "select * from student";
                $student = mysqli_query($conn, $sql);
                while ($fetch = mysqli_fetch_array($student)) {
                    ?>
                    <tr>
                        <td name="rollno">
                            <?php echo $fetch['roll_no'] ?>
                        </td>
                        <td name="sname">
                            <?php echo $fetch['name'] ?>
                        </td>
                        <td name="email">
                            <?php echo $fetch['email'] ?>
                        </td>
                        <td><input name='check[]' type='checkbox' value="<?php echo $fetch['roll_no']; ?>"
                                class='form-control'></td>
                        <input name='dept' type='number' value="<?php echo $fetch['dept_id']; ?>" class='form-control'
                            hidden>

                        <!-- <td name="present"><button id="a1" class="but" onclick="demo1()">&#10004</button> &nbsp;&nbsp;&nbsp;<button onclick="demo2()" id="b1" class="but1" onclick="demo2()">&#10006</button></td> -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <center><br><br><button class="sub" name="submit" value="Save Data" onclick="savedata.php">Submit</button>
        </center>
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'attendance');
    // Get department ID from form data

    // Loop through the checkbox values and insert them into the database
    foreach ($_POST['check'] as $checked) {
        $query = "INSERT INTO attendance (roll_no) VALUES ('$checked')";
        mysqli_query($conn, $query);
    }

    // Close the database connection
    mysqli_close($conn);
}



?>