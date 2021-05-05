var app = new Vue(
    {
        el: "#app",
        data: {
            dischi: [],
        },
        mounted: function (){
            axios.get('http://localhost:8888/php-ajax-dischi/api.php')
            .then( (response) =>{
                this.dischi = response.data;
            })
        }

});