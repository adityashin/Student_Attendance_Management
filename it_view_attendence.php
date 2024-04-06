<?php
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'attendance');
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $query = mysqli_query($conn, "select * from it_attendence where date_created = '$date'");
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
    <link rel="stylesheet" href="Attendence.css" />

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
            <h1>
                <font color="#023E8A">Student Attendance Record </font>
            </h1>
            <fieldset style="width:400px;">
                <legend>Select Date</legend>
                <form action="view_attendence.php" method="post">
                    <center>
                        <label for="">Select Date:</label>
                        <input type="date" name="date" id="date">
                        <br><br><br>
                        <button type="submit" name="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </center>
                </form>
            </fieldset>
            <br><br>
            <table class="table">
                <thead>
                    <th name="sname">Name</th>
                    <th name="rollno">Roll No.</th>
                    <th name="email">Email ID</th>
                    <th name="">Date</th>
                    <th name="">Attendance Status</th>

                </thead>
                <tbody>
                    <?php
                    while ($fetch = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $fetch['name']; ?>
                            </td>
                            <td>
                                <?php echo $fetch['roll_no']; ?>
                            </td>
                            <td>
                                <?php echo $fetch['email']; ?>
                            </td>
                            <td>
                                <?php echo $fetch['date_created']; ?>
                            </td>
                            <td>
                                <?php
                                if ($fetch['status'] == 'present') {
                                    echo "<h3 style='color:green'>Present</h3>";
                                } else {
                                    echo "<h3 style='color:red'>Absent</h3>";

                                }
                                ?>
                            </td>
                            <?php
                            if ($fetch['status'] == 'absent') {

                                $to = $fetch['email'];
                                $subject = 'Fine for being absent';
                                $message = 'Dear ' . $fetch['name'] . ',<br><br>You have been fined for being absent on ' . $date . '.
                                <html>
                                    <head>
                                    <title>HTML email</title>
                                    </head>
                                    <body>
                                    <p>This email contains HTML Tags!</p>
                                    <center>
                                    <a href="https://ibb.co/D7q7wxk"><img src="https://i.ibb.co/D7q7wxk/IMG-20230514-WA0001.jpg" alt="IMG-20230514-WA0001" border="0"></a></center>
                                    </body>
                                </html>
                                <br><br>Regards,<br>Your Class Teacher <br>';
                                $headers = 'From: adityashinde2at@gmail.com' . "\r\n" .
                                    'Reply-To: adityashinde2at@gmail.com' . "\r\n" .
                                    'Content-Type: text/html; charset=UTF-8' . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();

                                mail($to, $subject, $message, $headers);
                            } else {
                            }
                            ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </center>
    </div>
    <?php
    echo "<script>alert('Mail Sent to Absent Students')</script>";
    ?>
</body>

</html>