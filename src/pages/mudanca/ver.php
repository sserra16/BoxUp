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
    <div class="flex h-full justify-center m-16 mt-32 items-start bg-white">
        <div class="mr-auto w-1/2 rounded-2xl shadow-2xl">
            <a href="#" class=" flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row  hover:bg-gray-100 ">
                <img class="rounded-2xl object-cover w-full h-full md:h-auto md:w-48 " src="/BoxUp/src/images/caminhaocartoon.png" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <div class="flex flex-col gap-0">
                        <p class="!m-0 font-normal text-gray-700 ">Endereço final:</p>
                        <h5 class="!mt-0 mb-2 text-2xl break-all font-bold tracking-tight text-gray-900">ESMERALDAS</h5>
                    </div>
                    <div class="flex flex-col gap-0">
                        <p class="!m-0 font-semibold first-letter: text-gray-700 ">Endereço inicial:</p>
                        <p class="!mt-0 mb-2 break-all"></p>
                    </div>
                    <div class="flex flex-col gap-0">
                        <p class="!m-0 font-semibold  text-gray-700 ">Status: </p>
                        <p class="!mt-0 mb-2 break-all">aaaaaaaaaaaaaaaaaaaaaaaaaaasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                    </div>
                    <div class="flex flex-col gap-0">
                        <p class="!m-0 font-semibold  text-gray-700 ">Objetos a serem transportados:</p>
                        <p class="!mt-0 mb-2 break-all"></p>
                    </div>
                    <div class="flex flex-col gap-0">
                        <p class="!m-0 font-semibold  text-gray-700 ">Observações:</p>
                        <p class="!mt-0 mb-2 break-all"></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>


<?php include_once("../footer.php") ?>


</html>