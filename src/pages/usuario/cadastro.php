<?php

// include_once('../header.php');

?>

<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/BoxUp/src/js/jquery.min.js"></script>
  <title>BoxUp!</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</head>

<body>
  <section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Cadastrar
          </h1>
          <form class="space-y-4 md:space-y-6" action="#">

            <div class="flex w-full gap-3">
              <div>
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                <input type="text" name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pedro" required="">
              </div>
              <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="exemplo@gmail.com" required="">
              </div>
            </div>

            <div>
              <label for="usuario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuário</label>
              <input type="text" name="usuario" id="usuario" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="@PedroG12" required="">
            </div>

            <div>
              <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
              <input type="text" name="cpf" id="cpf" maxlength="14" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="000.000.000-00" required="">
            </div>

            <div class="flex w-full gap-3">
              <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>

              <div>
                <label for="cpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar senha</label>
                <input type="password" name="cpassword" id="cpassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
            </div>
            <button type="button" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="cadastrar">Cadastrar</button>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
              Já possui uma conta? <a href="./login.php" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Logar</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div id="toast" style="display: none;" class="fixed bottom-0 right-0 m-5 z-50 flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
      </svg>
      <span class="sr-only">Warning icon</span>
    </div>
    <div id="message" class="ml-3 text-sm font-normal"></div>
    <button id="closetoast" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
    </button>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

  <script>
    function showToast() {
      $("#toast").removeClass("hidden")
      $("#toast").removeClass("opacity-0")
      $("#toast").show(200);
    }

    $("#closetoast").click(() => {
      $("#toast").hide()
    })

    $('#cpf').mask('000.000.000-00', {
      reverse: false
    });

    $('#cadastrar').click(() => {
      const nome = $("#nome").val()
      const email = $("#email").val();
      const usuario = $('#usuario').val();
      const cpf = $("#cpf").val();
      const senha = $("#password").val();
      const cSenha = $("#cpassword").val();

      if (!nome) {
        showToast();
        $("#message").html("Insira o nome!");
      } else if (!email) {
        showToast();
        $("#message").html("Insira o email!");
      } else if (!usuario) {
        showToast();
        $("#message").html("Insira o usuário!");
      } else if (!cpf) {
        showToast();
        $("#message").html("Insira o CPF!");
      } else if (!senha) {
        showToast();
        $("#message").html("Insira a senha!");
      } else if (!cSenha) {
        showToast();
        $("#message").html("Confirme a senha!");
      } else if (senha != cSenha) {
        showToast();
        $("#message").html("As senhas estão diferentes!");
      } else {
        $.ajax({
          url: "/BoxUp/src/api/controller/CadastroController",
          method: "POST",
          data: {
            nome,
            email,
            usuario,
            cpf,
            senha
          },
          success: (data) => {
            data = JSON.parse(data);

            swal.fire({
              title: "Sucesso",
              html: data.message,
              icon: "success"
            })
          },
          error: (error) => {
            console.log(error)
            swal.fire({
              title: "Erro",
              html: "Erro ao cadastrar",
              icon: "error"
            })
          }
        })
      }
    })
  </script>

  <?php

  include_once('../footer.php');

  ?>