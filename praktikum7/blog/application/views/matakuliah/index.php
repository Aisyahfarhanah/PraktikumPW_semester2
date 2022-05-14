<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
</head>
<body>
    <h3>Mata Kuliah<h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mkh as $mkh) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mkh -> nama ?></td>
                <td><?php echo $mkh -> sks ?></td>
                <td><?php echo $mkh -> kode ?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>