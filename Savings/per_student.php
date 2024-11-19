<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Outcome Table</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Outcome by Student</h2>
    
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">No.</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col" class="text-center">Total Nominal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $grandTotal = 0;
                foreach ($PerStudent as $student): ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= h($student->name); ?></td>
                        <td><?= h($student->created->format('Y-m-d H:i:s')); ?></td>
                        <td class="text-center">Rp <?= number_format($student->total_nominal, 2, ',', '.'); ?></td>
                    </tr>
                <?php
                    $grandTotal += $student->total_nominal;
                endforeach; ?>
            </tbody>
            <tfoot>
                <tr class="table-primary font-weight-bold">
                    <td colspan="3" class="text-right">GRAND TOTAL</td>
                    <td class="text-center">Rp <?= number_format($grandTotal, 2, ',', '.'); ?></td>
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
