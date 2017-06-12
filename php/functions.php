<?php 

include("config.php");

function dodajKorisnika($username, $email, $password) {
    global $conn;
    
    if(!checkIfUserExists($username)) {
        $insert = "INSERT INTO korisnik (username, email, password) VALUES (?, ?, ?)";
        $query = $conn->prepare($insert);
        $query->bind_param('sss', $username, $email, $password);
        $query->execute();
        $query->close();
    }
    else {
        echo "Korisnik vec postoji";
    }
}

function checkIfUserExists($username){
    global $conn;
    $sql = "SELECT * FROM korisnik WHERE username=?";
    $query = $conn->prepare($sql);
    $query->bind_param('s',$username);
    $query->execute();
    $query->store_result();
    
    if ($query->num_rows > 0) {
        return true;
    }
    else{
        return false;
    }
    $query->close();
}

function proveriKorisnika($username, $password){
    global $conn;
    $sql = "SELECT * FROM korisnik WHERE username=? AND password=?";
    $query = $conn->prepare($sql);
    $query->bind_param('ss',$username,$password);
    $query->execute();
    $query->store_result();
    
    if ($query->num_rows > 0) {
        return 1;
    }
    else{
        return 0;
    }
    $query->close();
}


?>
