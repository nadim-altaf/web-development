<?php
// PHP validation variables
$nameErr = $colorErr = $hobbyErr = "";
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name check
    if (empty($_POST["username"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["username"];
    }

    // Color check
    if (empty($_POST["color"])) {
        $colorErr = "Select a favorite color";
    }

    // Hobby check
    if (!isset($_POST["hobby"])) {
        $hobbyErr = "Select a hobby";
    }

    // If all valid
    if ($nameErr == "" && $colorErr == "" && $hobbyErr == "") {
        echo "<script>alert('Form submitted successfully');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Web Page Lab</title>

    <!-- CSS -->
    <style>
        body {
            background-color: #f2f7ff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            color: #2c3e50;
            font-size: 32px;
        }

        p {
            color: #34495e;
            font-size: 18px;
        }

        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 10px;
        }

        form {
            margin-top: 20px;
            padding: 15px;
            background-color: #ffffff;
            width: 400px;
            border: 1px solid #ccc;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>

<h1>Nadim Altaf</h1>

<p>
    Hello! I am a Computer Science student learning web development.
</p>

<img src="https://via.placeholder.com/200" alt="Image">

<br><br>

<a href="https://www.google.com" target="_blank">Visit My Favorite Website</a>

<h3>Sample Table</h3>
<table>
    <tr>
        <th>Name</th>
        <th>Course</th>
    </tr>
    <tr>
        <td>Nadim</td>
        <td>Computer Science</td>
    </tr>
</table>

<h3>My Hobbies</h3>
<ul>
    <li>Programming</li>
    <li>Reading</li>
    <li>Learning Quran</li>
</ul>

<h3>User Information Form</h3>

<form method="post" action="">

    <!-- Name -->
    <label>Name:</label><br>
    <input type="text" name="username">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>

    <!-- Radio -->
    <label>Favorite Color:</label><br>
    <input type="radio" name="color" value="Red"> Red<br>
    <input type="radio" name="color" value="Blue"> Blue<br>
    <input type="radio" name="color" value="Green"> Green<br>
    <span class="error">* <?php echo $colorErr; ?></span>
    <br><br>

    <!-- Checkbox -->
    <label>Favorite Hobby:</label><br>
    <input type="checkbox" name="hobby" value="Programming"> Programming<br>
    <span class="error">* <?php echo $hobbyErr; ?></span>
    <br><br>

    <!-- Textarea -->
    <label>Comments:</label><br>
    <textarea rows="4" cols="30"></textarea><br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>
