const {createApp} = Vue;

createApp({

    data(){
        return{
            apiUrl: 'server.php',
            disks: [],
        }
    },
    methods: {
        getDisks(){
            axios.get(this.apiUrl)
            .then(result => {
                this.disks = result.data;
            })
        }
    },
    mounted(){
        this.getDisks();
    }
}).mount('#app');