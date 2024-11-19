<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income Table</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center text-dark mb-4">Income</h1>

    <div class="bg-white rounded-lg shadow-sm p-4">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col" class="text-right">Nominal (Rp)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $total = 0;
                    foreach ($income as $i) : ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= h($i->user->name); ?></td>
                        <td><?= h($i->user->group->name); ?></td>
                        <td class="text-right"><?= number_format($i->nominal, 2, ',', '.'); ?></td>
                    </tr>
                <?php
                    $total += $i->nominal;
                    endforeach; ?>
            </tbody>
            <tfoot>
                <tr class="table-primary font-weight-bold">
                    <td colspan="3" class="text-right">TOTAL</td>
                    <td class="text-right"><?= number_format($total, 2, ',', '.'); ?></td>
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
