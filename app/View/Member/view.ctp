<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Member</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Detail Member</h1>
                <dl>
                    <dt>NIK</dt>
                    <dd><?= $movie['Member']['nik']; ?></dd>
                    <dt>NAMA</dt>
                    <dd><?= $movie['Member']['nama']; ?></dd>
                </dl>
            </div>
        </div>
    </div>

</body>

</html>