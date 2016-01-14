<?PHP
Configure::write('Painel.menu.Box',array(
    'Gerenciar Box'=>array('plugin'=>'boxes','controller'=>'boxes','action'=>'index','admin'=>true),
    'Adicionar Box'=>array('plugin'=>'boxes','controller'=>'boxes','action'=>'add','admin'=>true),
));