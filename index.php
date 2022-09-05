<?php require_once 'Includes/Header.php'; ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Filiação</th>
            <th>CPF</th>
            <th>Nascimento</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cep</th>
            <th>Municipio</th>
            <th>Email</th>
            <th>Telefone</th>
            <th></th>
            <th></th>
        </tr>
            <?php foreach(Select() as $value): ?>
                <tr>
                    <td><?= $value['id'] ?></td> 
                    <td><?= $value['nome'] ?></td>
                    <td><?= $value['filiacao'] ?></td>
                    <td><?= $value['cpf'] ?></td>
                    <td><?= $value['nascimento'] ?></td>
                    <td><?= $value['endereco'] ?></td>
                    <td><?= $value['bairro'] ?></td>
                    <td><?= $value['cep'] ?></td>
                    <td><?= $value['municipio'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['tel'] ?></td>
                    <td><a href="editar.php?id=<?= $value['id'] ?>"><button class="but" >Editar</button></a></td>
                    <td><a href="app/ControllerApp.php?excluir=<?= $value['id'] ?>"><button class="but" >Excluir</button></a></td>
                </tr>
            <?php endforeach ?>
    </table>
</body>
</html>