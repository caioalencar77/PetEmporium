<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pet Shop com serviços de tosa, veterinário e adestramento para o seu pet.">
  <title>Pet Emporium - Login</title>
  <link rel="stylesheet" href="styles.css">
  <!-- Font Awesome CDN para ícones (não será usado agora) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Google Fonts (fonte mais estilosa) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<style>
  /* Reset de estilo */
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
  }

  body, html {
      height: 100%;
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #eaf4f1; /* Cor suave de fundo */
  }

  /* Caixa do formulário de login */
  .login-box {
      background: rgba(255, 255, 255, 0.9); /* Fundo com mais transparência */
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
      text-align: center;
      transition: transform 0.3s ease;
  }

  .login-box:hover {
      transform: translateY(-10px);
  }

  .login-box h2 {
      font-size: 2.5rem;
      color: #4CAF50; /* Verde suave */
      margin-bottom: 20px;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      display: flex;
      justify-content: center;
      align-items: center;
  }

  /* Estilo para a imagem da pata */
  .login-box h2 img {
      width: 40px; /* Ajuste o tamanho conforme necessário */
      margin-right: 10px;
  }

  .login-box form {
      display: flex;
      flex-direction: column;
      gap: 20px;
  }

  .login-box label {
      font-size: 1.1rem;
      color: #333;
      text-align: left;
      margin-left: 10px;
  }

  .login-box input {
      padding: 12px;
      border-radius: 10px;
      border: 2px solid #ddd;
      font-size: 1rem;
      color: #555;
      outline: none;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
  }

  .login-box input:focus {
      border-color: #FF6347;
      box-shadow: 0 0 8px rgba(255, 99, 71, 0.5);
  }

  .login-box .options {
      display: flex;
      justify-content: space-between;
      font-size: 0.9em;
      margin: 10px 0;
      color: #777;
  }

  .login-box button {
      background-color: #FF6347; /* Laranja vibrante */
      color: white;
      border: none;
      padding: 14px;
      border-radius: 25px;
      font-size: 1.2rem;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
  }

  .login-box button:hover {
      background-color: #FF4500; /* Laranja escuro */
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  }

  .login-box a {
      color: #FF6347;
      text-decoration: underline;
      font-weight: 600;
  }

  .login-box a:hover {
      color: #FF4500;
  }

  /* Adicionando animação de onda suave ao fundo */
  body::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background: url('https://www.transparenttextures.com/patterns/diagonal-stripes-light.png') repeat;
      z-index: -1;
      animation: waveAnimation 6s infinite ease-in-out;
  }

  @keyframes waveAnimation {
      0% {
          transform: scale(1);
      }
      50% {
          transform: scale(1.05);
      }
      100% {
          transform: scale(1);
      }
  }

  /* Media query para telas pequenas */
  @media (max-width: 768px) {
      .login-box {
          width: 90%;
      }
  }
</style>

<body>

  <div class="login-box">
    <h2><img src="https://cdn-icons-png.flaticon.com/512/12/12638.png" alt="Ícone de Pata">Bem-vindo de Volta!</h2>
    <form>
      <label for="usuario">Usuário</label>
      <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" required>

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

      <div class="options">
        <label><input type="checkbox"> Mantenha-me logado</label>
        <a href="#">Esqueceu a senha?</a>
      </div>

      <button type="submit">Login</button>
    </form>
  </div>

</body>
</html>
