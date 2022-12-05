const {createApp} = Vue;

createApp({

    data(){
        return{
            apiUrl: 'server.php',
            disks: [],
            details: [],
            showDetails: false
        }
    },
    methods: {
        getDisks(){
            axios.get(this.apiUrl)
            .then(result => {
                this.disks = result.data;
                console.log(this.disks);
            })
        },

        getDetails(index){
            this.showDetails = true;
            console.log('chiamata');
            axios.get(this.apiUrl, {params: {
                descr: index
            }})
            .then(results => {
                this.details = results.data;
            })
        },

        closeDetails(){
            this.showDetails = false;
        }
    },
    mounted(){
        this.getDisks();
    }
}).mount('#app');