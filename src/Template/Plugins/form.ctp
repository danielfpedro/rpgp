<script type="text/javascript">
    $(function(){
        $('#namespace').keyup(function(){
            var fullNamespace = 'danielfpedro\\' + $(this).val();
            $('.show-full-namespace').text(fullNamespace);    
        })
        
    })
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?= $this->Form->create($plugin) ?>
                <?php
                    echo $this->Form->input('name');
                    echo $this->Form->input('namespace');
                ?>
                <p class="show-full-namespace"></p>
                <?php
                    echo $this->Form->input('description');
                    echo $this->Form->input('tags');
                    echo $this->Form->input('category_id');
                    echo $this->Form->input('rpgmaker_version_id');
                ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>