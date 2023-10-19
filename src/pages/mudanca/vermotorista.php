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
    function abrirmodal() {
        var html = `<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="0" selected>Em andamento</option>
                        <option value="1">Concluida</option>
                        <option value="2">Cancelada</option>
                    </select>`
        swal.fire({
            title: 'Editar mudança',
            html: html,
            icon: 'info'
        })
    };

    function excluirmudanca() {
        var html = `<div class="flex gap-3"><button type="button" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700" id="excluir">Excluir</button>
                    <button type="button" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700" id="cancelar">Cancelar</button></div>`



        swal.fire({
            title: 'Tem certeza que quer excluir a mudança?',
            html: html,
            icon: 'info',
            showConfirmButton: false
        })

        $("#cancelar").click(() => {
            swal.close()
        })
    };
    $.ajax({
        url: "/BoxUp/src/api/controller/ListarMudancaMotorista.php",
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
                    <p id="obj" class="font-bold text-gray-800">${element.objetos}</p>
                    </div>
                    <div class="flex gap-2">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Endereço Inicial:
                    </p>
                    <p id="endI" class="font-bold text-gray-800">${element.endereco_inicial}</p>
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
                <p id="status" class="font-bold text-gray-800">${element.status == 0 ? "Em andamento" : "Concluída"}</p>
                </div>
                <button onClick="abrirmodal()" type="button" class="px-2 py-2 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800  focus:outline-none  rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 ">
                    <img src="/BoxUP/src/images/pencil.png" width="20" />
                </button>
                <button onClick="excluirmudanca()" type="button" class="px-2 py-2 text-sm font-medium text-white inline-flex items-center bg-red-700 hover:bg-red-800  focus:outline-none  rounded-lg text-center dark:bg-red-600 dark:hover:bg-red-700 ">
                    <img src="/BoxUP/src/images/trash.png" width="20" />
                </button>

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