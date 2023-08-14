<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="alinhar">
    <div class="buttonsForm">
      <div class="btnColor"></div>
      <button id="btnSignin">Login</button>
      <button id="btnSignup">Cadastro</button>
    </div>
  </div>

  <div class="container">
    <img src="ICONES/logo.png" width="60" height="50">
    <form id="signin">
      <input type="text" placeholder="Email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password" placeholder="Senha" required />
      <i class="fas fa-lock iPassword"></i>
      <div class="divCheck">
        <input type="checkbox" />
        <span id="k">Lembrar senha</span>
      </div>
      <div class="butao">
      <button id="btn" type="submit">Entrar</button>
      </div>
    </form>

    <form id="signup">
      <input type="text" placeholder="Email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password" placeholder="Senha" required />
      <i class="fas fa-lock iPassword"></i>
      <input type="password" placeholder="Confimar senha" required />
      <i class="fas fa-lock iPassword2"></i>
      <div class="divCheck">
        <input type="checkbox" required />
        <span id="k">Termos</span>
      </div>
      <div class="butao">
      <button id="btn" type="submit">Cadastrar</button>
      </div>
    </form>
  </div>

  <script src="{{ asset('jss/index.js') }}"></script>
</body>
</html>