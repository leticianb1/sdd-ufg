<?php $this->assign('title', 'Docentes'); ?>
<?php $this->start('breadcrumb'); ?>
<li><?= $this->Html->link('<i class="fa fa-dashboard"></i>' . __('Dashboard'), '/', ['escape' => false]) ?></li>
<li><?= $this->Html->link(__('Docentes'), ['action' => 'index']) ?></li>
<li class="active">Editar #<?= $teacher->id ?></li>
<?php $this->end(); ?>

<?= $this->Form->create($teacher) ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Editar docente #<?= $teacher->id ?></h3>
            </div>
            <div class="box-body">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						  <li class="active"><a href="#geral" data-toggle="tab">Geral</a></li>
						  <li><a href="#nucleos" data-toggle="tab">Núcleos de Conhecimento</a></li>
						  <li><a href="#disciplinas" data-toggle="tab"><?php echo 'Turmas - Processo de Distribuição'; ?></a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="geral">
							<div class="row">
								<div class="col-xs-6">
									<fieldset>
										<legend>Geral</legend>
										<?php
											echo $this->Form->input('registry', ['label' => 'Matrícula', 'placeholder' => 'Matrícula']);
											echo $this->Form->input('rg', ['label' => 'RG', 'placeholder' => 'RG']);
											echo $this->Form->input('cpf', ['label' => 'Núcleo de conhecimento', 'placeholder' => 'CPF']);
											echo $this->Form->input('birth_date', ['label' => 'Data de Nascimento', 'placeholder' => 'Data de Nascimento']);
											echo $this->Form->input('url_lattes', ['label' => 'URL Lattes', 'placeholder' => 'URL Lattes']);
											echo $this->Form->input('entry_date', ['label' => 'Data de Ingresso', 'placeholder' => 'Data de Ingresso']);
											echo $this->Form->input('formation', ['label' => 'Formação', 'placeholder' => 'Formação']);
											echo $this->Form->input('workload', ['label' => 'Carga Horária', 'placeholder' => 'Carga Horária']);
											echo $this->Form->input('about', ['label' => 'Sobre', 'placeholder' => 'Sobre']);
											echo $this->Form->input('situation', ['label' => 'Situação', 'placeholder' => 'Situação']);
										?>
									</fieldset>
								</div>
								<div class="col-xs-6">
									<fieldset>
										<legend>Usuário</legend>
										<?php
											echo $this->Form->input('user.name', ['label' => 'Nome do docente', 'placeholder' => 'Nome da docente']);
											echo $this->Form->input('user.email', ['label' => 'Email', 'placeholder' => 'Email']);
											echo $this->Form->input('user.login', ['label' => 'Login', 'placeholder' => 'Nome de Usuário']);
											echo $this->Form->input('user.password', ['label' => 'Senha', 'placeholder' => 'Senha']);
										?>
										<label for="is_admin">É administrador?&nbsp;
										<?php 
											echo $this->Form->radio('user.is_admin', [
												['value' => '1', 'text' => 'Sim'],
												['value' => '0', 'text' => 'Não'],

											], ['hiddenField' => false, 'label' => 'É Administrador', 'disabled' => true]);
										?>
										</label>
									</fieldset>
								</div>
							</div>
						</div>
					
						<div class="tab-pane" id="nucleos">
							Núcleos de Conhecimento
						</div>
						<div class="tab-pane" id="disciplinas">
							Disciplinas
						</div>
					</div>
				
				</div>
            <div class="box-footer clearfix">
                <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div> 
</div>
<?= $this->Form->end() ?>
