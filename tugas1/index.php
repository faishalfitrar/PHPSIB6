<?php 
$noresize = 'yes';
?>

<frameset rows="30%, 17%, *, 6%" cols="100%" frameborder="no" >
    <frame src="header.php" scrolling="no" \>
    <frame src="navbar.php" scrolling="no" \>

    <frameset cols="15%, *, 15%" >
        <frame src="left.php" noresize="<?= $noresize ?>" \>
        <frame src="" scrolling="yes" name="main">
        <frame src="right.php" noresize="<?= $noresize ?>" \>
    </frameset>

    <frameset>
        <frame src="footer.php" \>
    </frameset>