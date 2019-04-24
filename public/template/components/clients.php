<?
// require_once 'src/classes/Clients.php';
 $clientes  = new Clients();
?>
<div id="clients">
    <div class="row ">
        <div class="col s12 center-align">
            <div class="card">
                <div class="card-content">
                    <div class="card-title">
                        <h4>Todos os Clientes</h4>
                    </div>
                    <div>
                        <table class="striped">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Menu</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00</td>
                                    <td>Nome Completo</td>
                                    <td>email@email.com</td>
                                    <td>
                                        <button class="btn waves-effect btn-info">Editar</button>
                                        <button class="btn waves-effect btn-danger">Apagar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
