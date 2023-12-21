<?php
//Method to create a new password from the user provided lenght
function randPassword($passLength)
{

    // All the characters string which can be used in the password
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
