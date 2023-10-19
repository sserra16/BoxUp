<?php

include_once('../header.php');

?>

<div class="d-flex align-items-center py-4 bg-body-tertiary h-100">
  <main class="form-signin w-50 m-auto">
    <form class='d-flex flex-column gap-4'>
      <h1 class="h3 mb-3 fw-normal">Cadastrar</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Senha</label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>
  </main>
</div>

<?php

include_once('../footer.php');

?>