const {createApp} = Vue;

createApp({

    data(){
        return{
            apiUrl: 'server.php',
            disks: [],
            details: [],
            showDetails: false,
            newTitle: '',
            newAuthor: '',
            newYear: '',
            newGenre: '',
            newPoster: ''
        }
    },
    methods: {
        getDisks(){
            axios.get(this.apiUrl)
            .then(result => {
                this.disks = result.data;
            })
        },

        getDetails(index){
            this.showDetails = true;
            axios.get(this.apiUrl, {params: {
                descr: index
            }})
            .then(results => {
                this.details = results.data;
            })
        },

        addNewAlbum(){
            const data = {
                name: this.newTitle,
                genre: this.newGenre,
                author: this.newAuthor,
                year: this.newYear,
                poster: this.newPoster
            }

            axios.post(this.apiUrl, data, {
                headers: {'Content-Type' : 'multipart/form-data'}
            })
            .then(result => {
                this.disks = result.data;
                newTitle = '';
                newAuthor = '';
                newYear = '';
                newGenre = '';
                newPoster = '';
            })
        },

        deleteAlbum(index){
            if(confirm('Sei sicuro di voler eliminare questo album dalla tua libreria?')){
                const data = {
                    indexAlbum: index
                }

                axios.post(this.apiUrl, data, {
                    headers: {'Content-Type' : 'multipart/form-data'}
                })
                .then(result => {
                    this.disks = result.data;
                })
            }

        }
    },
    mounted(){
        this.getDisks();
    }
}).mount('#app');