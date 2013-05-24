<?php defined('SYSPATH') OR die('No direct access allowed.');
echo html::admin_stylesheet('screen.css');
echo html::admin_stylesheet('jquery.treeview.css');
echo html::admin_script('jquery.treeview.js');
?>
<script type="text/javascript">
$(document).ready(function(){
    $('.item').mouseover(function(){$(this).addClass('over');}).mouseout(function(){$(this).removeClass('over');});
    $('.list').mouseover(function(){$(this).addClass('over');}).mouseout(function(){$(this).removeClass('over');});
    $('.page').mouseover(function(){$(this).addClass('over');}).mouseout(function(){$(this).removeClass('over');});
    $('.url').mouseover(function(){$(this).addClass('over');}).mouseout(function(){$(this).removeClass('over');});
});
$(function() {
    $("#browser").treeview();
});
</script>
<div id="content_content">
<ul class="inlinelist">
    <li class="prominent"><?php echo html::admin_anchor('/diagram_manage/diagram_new/', T::_('Add a new diagram')); ?></li>
</ul>
<p class="u"> </p>

<div id="diagram_map">
<?php echo $diagram_list; ?>
</div>
</div>
