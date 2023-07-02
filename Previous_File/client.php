<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
</head>
<body>
    <h1>Client Site</h1>

    <a href="./server.php?name=sithu&job=programmer&address=pyay">Server</a>

    <form action="./server.php" method="POST" enctype='multipart/form-data' >
        <input type="text" name="firstName">First Name <br>
        <input type="text" name="secondName">Second Name <br>

        <input type="file" name="FILE" id="">

        <button type="submit">Click to Submit</button>

    </form>
</body>
</html>