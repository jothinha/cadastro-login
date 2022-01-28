<!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8"/>
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Cadastro</title>
    </head>
    <body> 
<div>
  <div>
    <div>
      <div>
       <h1>Cadastro de Cliente</h1><br><br>
      </div>
      <form action="adcontato.php" method="post">
      <div id="form">
        <div>
         <label  for= "nome"> Nome completo:</label><br>
         <input type='text' id="form"  name="nome"><br>
        </div> 
        <div>
         <label for=email>E-mail:</label><br>
         <input type="email"  name='email'><br>
        </div>
        <div>
         <label for="documento">CPF/CPNJ:</label><br>
         <input type="text"  name='documento'><br>
        </div>
        <div>
         <label>Senha:</label><br>
         <input type='password'  name="pass"><br>
        </div>
        <div>
         <label>Telefone:</label> <br>
         <input type="text"  name="numero"><br>
        </div>
        <div>
        <label for="datanascimento">Data de Nascimento</label><br>
        <input type="date"  name="dt_nascimento"><br>
        </div>
        <button type="submit" class="btn btn-warning">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>