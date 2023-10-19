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
    <div class="flex h-full justify-center items-center bg-white">
        <!-- COMPONENT CODE -->
        <div class="container w-3/4 mx-auto px-4 lg:px-20">
            <div class="w-full p-8 my-4 mr-auto rounded-2xl shadow-2xl">
                <div class="flex gap-3 items-center">
                    <h1 class="font-regular opacity-70 uppercase text-5xl">Agende a sua</h1>
                    <h1 class="font-bold uppercase text-5xl">mudança!</h1>
                </div>
                <form id='form' action="https://formsubmit.co/juancostacizilio@gmail.com" method="POST" encType='multipart/form-data'>
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_next" value="http://localhost:8080/BoxUp/src/pages/suporte/index.php">
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Endereço inicial*" id="end_inicial" name="end_inicial" required />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" placeholder="Endereço final*" id="end_final" name="end_final" required />
                    </div>
                    <input class="w-full bg-gray-100 text-gray-900 mt-4 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Objetos a serem transportados*" id="objetos" name="objetos" required />
                    <div class="my-4">
                        <textarea placeholder="Observações" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" name="observacao" id="observacao"></textarea>
                    </div>
                    <div class="my-2 w-1/4 lg:w-1/4">
                        <button id="enviar" disabled class="cursor-not-allowed uppercase text-sm font-bold tracking-wide bg-blue-600 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                            Agendar
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- COMPONENT CODE -->
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script>
        $('#enviar').click(() => {
            $.ajax({
                url: "/BoxUp/src/api/controller/MudancaController.php",
                method: "POST",
                data: {
                    end_incial,
                    end_final,
                    objetos,
                    observacoes
                },
                success: (data) => {
                    data = JSON.parse(data);

                    swal.fire({
                        title: 'Mudança agendada!',
                        html: 'Acompanhe sua mudança na aba minhas mudanças!',
                        icon: 'success'
                    })
                },
                error: (error) => {
                    console.log(error)
                    swal.fire({
                        title: "Erro",
                        html: "Erro ao agendar",
                        icon: "error"
                    })
                }
            })

        })

        /*  $('#form').submit((e) => {
             e.preventDefault();
         }) */

        $('input').each((index, item) => {
            $(item).change(() => {
                if ($('#end_inicial').val() != "" && $('#end_final').val() != "" && $('#objetos').val() != "") {
                    $('#enviar').removeClass('cursor-not-allowed')
                    $('#enviar').removeAttr('disabled')
                }
            })
        })
    </script>

</html>