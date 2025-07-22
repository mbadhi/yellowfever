<!DOCTYPE html>
<html>
<head>
    <title>Passport/ID Details Form</title>
</head>
<body>
    <h2>Passport/ID Details Form</h2>
    <form method="post" action="">
        <label for="fullname">Full Name:</label><br>
        <input type="text" id="fullname" name="fullname" required><br><br>

        <label for="idnumber">Passport/ID Number:</label><br>
        <input type="text" id="idnumber" name="idnumber" required><br><br>

        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="nationality">Nationality:</label><br>
        <input type="text" id="nationality" name="nationality" required><br><br>

        <label for="expiry">Expiry Date:</label><br>
        <input type="date" id="expiry" name="expiry" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $fullname = htmlspecialchars($_POST["fullname"]);
        $idnumber = htmlspecialchars($_POST["idnumber"]);
        $dob = htmlspecialchars($_POST["dob"]);
        $nationality = htmlspecialchars($_POST["nationality"]);
        $expiry = htmlspecialchars($_POST["expiry"]);

        echo "<h3>Submitted Details</h3>";
        echo "Full Name: $fullname<br>";
        echo "Passport/ID Number: $idnumber<br>";
        echo "Date of Birth: $dob<br>";
        echo "Nationality: $nationality<br>";
        echo "Expiry Date: $expiry<br>";
    }
    ?>
</body>
</html>
