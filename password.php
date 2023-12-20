<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    //Method to create a new password from the user provided lenght
    function randPassword($passLength)
    {

        // All the characters strings which can be used in the password
        $passwordCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!1234567890&.,$%()/';
        $newPassword = ""; // set the empty varialbe for new password to be used below


        //Loop to generate each character of the password
        for ($i = 0; $i < $passLength; $i++) {

            //get the random characters from the passowrd characters string above and append it to the new password
            $randdomChar = $passwordCharacters[rand(0, strlen($passwordCharacters) - 1)];
            $newPassword = $newPassword . $randdomChar;
        }
        // return the new generated password
        return $newPassword;
    }


    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>

</head>

<body>


    <?php $generatedPassword = randPassword($_GET['passwordLength']); ?>
    <h1>Here is your Password</h1>
    <?php echo "<h2>" . "Password = " . $generatedPassword . "<h2>"; ?>


</body>

</html>