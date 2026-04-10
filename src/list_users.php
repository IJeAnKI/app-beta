<?php
    require("../config/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align ="center">
        <tr>
            <th>Fullname</th>
            <th>E-mail</th>
            <th>mobile_phone</th>
            <th>Status</th>
            <th>Photo</th>
            <th>Options</th>
        </tr>
        <tr>
            <td>Peter Loza</td>
            <td>Peter@mail.com</td>
            <td>300123</td>
            <td>Active</td>
            <td><img src="icons/default.png" width="50" alt="User photo"></td>
            <td><a href="#"><img src="icons/edit.png" width="20" alt="Edit user"></a>&nbsp;&nbsp;<a href="#"><img src="icons/delete.png" width="20" alt="Delet user"></a></td>
        </tr>
    </table>
</body>
</html>