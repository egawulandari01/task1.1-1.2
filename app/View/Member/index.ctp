<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Member</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <?php
                        foreach ($Members as $movie) :
                        ?>
                            <td><?= $movie['Member']['id']; ?></td>
                            <td><?= $movie['Member']['nik']; ?></td>
                            <td><?= $movie['Member']['nama']; ?></td>
                            <td class="action">
                                <?= $this->Html->link('Detail', ['action' => 'view', $movie['Member']['id']]); ?>
                                <?= $this->Html->link('Edit', ['action' => 'edit', $movie['Member']['id']]); ?>
                                <?php
                                echo $this->Form->postLink(
                                    'Delete',
                                    array('action' => 'delete', $movie['Member']['id']),
                                    array('confirm' => 'Are you sure?')
                                );
                                ?>
                            </td>
                    </tr>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>Tambah Member</h1>
                <ul>
                    <li><?= $this->Html->link('Tambah', ['action' => 'add']); ?></li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>