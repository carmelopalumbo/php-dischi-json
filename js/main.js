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
                console.log(this.disks);
            })
        }
    },
    mounted(){
        this.getDisks();
    }
}).mount('#app');