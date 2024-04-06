<?php
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'attendance');if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $rollno = $_POST['roll'];
    $email = $_POST['email'];
    $dept = $_POST['dept'];
    $sql = "insert into student(name,email,roll_no,dept_id) values ('$name','$email','$rollno','$dept')";
    $student = mysqli_query($conn, $sql);
    if ($student == true) {
        header("location:studentform.php");
        // echo "<script>
        // alert('Data Submited Successfully')
        // window.location.hredf= b 
        // </script>"
    } else {
        echo "not";
    }
}

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        body {
            background-image: url("i1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        a:link {
            text-decoration: none;
        }

        img {
            border-radius: 6%;
        }
    </style>
</head>

<body>
    <div>
        <center>

            <font color="black">


                <h1><i>&nbsp;
                        Dattakala Group  of Institutions,Faculty Of Engineering,Pune
            </font>
            </h1>
            <marquee width=60% bgcolor="#B7C9E2"> <u>website - www.sswcoe.edu.in </u></marquee>
            <br>
            <h1>
                <font color="#023E8A">Add Student </font>
            </h1> <br>

            <form action="" method="post">
                <center>
                    <label for="">Rollno:</label>
                    <input type="number" name="roll" required placeholder="01">
                    <br><br><br>
                    <label for="">Name:</label>
                    <input type="text" name="name" required placeholder="eg Aditya Shinde">
                    <br><br><br>
                    <label for="">Email:</label>
                    <input type="email" name="email" required placeholder="abc@gmail.com">
                    <br><br><br>
                    <label for="">Department:</label>
                    <select name="dept" id="">
                        <option value="" hidden>Select Department</option>
                        <?php
                        $deptsql = "select * from department";
                        $dept = mysqli_query($conn, $deptsql);
                        while ($department = mysqli_fetch_array($dept)) {
                            ?>
                            <option value="<?php echo $department['id'] ?>"><?php echo $department['dname'] ?></option>
                        <?php } ?>
                    </select>
                    <br><br><br>
                    <button type="submit" name="submit">Submit</button>
                    <button type="reset">Reset</button>
                </center>
            </form>

</body>

</html>