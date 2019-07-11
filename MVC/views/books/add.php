<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD</title>
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/Main.js"></script>
    <link rel="stylesheet" href="assets/css/Main.css">
</head>
<body>
<form action="" method="post">
        <label>ID Book</label>
        <input style="width: 50%" type="number" name="id" id="id"  placeholder="Book's ID">
       <br/> <label >Name Book</label>
        <input style="width: 50%" type="text" name="name" id="name"  placeholder="Book's Name">

    <br/><input onclick="return check()"  value="Save" type="submit" name="save">
    <input onclick="cancel1()" value="cancel" type="button"  id="cancel">
    <p id="error"></p>
</form>
</body>
</html>