<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="./assets/styles/styles.css" /> -->
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>
<?php include_once("../header.php") ?>

<body class="h-screen bg-blue-50">
    <!-- component -->
    <div class="flex justify-center items-center bg-white mt-5">
        <!-- COMPONENT CODE -->
        <div class="container w-3/4 mx-auto my-4 px-4 lg:px-20">
            <div class="w-full p-8 my-4 mr-auto rounded-2xl shadow-2xl">
                <div class="flex gap-3 items-center">
                    <h1 class="font-regular opacity-70 uppercase text-5xl">Entre em </h1><h1 class="font-bold uppercase text-5xl">contato!</h1>
                </div>
                <form id='form' action="https://formsubmit.co/juancostacizilio@gmail.com" method="POST" encType='multipart/form-data'>
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_next" value="http://localhost:8080/BoxUp/src/pages/suporte/index.php">
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Primeiro Nome*" id="nome" name="nome" required />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Ultimo Nome*" id="sobrenome" name="sobrenome" required />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" placeholder="Email*" id="email" name="email" required />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Celular*" maxlength="15" id="celular" name="celular" required />
                    </div>
                    <div class="my-4">
                        <textarea placeholder="Mensagem*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" name="mensagem" required id="mensagem"></textarea>
                    </div>
                    <div class="my-2 w-1/2 lg:w-1/4">
                        <button id="enviar" disabled class="cursor-not-allowed uppercase text-sm font-bold tracking-wide bg-blue-600 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                            Enviar mensagem
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- COMPONENT CODE -->
    </div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script>
    $('#celular').mask('(00) 00000-0000', {
        reverse: false
    });
    $('#enviar').click(() => {
        swal.fire({
            title: 'Mensagem enviada!',
            icon: 'success'
        })
    })

    /*  $('#form').submit((e) => {
         e.preventDefault();
     }) */

    $('input, textarea').each((index, item) => {
        $(item).change(() => {
            if ($('#nome').val() != "" && $('#sobrenome').val() != "" && $('#email').val() != "" && $('#celular').val() != "" && $('#mensagem').val() != "" && $('#email').val().includes('@')) {
                $('#enviar').removeClass('cursor-not-allowed')
                $('#enviar').removeAttr('disabled')
            }
        })
    })
</script>

</html>