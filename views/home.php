<div class="caixa">
    <form method="post" action="login.php" autocomplete="off">
        <h3 class="text-center fw-bold mb-4">Sistema Bibliotecário</h3>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Login</label>
            <input type="text" class="form-control bg-dark text-light border-0" name="usu_login" placeholder="Digite seu login">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control bg-dark text-light border-0" name="usu_senha" placeholder="Digite sua senha">
        </div>
        <button type="submit" class="btn btn-dark w-100">Entrar</button>
    </form>
    <?php if (isset($_GET['erroLogin'])): ?>
        <div id="erroLogin" class="alert alert-danger mt-3" role="alert">
            Erro! Tente novamente.
        </div>
    <?php endif; ?>
</div>
