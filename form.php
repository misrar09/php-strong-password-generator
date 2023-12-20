<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Password Generator</title>
</head>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1 class="fs-3">Generate New Password by providing lenght</h1>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col">

            <form action="password.php" method="GET">
                <label for="passwordLength">Password Length:</label>
                <input type="number" name="passwordLength">
                <button>Generate</button>
            </form>
        </div>
    </div>

</div>

<body>

</body>

</html>