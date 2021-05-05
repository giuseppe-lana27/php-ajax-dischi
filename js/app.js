var app = new Vue(
    {
        el: "#app",
        data: {
            dischi: [],
            genres: [],
            selectGenre: '',
        },
        mounted: function (){
            axios.get('http://localhost:8888/php-ajax-dischi/api.php')
            .then( (response) =>{
                this.dischi = response.data;
                this.dischi.forEach((item) => {
                    if(!this.genres.includes(item.genre)){
                      this.genres.push(item.genre);
                    }
                  });
            })
        }

});