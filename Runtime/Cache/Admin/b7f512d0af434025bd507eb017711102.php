<?php if (!defined('THINK_PATH')) exit();?><script language="javascript">$(function(){
	var th = $(".top").height();
	th = 111-th
	var wh = $(window).height()-th;
	$("#filesUserTabs").height(wh);
});
</script><div class="con" id="FilesIndexCon"><div id="filesUserTabs" class="easyui-tabs"><div title="所有文档" data-options="href:'__URL__/fileslist/type/1',cache:false"></div><div title="我创建的文档" data-options="href:'__URL__/fileslist/type/2',cache:false"></div><div title="我编辑的文档" data-options="href:'__URL__/fileslist/type/3',cache:false"></div></div></div>