<?= $this->Html->script('../lib/blueimp-file-upload/js/vendor/jquery.ui.widget.js') ?>
<?= $this->Html->script('../lib/blueimp-file-upload/js/jquery.fileupload.js') ?>

<input id="fileupload" type="file" name="files[]" data-url="<?= $this->Url->build(['controller' => 'PluginsPhotos', 'action' => 'upload']) ?>" multiple>

<script>
$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        done: function (e, data) {
            console.log('Carregando imagens...');
            loadPhotos();
            $.each(data.result.files, function (index, file) {
            });
        }
    });

    loadPhotos();
    function loadPhotos() {

    	var url = $('#get-photos-url').val();
    	var webroot = $('#webroot').val();

    	$.getJSON(url, function(data){
    		console.log(data);
    		$('#photos').html('');
    		$.each(data.photos, function(index, val) {
    			 var $img = $('<img/>')
    			 	.attr({'src': webroot + 'files/plugins/photos/d/' + val.name, width: '80'});

    			 $img.appendTo($('#photos'));
    		});
    	});
    }
});
</script>

<input type="hidden" id="get-photos-url" value="<?= $this->Url->build(['controller' => 'PluginsPhotos', 'action' => 'getPhotos', '_ext' => 'json']) ?>"></input>
<input type="hidden" id="webroot" value="<?= $this->request->webroot ?>"></input>

<div id="photos">
</div>