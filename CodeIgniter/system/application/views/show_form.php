<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SearchPerson</title>
<link href = "<?php echo base_url();?> style/style.css" rel="stylesheet" type="text/css"/>

<link href = "<?php echo base_url();?> style/calender.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div class = "content">
		<h1><?php echo $title;?></h1>
		<?php echo $message;?>
		<form method = "post" action= "<?php echo $action;?>"/>
		<div class="data">
			<tr>
			<td valign="top">search<span style="color:red;"></span></td>
			<td><input type="text" name="name" class= "text" value= "<?php echo $this->validation->search;?>"/>
			<?php echo $this->validation->search_error;?></td>
			</tr>
		</div>
</body>
</html>