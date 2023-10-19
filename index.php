<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Box Up!</title>
</head>
<?php include_once("./src/pages/header.php") ?>

<body style="background-color: #FFFEE6; ">
  <main style="height: 100vh">
    <header class="bg-black h-16 flex items-center justify-between pr-10 pl-10 p-2 sticky top-0">
      <div>
        <h1 class="text-white font-medium text-2xl border-r border-white pr-2">BoxUP</h1>
      </div>
      <div>
        <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-white bg-black rounded-lg" type="button">
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
          </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
            <li>
              <a href="home.html" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home</a>
            </li>
            <li>
              <a href="loginmotorisa" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Motorista</a>
            </li>
            <li>
              <a href="loginUsuario" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Usuarios</a>
            </li>
          </ul>
          <div class="py-2">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sua Conta</a>
          </div>
        </div>
      </div>
    </header>

    <div class="div1">
      <div class="d-flex flex-column align-items-start w-50">
        <h1 class="text-start " style="
        font-size: 45px;
        font-weight:600;
            margin: 0;
            padding: 0;
          ">
          Agende sua mudança <br> aqui na
          <span style="color: #2e89c0">BoxUp</span>!
        </h1>
        <div class="text-black d-flex justify-content-start text-start" style="
            opacity: 80%;
            font-size: 20px;
            margin-top: 20px;
            font-weight:600;
            text-shadow: none !important;
          ">
          Uma Nova Maneira de Planejar Suas Mudanças: Descubra, Agende e Realize Mudanças Residenciais com Conforto e Confiabilidade Garantidos. <br />
          Sua nova jornada começa aqui.
        </div>
        <button id="scrollMostre" class="btn btn-primary colorblue" style="margin-top: 1rem">
          <span style="color: #fff; text-shadow: none !important; font-size: larger">
            Mostre-me mais
          </span>
        </button>
      </div>
      <div class="imagemlanding"></div>
    </div>
  </main>
</body>

</html>
<style>
  .colorblue {
    background-color: #2E89C0 !important;
    color: #e5f0f9 !important;
  }

  .div1 {
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 1);
    width: 80%;
    height: 90vh;
    max-width: 80%;
    margin: 0 auto;
    text-align: center;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
  }

  body {
    /* background-image: url("./assets/images/BackgroundImage.jpeg");
     background-size: cover;  */
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #121824;
    overflow-x: hidden;
  }

  .logo {
    display: flex;
    padding: 0px 100px;
    height: 100px;
  }

  .botao {
    position: absolute;
    top: 40px;
    right: 80px;
  }

  h1,
  h3,
  h5 {
    color: black;
    text-shadow: none;
  }

  p {
    text-shadow: none;
  }

  ::-webkit-scrollbar {
    width: 0px;
  }

  ::-webkit-scrollbar-thumb {
    background-color: #2e89c0;
  }

  ::-webkit-scrollbar-track {
    background-color: #121824;
  }

  .imagemlanding {
    width: 40%;
    height: 50%;
    background-image: url("./src/images/landing.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }
</style>
<script>

</script>

</html>