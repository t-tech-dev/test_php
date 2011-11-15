<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EditPerson</title>
<link href = "<?php echo base_url();?> style/style.css" rel="stylesheet" type="text/css"/>

<link href = "<?php echo base_url();?> style/calender.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div class = "content">
		<h1><?php echo $title;?></h1>
		<?php echo $message;?>
		<form method = "post" action= "<?php echo $action;?>">
		<div class="data">
		<table>
			<tr>
			<td width= "50%">ID</td>
			<td><input type= "text" name="id" disabled= "disable" class= "text" value= "<?php echo $this-> validation->id;?>"/></td>
			<input type= "hidden" name= "id" value= "<?php echo $this-> validation->id;?>"/>
			</tr>
			<tr>
			<td valign="top">name<span style="color:red;">*</span></td>
			<td><input type="text" name="name" class= "text" value= "<?php echo $this->validation->name;?>"/>
			<?php echo $this->validation->name_error;?></td>
			</tr>
			<tr>
				<td valign="top">Gender<span style="color:red;">*</span></td>
				<td><input type="radio" name="gender" value="M" <?php echo $this->validation->set_radio('gender','M');?>/>M
					<input type="radio" name="gender" value="F" <?php echo $this->validation->set_radio('gender','F');?>/>F
					<?php echo $this->validation->gender_error;?></td>
			</tr>
				<tr>
					<td valign="top">Date (dd-mm-yyyy)<span style="color:red;">*</span></td>
                <td><input type="text" name="date" onclick="displayDatePicker('date');" class="text" value="<?php echo $this->validation->date; ?>"/>
                <a href="javascript:void(0);" onclick="displayDatePicker('date');"></a>
                <?php echo $this->validation->date_error; ?></td>
				</tr>
				<tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Save" onclick="return confirm
				('Are you sure want to Add new person this person?')"/></td>
            </tr>
        </table>
		</form>
        </div>
        <br />
        <?php echo $link_back; ?>
</body>
</html>