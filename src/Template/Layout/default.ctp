<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('../lib/bootstrap/dist/css/bootstrap.min.css') ?>

    <?= $this->Html->script('../lib/jquery/dist/jquery.min.js') ?>
    <?= $this->Html->script('../lib/bootstrap/dist/js/bootstrap.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>

    <?= $this->element('navbar') ?>;

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            
            <div>
                <form method="GET" action="<?= $this->Url->build(['controller' => 'Plugins', 'action' => 'search']) ?>">
                    <input type="text" class="form-control" value="<?= $this->request->query('q') ?>" name="q">
                    <button type="submit">Pesquisar</button>
                </form>
            </div>

                <?= $this->fetch('content') ?>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
</body>
</html>
