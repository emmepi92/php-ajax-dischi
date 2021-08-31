Vue.config.devtools = true;
  
new Vue (
    {
        el: '#app',
        data: {
            dischi: []            
        },
        created() {
            axios.get('http://localhost:82/php-ajax-dischi/api/apiDischiFilter.php').then((response) =>{
                this.dischi = response.data
            })

        },
        methods: {

        }
    }
)