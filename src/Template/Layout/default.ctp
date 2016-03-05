<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>

    <?= $this->Html->css('../lib/bootstrap/dist/css/bootstrap.min.css') ?>
    <?= $this->Html->css('style.min.css') ?>

    <?= $this->Html->script('../lib/jquery/dist/jquery.min.js') ?>
    <?= $this->Html->script('../lib/bootstrap/dist/js/bootstrap.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>

    <?= $this->element('navbar') ?>;

    <div class="container-search">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <form method="GET" action="<?= $this->Url->build(['controller' => 'Plugins', 'action' => 'search']) ?>">
                        <input type="text" class="form-control form-control-lg" value="<?= $this->request->query('q') ?>" name="q" autocomplete="off" placeholder="Search plugins...">
                    </form>      
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
