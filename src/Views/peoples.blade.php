<?php
include_once __DIR__ . './requires/header.blade.php';
?>
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Pessoas</h1>
    <p class="mb-4">Pessoas e seus contatos.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cadastro de Pessoas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th style="text-align: center">Contatos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            
                            foreach ($view as $item) {
                                echo '<tr>';
                                $id = '';
                                foreach ($item as $key => $element) {
                                    if (trim($key) == 'id') {
                                        $id = trim($element);
                                    }
                                    echo '<td>' . $element . '</td>';
                                }
                            
                                echo '<td align="center">
                                    <a href="/test/contact/' .
                                        $id .
                                        '">
                                    <i class="fas fa-address-card"></i>
                                    </a>
                                </td>';
                            
                                echo '</tr>';
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script src="<?php echo ROOT; ?>/public//assets/jquery/jquery.min.js"></script>
<script src="<?php echo ROOT; ?>/public//assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo ROOT; ?>/public//assets/jquery-easing/jquery.easing.min.js"></script>

<script src="<?php echo ROOT; ?>/public//js/sb-admin-2.min.js"></script>


<script src="<?php echo ROOT; ?>/public//assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo ROOT; ?>/public//assets/datatables/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo ROOT; ?>/public//js/demo/datatables-demo.js"></script>


</body>

</html>
