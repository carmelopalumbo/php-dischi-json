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

    <title>Dischi JSON</title>
</head>

<body>
    <div id="app">
        <header>
            <div class="container h-100 d-flex align-items-center justify-content-center">
                <div class="row text-white">
                    <div class="col">
                        <h1>JSON DISKS</h1>
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