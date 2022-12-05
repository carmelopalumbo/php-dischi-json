<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- boostrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- font-awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous' />

    <!-- VueJs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>Dischi JSON</title>
</head>

<body>
    <div id="app">
        <header>
            <div class="container h-100 d-flex align-items-center w-100">
                <div class="row text-white d-flex justify-content-between w-100">
                    <div class="col">
                        <h1>JSON DISKS</h1>
                    </div>
                    <div class="col text-end">
                        <!-- Button trigger modal -->
                        <i class="fa-solid fa-plus" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Album.</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center w-100">
                                        <form action="">
                                            <input type="text" class="form-control my-4" id="title" placeholder="Titolo:">
                                            <input type="text" class="form-control my-4" id="author" placeholder="Autore:">
                                            <input type="text" class="form-control my-4" id="year" placeholder="Anno di uscita:">
                                            <input type="text" class="form-control my-4" id="genre" placeholder="Genere:">
                                            <input type="text" class="form-control my-4" id="poster" placeholder="Poster (URL):">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <button type="button" class="btn btn-primary">AGGIUNGI</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container pt-4 position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-4 d-flex justify-content-center text-center my-4" v-for="(disk, index) in disks">
                        <div class="disk-card text-white" @click.stop="getDetails(index)">
                            <img :src="disk.poster" :alt="disk.title">
                            <h5 class="py-3">{{disk.title}}</h5>
                            <p class="fw-light">{{disk.author}}</p>
                            <p>{{disk.year}}</p>
                        </div>

                    </div>
                </div>

                <div class="details-box text-white" v-if="showDetails">
                    <div class="position-relative text-center">
                        <img :src="details.poster" :alt="details.title">
                        <h5 class="py-4">{{details.title}}</h5>
                        <p class="fw-light">{{details.author}}</p>
                        <p>{{details.year}}</p>
                        <p class="fw-light">Genre: {{details.genre}}</p>
                    </div>
                    <div class="position-absolute close-button" @click.stop="showDetails = !showDetails">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<script src="./js/main.js"></script>

</html>