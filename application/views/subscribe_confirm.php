<script type="text/javascript">
modal_hide();
$('.menu li').removeClass('active');

$('#sidebar .menu').find('.result').remove();
content = '<li class="result active"><a id="load-sub-<?php echo $sub_id; ?>-items" href="<?php echo base_url(); ?>home/items/sub/<?php echo $sub_id; ?>"><i class="icon icon-rss"></i><?php echo addslashes($fed_title); ?> (<span>0</span>)</a></li>';
$('#sidebar .menu').append(content);

load_items('<?php echo base_url(); ?>home/items/sub/<?php echo $sub_id; ?>');
</script>
