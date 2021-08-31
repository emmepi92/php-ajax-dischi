Vue.config.devtools = true;
  
new Vue (
    {
        el: '#app',
        data: {
            dischi: [],
            filter: '',
            newDischi:[]     
        },
        created() {
            axios.get('http://localhost:82/php-ajax-dischi/api/apiDischi.php').then((response) =>{
                this.dischi = response.data
            })

        },
        methods: {
            newAPICall(){
                return "http://localhost:82/php-ajax-dischi/api/apiDischiFilter.php" + "?genre=" + this.filter
            },
            filteredDischi(){
                axios.get(this.newAPICall()).then((response) =>{
                    this.newDischi = response.data
                })
            }
        }
    }
)