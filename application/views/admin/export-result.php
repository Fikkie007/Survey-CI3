<!DOCTYPE html>
<html>

<head>
    <title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Hasil Jawaban.xls");
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Pertanyaan</th>
                <th>Kategori</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($hasil as $h) : ?>
                <tr>
                    <th scope="row"><?php echo $i ?></th>
                    <td><?php echo $h['name'] ?></td>
                    <td><?php echo $h['pertanyaan'] ?></td>
                    <td><?php echo $h['kategori'] ?></td>
                    <td><?php echo $h['answer'] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>