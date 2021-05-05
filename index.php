<?php
    include __DIR__ . '/database.php'; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- Google font -->
    <!-- vuejs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- /vuejs -->
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <!-- /axios -->
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="img/download.png" alt="Spotify Logo">
      </div>
    </header>
    <main>
      <div id="app" class="container">
        <!-- sezione per scelta del genere -->
        <div class="select-genre">
          <select class="genre-selection" name="" v-model="selectGenre">
            <option value="">All</option>
            <option v-for="genre in genres" :value="genre">{{genre}}</option>
          </select>
        </div>
        <!-- /sezione per scelta del genere -->
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
    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>