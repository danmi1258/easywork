<?php
//000000000000s:4473:"SELECT SQL_CALC_FOUND_ROWS t1.id as id,t1.title as t1_old_title,t1.to_id as t1_old_to_id,t4.username as t4_old_fromname,t2.username as t2_old_username,t6.sort as t1_old_level,t6.val as t1_new_level,t1.level as level,t5.sort as t1_old_degree,t5.val as t1_new_degree,t1.degree as degree,t3.sort as t1_old_status,t3.val as t1_new_status,t1.status as status,t1.startdate as t1_old_startdate,t1.enddate as t1_old_enddate,round(t1.plantime,1) as t1_old_plantime,( SELECT ROUND(SUM(tt1.worktime),1) FROM dwin_worklog_table as tt1 WHERE ( tt1.task_id=t1.id )  ) as t1_new_realtime,t1.uptime as t1_old_uptime,CONCAT_WS(' ',coalesce(( SELECT concat_ws('','<div class=\"wt\" onclick=\"getDetailWork(',tt1.id,')\"><span class=\"wl\">',tt2.val,'</span><span class=\"wr\">',ROUND(tt1.worktime,1),'<span></div>') FROM dwin_worklog_table as tt1 LEFT JOIN  dwin_linkage as tt2 on tt2.id = tt1.status WHERE ( tt1.task_id=t1.id and tt1.addtime='2017-07-30' )  ),concat('<div class=\"wt\" onclick=getAddWork(\"2017-07-30\"\,',t1.id,')>&nbsp;</div>'))) as w1,(coalesce(( SELECT concat_ws('','<div class=\"wt\" onclick=\"getDetailWork(',tt1.id,')\"><span class=\"wl\">',tt2.val,'</span><span class=\"wr\">',ROUND(tt1.worktime,1),'<span></div>') FROM dwin_worklog_table as tt1 LEFT JOIN  dwin_linkage as tt2 on tt2.id = tt1.status WHERE ( tt1.task_id=t1.id and tt1.addtime='2017-07-24' )  ),concat('<div class=\"wt\" onclick=getAddWork(\"2017-07-24\"\,',t1.id,')>&nbsp;</div>'))) as w2,(coalesce(( SELECT concat_ws('','<div class=\"wt\" onclick=\"getDetailWork(',tt1.id,')\"><span class=\"wl\">',tt2.val,'</span><span class=\"wr\">',ROUND(tt1.worktime,1),'<span></div>') FROM dwin_worklog_table as tt1 LEFT JOIN  dwin_linkage as tt2 on tt2.id = tt1.status WHERE ( tt1.task_id=t1.id and tt1.addtime='2017-07-25' )  ),concat('<div class=\"wt\" onclick=getAddWork(\"2017-07-25\"\,',t1.id,')>&nbsp;</div>'))) as w3,(coalesce(( SELECT concat_ws('','<div class=\"wt\" onclick=\"getDetailWork(',tt1.id,')\"><span class=\"wl\">',tt2.val,'</span><span class=\"wr\">',ROUND(tt1.worktime,1),'<span></div>') FROM dwin_worklog_table as tt1 LEFT JOIN  dwin_linkage as tt2 on tt2.id = tt1.status WHERE ( tt1.task_id=t1.id and tt1.addtime='2017-07-26' )  ),concat('<div class=\"wt\" onclick=getAddWork(\"2017-07-26\"\,',t1.id,')>&nbsp;</div>'))) as w4,(coalesce(( SELECT concat_ws('','<div class=\"wt\" onclick=\"getDetailWork(',tt1.id,')\"><span class=\"wl\">',tt2.val,'</span><span class=\"wr\">',ROUND(tt1.worktime,1),'<span></div>') FROM dwin_worklog_table as tt1 LEFT JOIN  dwin_linkage as tt2 on tt2.id = tt1.status WHERE ( tt1.task_id=t1.id and tt1.addtime='2017-07-27' )  ),concat('<div class=\"wt\" onclick=getAddWork(\"2017-07-27\"\,',t1.id,')>&nbsp;</div>'))) as w5,(coalesce(( SELECT concat_ws('','<div class=\"wt\" onclick=\"getDetailWork(',tt1.id,')\"><span class=\"wl\">',tt2.val,'</span><span class=\"wr\">',ROUND(tt1.worktime,1),'<span></div>') FROM dwin_worklog_table as tt1 LEFT JOIN  dwin_linkage as tt2 on tt2.id = tt1.status WHERE ( tt1.task_id=t1.id and tt1.addtime='2017-07-28' )  ),concat('<div class=\"wt\" onclick=getAddWork(\"2017-07-28\"\,',t1.id,')>&nbsp;</div>'))) as w6,(coalesce(( SELECT concat_ws('','<div class=\"wt\" onclick=\"getDetailWork(',tt1.id,')\"><span class=\"wl\">',tt2.val,'</span><span class=\"wr\">',ROUND(tt1.worktime,1),'<span></div>') FROM dwin_worklog_table as tt1 LEFT JOIN  dwin_linkage as tt2 on tt2.id = tt1.status WHERE ( tt1.task_id=t1.id and tt1.addtime='2017-07-29' )  ),concat('<div class=\"wt\" onclick=getAddWork(\"2017-07-29\"\,',t1.id,')>&nbsp;</div>'))) as w7,CASE WHEN t1.status=51 THEN '<div style="background-color: #83a6fe; width:100%; text-align:center;">已完成</div>' WHEN t1.status=9 THEN '<div style="background-color: #ab4cab; width:100%; text-align:center;">待进行</div>' WHEN TO_DAYS(NOW())>TO_DAYS(t1.enddate) THEN '<div style="background-color: #FE4B3D; width:100%; text-align:center;">延误</div>' ELSE '<div style="background-color: #3DFE42; width:100%; text-align:center;">进行中</div>' END as t1_old_pass FROM dwin_task_table as t1 LEFT JOIN  dwin_user_table as t2 on t2.id = t1.to_id LEFT JOIN  dwin_user_table as t4 on t4.id = t1.from_id LEFT JOIN  dwin_linkage as t6 on t6.id = t1.level LEFT JOIN  dwin_linkage as t5 on t5.id = t1.degree LEFT JOIN  dwin_linkage as t3 on t3.id = t1.status HAVING id in(( SELECT task_id as id FROM `dwin_task_main_table` WHERE ( pro_id=4 )  )) ORDER BY t1_old_uptime desc LIMIT 0,8  ";
?>