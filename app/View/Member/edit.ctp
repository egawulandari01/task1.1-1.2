<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?= $this->Form->create('Member'); ?>
                <?= $this->Form->inputs(['nik', 'nama']); ?>
                <?= $this->Form->end('Edit'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Daftar Member</h3>
                <ul>
                    <li><?= $this->Html->link('Daftar Member', ['action' => 'index']); ?></li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>