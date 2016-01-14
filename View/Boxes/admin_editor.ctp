<?PHP
echo $this->Form->create('Box',array('url'=>array('action'=>'add')));
?>

<fieldset class="box">
    <legend>LightBox</legend>
    <?PHP
    echo $this->Form->input('code',array('label'=>'Link (ATENÇÃO: O link deve ser apenas o codigo do youtube )'));
    ?>
</fieldset>

<?PHP
// echo $this->element('Painel.image',array('label'=>'Banner (1920x400)','name'=>'thumb'));
echo $this->Form->hidden('id');
echo $this->Form->end('Enviar');
?>