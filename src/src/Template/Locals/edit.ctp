<?php $this->assign('title', 'Locais'); ?>
<?php $this->start('breadcrumb'); ?>
    <li><?= $this->Html->link('<i class="fa fa-dashboard"></i>' . __('Dashboard'), '/', ['escape' => false]) ?></li>
    <li><?= $this->Html->link(__('Locais'), ['action' => 'index']) ?></li>
    <li class="active">Editar #<?= $local->id ?></li>
<?php $this->end(); ?>

<?= $this->Form->create($local) ?>
<div class="row">
    <div class="col-xs-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Editar local #<?= $local->id ?></h3>
            </div>
            <div class="box-body">
                <?php
                    echo $this->Form->input('name', ['label' => 'Nome da local', 'placeholder' => 'Nome da local']);
                    echo $this->Form->input('address', ['label' => 'Localização', 'placeholder' => 'Carga horária teórica']);
                    echo $this->Form->input('capacity', ['label' => 'Capacidade', 'placeholder' => 'Carga horária prática']);
                ?>
            </div>
            <div class="box-footer clearfix">
                <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
</div>
<?= $this->Form->end() ?>
