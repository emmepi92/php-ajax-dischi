Vue.config.devtools = true;
  
new Vue (
    {
        el: '#app',
        data: {
            dischi: []            
        },
        created() {
            axios.get('http://localhost:81/php-ajax-dischi/api/apiDischi.php').then((response) =>{
                this.dischi = response.data

            })

        },
        methods: {

        }
    }
)