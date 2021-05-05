<?php
    include __DIR__ . '/database.php'; 
?>

<!DOCTYPE html>
<html lang="en">
  <?php include __DIR__ . '/head.php' ?>
  <body>
    <?php include __DIR__ . '/header.php' ?>
    <main>
      <div class="container">        
        <!-- sezione albums -->
        <div class="albums-container">
            <?php foreach($dischi as $disco){ ?>
                <div class="album">           
                    <img src="<?php echo $disco['poster']?>" alt="Poster">              
                    <h3><?php echo $disco["title"]?></h3>
                    <h3><?php echo $disco["author"]?></h3>
                    <h4><?php echo $disco["year"]?></h4>           
                </div>
            <?php } ?>
        </div>
        <!-- /sezione albums -->        
      </div>
    </main>    
  </body>
</html>
