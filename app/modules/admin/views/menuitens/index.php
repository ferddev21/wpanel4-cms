<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Itens de menu</h3>
        <div class="box-tools pull-right">
            <?= anchor('admin/menuitens/add/'.$menu_id, glyphicon('plus-sign') . 'Novo ítem de menu', array('class'=>'btn btn-sm btn-warning')); ?>
        </div>
    </div>
    <div class="box-body">
        <?= $listagem; ?>
    </div>
</div>