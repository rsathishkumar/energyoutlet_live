<?php
function getprocessedrebates($uid)
{
$regionCodes = db_query("SELECT DISTINCT GROUP_CONCAT (DISTINCT rebateid ORDER BY rebateid)  AS rebates FROM rebatesprocess  WHERE uid=".$uid);
$result=$regionCodes->fetchColumn(0);
$rebatesids=$result;
$rebates=array();
$rebates=explode(',',$rebatesids);
$_SESSION['rebates']=array();
$_SESSION['rebates']='';
}	
?>