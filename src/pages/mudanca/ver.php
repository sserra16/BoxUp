<?php
session_start();
?>


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

<script>
    $.ajax({
        url: "/BoxUp/src/api/controller/ListarMudancaController.php",
        method: "GET",
        success: (data) => {
            data = JSON.parse(data);
            let html = "";

            if (data.data.length > 0) {

                data.data.forEach(element => {
                    html += `<div class="bg-white rounded-lg shadow w-80">
                                <a href="#">
                                    <img class="rounded-t-lg" src="/BoxUp/src/images/caminhaocartoon.png" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5 id="endF" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 uppercase">${element.endereco_final}</h5>
                                    </a>
                                    <div class="flex gap-2">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            Objetos:
                                        </p>
                                        <p id="obj" class="font-bold text-gray-800">
                                            ${element.objetos}
                                        </p>
                                    </div>
                                    <div class="flex gap-2">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            Endereço Inicial:
                                        </p>
                                        <p id="endI" class="font-bold text-gray-800">
                                            ${element.endereco_inicial}
                                        </p>
                                    </div>
                                    <div class="flex gap-2">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            Observações:
                                        </p>
                                    <p id="obs" class="font-bold text-gray-800">${element.observacoes}</p>
                                </div>
                                <div class="flex gap-2">
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    Status:
                                    </p>
                                    <p id="status" class="font-bold text-gray-800">${element.status == 0 ? "Em andamento" : element.status == 1 ? "Concluída" : "Cancelada"}</p>
                                    </div>
                                </div>
                            </div>`;
                });
                $("#container").html(html)
            } else {
                $("#container").html("<p class='self-start text-2xl font-bold'>Nenhuma mudança agendada <spam class='text-blue-700'>ainda!</spam></p>")

            }

        },
        error: (error) => {
            console.log(error)
        }
    })
</script>

<div id="container" class="flex w-full mt-32 h-full items-center gap-5 px-16 flex-wrap">
    <!-- <div class="bg-white rounded-lg shadow w-80">
    <a href="#">
            <img class="rounded-t-lg" src="/BoxUp/src/images/caminhaocartoon.png" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 id="endF" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 uppercase"></h5>
            </a>
            <div class="flex gap-2">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Objetos:
                </p>
                <p id="obj" class="font-bold text-gray-800"></p>
            </div>
            <div class="flex gap-2">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Endereço Inicial:
                </p>
                <p id="endI" class="font-bold text-gray-800"></p>
            </div>
            <div class="flex gap-2">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Observações:
                </p>
                <p id="obs" class="font-bold text-gray-800"></p>
            </div>
            <div class="flex gap-2">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Status:
                </p>
                <p id="status" class="font-bold text-gray-800"></p>
            </div>
        </div>
    </div> -->
</div>


<?php include_once("../footer.php") ?>


</html>