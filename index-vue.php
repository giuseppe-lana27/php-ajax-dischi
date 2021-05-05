<!DOCTYPE html>
<html lang="en">
  <?php include __DIR__ . '/head.php' ?>
  <body>
    <?php include __DIR__ . '/header.php' ?>
    <main>
      <div id="app" class="container">        
        <!-- sezione albums -->
        <div class="albums-container">
          <div class="album" v-for="album in dischi">
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