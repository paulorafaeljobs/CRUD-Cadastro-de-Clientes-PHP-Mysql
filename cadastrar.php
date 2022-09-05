<?php require_once 'Includes/Header.php'; ?>
<div class="Conteiner">
    <form action="App/ControllerApp.php" method="post" enctype="multipart/form-data">
        <div class="box">
            <div><p>Nome:</p><input type="text" name="nome"></div>            
            <div><p>Filiacão:</p><input type="text" name="filiacao"></div>
        </div>
        <div class="box">
            <div><p>CPF:</p><input type="text" name="cpf"></div>
            <div><p>Nascimento:</p><input type="text" name="nascimento"></div>
        </div>
        <div class="box">
            <div><p>Endereço:</p><input type="text" name="endereco"></div>
            <div><p>Bairro</p><input type="text"  name="bairro"></div>
        </div>
        <div class="box">
            <div><p>Cep:</p><input type="text" name="cep"></div>
            <div><p>Municipio:</p><input type="text" name="municipio"></div>
        </div>
        <div class="box">
            <div><p>Email:</p><input type="text" name="email"></div>
            <div><p>Telefone:</p><input type="text" name="tel"></div>
        </div>
        <button class="btn" name="cadastrar" type="submit">Salvar</button>
    </form>
</div>
</body>
</html>