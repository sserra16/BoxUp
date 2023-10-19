<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/BoxUp/src/js/jquery.min.js"></script>
  <title>BoxUp!</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</head>

<?php

include_once('../toast.php');

?>

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
            <div class="flex items-center mb-4">
              <input id="motorista" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Motorista</label>
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



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

  <script>
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
      const motorista = $("#motorista").is(":checked")

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
            senha,
            motorista
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