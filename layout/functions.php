<?php 
function insertData($tablename,$Data) {
	$keys = array_keys($Data);
	$values = array_values($Data);
	$InsQuery = "INSERT INTO $tablename (" . implode(",",$keys) . ") VALUES ('".implode("','",$values)."')";
	return  @mysql_query($InsQuery) or die( mysql_error());	
}
function  gGetDetails($tablename,$condition=1) {
	 $GetDataQuery = "SELECT * FROM ".$tablename ." WHERE ". $condition;
	 $GetDataResult = mysql_query($GetDataQuery) or die(mysql_error().":".$GetDataQuery);
	 return ($GetDataResult);
}