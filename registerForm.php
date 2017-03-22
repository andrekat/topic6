<?php

$loggedin = FALSE;
$anrede = NULL;
$vorname = NULL;
$nachname = NULL;
$adresse = NULL;
$plz = NULL;
$ort = NULL;
$username = NULL;
$pwd = NULL;
$pwd_confirm = NULL;
$email = NULL;
$err = FALSE;

if(isset($_GET['submit'])){
    
    if(!empty($_GET['anrede'])){
    
        switch ($_GET['anrede']){
            
            case 'f':
                $anrede = "Frau";
                break;
            
            case 'h':
                $anrede = "Herr";
                break;
        }
    }
    else {
        $err = TRUE;
    }
    if(!empty($_GET['vname'])){
        $vorname = $_GET['vname'];
    }
    else {
        $err = TRUE;
    }
    if(!empty($_GET['nname'])){
        $nachname = $_GET['nname'];
    }
    else {
        $err = TRUE;
    }
    if(!empty($_GET['adresse'])){
        $adresse = $_GET['adresse'];
    }
    else {
        $err = TRUE;
    }
    if(!empty($_GET['plz'])){
        $plz = $_GET['plz'];
    }
    else {
        $err = TRUE;
    }
    if(!empty($_GET['ort'])){
        $ort = $_GET['ort'];
    }
    else {
        $err = TRUE;
    }
    if(!empty($_GET['user'])){
        $username = $_GET['user'];
    }
    else {
        $err = TRUE;
    }
    if(!empty($_GET['pwd'])){
        $pwd = $_GET['pwd'];
    }
    else {
        $err = TRUE;
    }
    if(!empty($_GET['pwdbest'])){
        $pwd_confirm = $_GET['pwdbest'];
    }
    else {
        $err = TRUE;
    }
    if(!empty($_GET['mymail'])){
        $email = $_GET['mymail'];
    }
    else {
        $err = TRUE;
    }
    
    //wenn alle Daten vorhanden sind...
    if($err == FALSE){
        $theUser = new User(0, $anrede, $vorname, $nachname, $adresse, $plz, $ort, $username, $pwd, $email);
        $db->registerUser($theUser);
    }
    else {
        echo "Bitte, füllen Sie alle Felder korrekt aus.";
    }
}

?>


<h3>Registrierungsformular</h3>
<form class="form-horizontal" action="index.php" method="get">
    <div class="form-group">
        <label for="inputAnrede" class="col-sm-2 control-label">Anrede</label>
        <div class="col-sm-10">
            <select class="form-control" name="anrede">
                <option value="k">----</option>
                <option value="f">Frau</option>
                <option value="h">Herr</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputVorname" class="col-sm-2 control-label">Vorname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="vname" placeholder="Max">
        </div>
    </div>
    <div class="form-group">
        <label for="inputNachname" class="col-sm-2 control-label">Nachname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nname" placeholder="Mustermann">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAdresse" class="col-sm-2 control-label">Adresse</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="adresse" placeholder="Herrengasse 1">
        </div>
    </div>
    <div class="form-group">
        <label for="inputOrt" class="col-sm-2 control-label">PLZ</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="plz" placeholder="1010">
        </div>
    </div>
    <div class="form-group">
        <label for="inputOrt" class="col-sm-2 control-label">Ort</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ort" placeholder="Wien">
        </div>
    </div>
    <div class="form-group">
        <label for="inputUser" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="user" placeholder="flizzy1002">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="col-sm-2 control-label">Passwort</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="pwd" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPasswordBest" class="col-sm-2 control-label">Passwort Bestätigung</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="pwdbest" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="mymail" placeholder="wi@wien.at">
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="reset" class="btn btn-default">Reset</button>
            <button type="submit" name="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>
</form>
