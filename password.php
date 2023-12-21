<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "/functions.php"; ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>

</head>

<body>
    <?php
    if (isset($_GET["passwordLength"]) && !empty($_GET["passwordLength"])) {
        $generatedPassword = randPassword($_GET["passwordLength"]);
    } else {
        $generatedPassword = "Error: Password length not specified.";
    }
    ?>


    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>Here is your Password</h1>
                <?php echo "<h2>" . "Password = " . $generatedPassword . "</h2>"; ?>
            </div>
            <div class="row">
                <div class="col">
                    <span><a href="http://localhost/php-strong-password-generator/form.php">Go Back</a></span>
                </div>
            </div>
        </div>
    </div>


</body>

</html>