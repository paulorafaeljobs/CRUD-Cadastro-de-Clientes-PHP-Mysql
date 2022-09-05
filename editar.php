<?php require_once 'Includes/Header.php'; ?>
    <div class="Conteiner">
        <form action="App/ControllerApp.php" method="post" enctype="multipart/form-data">
                <?php foreach(SelectUpdate($_GET['id']) as $value): ?>
                <div class="box">
                    <div><p>Nome:</p><input type="text" value="<?= $value['nome'] ?>" name="nome"></div>       
                    <div><p>Filiacão:</p><input type="text" value="<?= $value['filiacao'] ?>" name="filiacao"></div>
                </div>
                <div class="box">
                    <div><p>CPF:</p><input type="text" value="<?= $value['cpf'] ?>" name="cpf"></div>
                    <div><p>Nascimento:</p><input type="text" value="<?= $value['nascimento'] ?>" name="nascimento"></div>
                </div>
                <div class="box">
                    <div><p>Endereço:</p><input type="text" value="<?= $value['endereco'] ?>" name="endereco"></div>
                    <div><p>Bairro</p><input type="text" value="<?= $value['bairro'] ?>" name="bairro"></div>
                </div>
                <div class="box">
                    <div><p>Cep:</p><input type="text" value="<?= $value['cep'] ?>" name="cep"></div>
                    <div><p>Municipio:</p><input type="text" value="<?= $value['municipio'] ?>" name="municipio"></div>
                </div>
                <div class="box">
                    <div><p>Email:</p><input type="text" value="<?= $value['email'] ?>" name="email"></div>
                    <div><p>Telefone:</p><input type="text" value="<?= $value['tel'] ?>" name="tel"></div>
                    <input type="hidden" value="<?= $value['id'] ?>" name="id">
                </div>
            <button class="btn" name="editar" type="submit">Salvar</button>
            <?php endforeach ?>
        </form>
    </div>
</body>
</html>