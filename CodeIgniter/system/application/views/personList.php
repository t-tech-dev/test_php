<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Person Application</title>
<link href ="<?php echo base_url();?> style/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class="content">
    	<h1>Person Application</h1>
        <div class="paging"><?php echo $pagination; ?></div>
        <div class="data"><?php echo $table; ?></div>
        <br />
        <?php echo anchor('person/add/','add new data',array('class'=> 'add'));?>
    </div>
</body>
</html>