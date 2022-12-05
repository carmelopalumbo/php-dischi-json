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
            <div class="container pt-4">
                <div class="row d-flex justify-content-center">
                    <div class="col-4 d-flex justify-content-center text-center my-4" v-for="(disk, index) in disks">
                        <div class="disk-card text-white">
                            <img :src="disk.poster" :alt="disk.title">
                            <h5 class="py-3">{{disk.title}}</h5>
                            <p class="fw-light">{{disk.author}}</p>
                            <p>{{disk.year}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<script src="./js/main.js"></script>

</html>