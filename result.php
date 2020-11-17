<link rel="stylesheet" href="scss/box-result.scss">

<?php 
    require_once 'header.php'; 
    require_once 'login-system/config.php';
?>

<h3>Résultat(s)</h3>

<?php
    $query = "SELECT * FROM gite";
    $query_run = mysqli_query($link, $query);
    $verif_gite = mysqli_num_rows($query_run) > 0;

    if($verif_gite)
    {
        while($row = mysqli_fetch_assoc($query_run))
        {
            ?>
            <div class="box-container">
                <img class="image-gite" src="<?php echo $row['imageURL']; ?>">
                <div class="info">
                    <h4 class="nom-gite"> <?php echo $row['description'];?> </h4>
                    <p class="localisation"> <?php echo $row['localisation'];?></p>
                </div>
            </div>
            <?php
        }
    }
    else
    {
        echo "Aucun résultat(s)";
    }
    ?>

<br />

