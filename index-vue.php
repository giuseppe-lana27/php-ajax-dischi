<!DOCTYPE html>
<html lang="en">
  <?php include __DIR__ . '/head.php' ?>
  <body>
    <?php include __DIR__ . '/header.php' ?>
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
          <div class="album" v-for="album in dischi" v-show="selectGenre == album.genre || selectGenre == ''">
            <img :src="album.poster" :alt="album.title">
            <h3 class="title">{{album.title}}</h3>
            <h3 class="author">{{album.author}}</h3>
            <h4>{{album.year}}</h4>
          </div>
        </div>
        <!-- /sezione albums -->        
      </div>
    </main>
    <script src="js/app.js"></script>
  </body>
</html>