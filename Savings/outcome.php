<!DOCTYPE html>
<html lang="en">
<head>
    <title>Outcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center text-dark mb-4">Outcome</h1>

    <div class="table-responsive bg-white rounded shadow-sm">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col" class="text-center">Nominal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $total = 0;
                    foreach ($outcome as $i): ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= h($i->user->name); ?></td>
                        <td><?= h($i->user->group->name); ?></td>
                        <td class="text-center">Rp <?= number_format($i->nominal, 2, ',', '.'); ?></td>
                    </tr>
                <?php
                    $total += $i->nominal;
                    endforeach; ?>
            </tbody>
            <tfoot>
                <tr class="table-primary font-weight-bold">
                    <td colspan="3" class="text-end">TOTAL</td>
                    <td class="text-center">Rp <?= number_format($total, 2, ',', '.'); ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
