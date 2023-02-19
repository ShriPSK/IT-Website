<?php require("./templates/header.php"); ?>
<div class="body-start"></div>
<div class="intro-v2">
    <div class="container mt-5">
        <h1>Gallery</h1>
    </div>
    <div class="gallery-head">
        <?php 
            for($i=1;$i<=2;$i++){
                echo "
                    <img loading='lazy' src='./Images/gallery/ac".$i.".webp' class='img-fluid'>
                ";
            }
        ?>
        <?php 
            for($i=1;$i<=4;$i++){
                echo "
                    <img loading='lazy' src='./Images/gallery/da".$i.".webp' class='img-fluid'>
                ";
            }
        ?>
        <?php 
            for($i=1;$i<=4;$i++){
                echo "
                    <img loading='lazy' src='./Images/gallery/hw".$i.".webp' class='img-fluid'>
                ";
            }
        ?>
        <?php 
            for($i=0;$i<=5;$i++){
                echo "
                    <img loading='lazy' src='./Images/gallery/p".$i.".webp' class='img-fluid'>
                ";
            }
        ?>
        <?php 
            for($i=1;$i<=4;$i++){
                echo "
                    <img loading='lazy' src='./Images/gallery/pl".$i.".webp' class='img-fluid'>
                ";
            }
        ?>
        <?php 
            for($i=1;$i<=4;$i++){
                echo "
                    <img loading='lazy' src='./Images/gallery/sn".$i.".webp' class='img-fluid'>
                ";
            }
        ?>
        <?php 
            for($i=1;$i<=15;$i++){
                echo "
                    <img loading='lazy' src='./Images/gallery/".$i.".webp' class='img-fluid'>
                ";
            }
        ?>
    </div>
</div>
<?php require("./templates/footer.php"); ?>