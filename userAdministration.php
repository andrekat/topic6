<?php
$userObjekte = $db->getUserList();
?>

<form>
    <table class="table table-striped">
        <tr>
            <th>Anrede</th>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Adresse</th>
            <th>PLZ</th>
            <th>Ort</th>
            <th>Username</th>
            <th>Passwort</th>
            <th>Email</th>
            <th colspan="2">Funktion</th>
        </tr>
        <?php foreach($userObjekte as $userObjekt): ?>
        <tr>
            <td><?php echo $userObjekt->anrede; ?></td>
            <td><?php echo $userObjekt->vname; ?></td>
            <td><?php echo $userObjekt->nname; ?></td>
            <td><?php echo $userObjekt->adresse; ?></td>
            usw.
        </tr>
        <?php endforeach; ?>
    </table>
</form>
