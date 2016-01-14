<?PHP
$this->Html->script('jquery-ui-1.10.0.custom.min',array('inline'=>false));
?>
<fieldset class="box">
    <legend>LightBox</legend>
    <nav class="pannel">
        <?PHP echo $this->Html->link('Adicionar Vídeo',array('plugin'=>'boxes','controller'=>'boxes','action'=>'add','admin'=>true)) ?>
    </nav>
    <table class="tables">
        <thead>
            <tr>
                <td class="thumb"><a>Vídeo</a></td>
                <td class="created"><?=$this->Paginator->sort('created','Criado')?></td>
                <td class="modified"><?=$this->Paginator->sort('modified','Modificado')?></td>
                <td class="edit">&nbsp;</td>
                <td class="delete">&nbsp;</td>
            </tr>
        </thead>
        <tbody class="sortable">
            <?PHP foreach($posts as $post): ?>
            <tr data-id="<?=$post['Box']['id']?>">
                <td><?=$post['Box']['code']?></td>
                <td><?=$post['Box']['cdate']?></td>
                <td><?=$post['Box']['mdate']?></td>
                <td><?=$this->Html->link('Editar',array('action'=>'edit',$post['Box']['id']))?></td>
                <td><?=$this->Html->link('Excluir',array('action'=>'delete',$post['Box']['id']),false,'Tem certeza?')?></td>
            </tr>
            <?PHP endforeach; ?>
        </tbody>
    </table>
    <?=$this->element('Painel.paginator');?>
</fieldset>

<script type="text/javascript">
    var base='<?= $this->base ?>';
    jQuery(function($){
        $(".sortable").sortable({
            stop:function(evt,ui){
                $(".sortable>tr").each(function(i,e){
                    var id=$(e).attr('data-id');
                    var index=$(e).index();
                    $.getJSON(base+'/admin/boxes/boxes/order/'+id+'/'+index,function(data){
                    });
                });
            }
        });
    });
</script>