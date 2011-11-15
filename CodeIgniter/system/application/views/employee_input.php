
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link rel="stylesheet" href='<?=base_url ()?>css/employee.css'
type="text/css" />
<style type="text/css">
body,td,th {
	font-family: "Times New Roman", Times, serif;
}
</style>
</head>
<body>
<div id="menu"><?php
	echo anchor ( 'employee/index', 'แสดงข้อมูล' );
	echo "|";
	echo anchor ( 'employee/input', 'เพิ่มข้อมูล' );
	?>
</div>
<br />
	<?php
		echo $this->validation->error_string;
		echo form_open ( 'employee/input' );
		echo"<div>";
		echo "ชื่อ:";
		echo form_input($ffname);
		echo "</div>";
		echo"<div>";
		echo "นามสกุล:";
		echo form_input($flname);
		echo "</div>";
		echo "<div>";
		echo "ตำแหน่ง:";
		echo form_checkbox('jobname', $fjobname, $fjobnames);
		echo "</div>";
		echo "<div>";
		echo "สถานะ:";
		echo form_radiobutton($fmember);
		echo "</div>";
		echo "<div>";
		echo "ชื่อเล่น:<br/>";
		echo form_textField($fnickname);
		echo "</div>";
		echo "<div>";
		echo form_submit("Submit","ตกลง");
		echo form_reset("Reset","ยกเลิก");
		echo "</div>";
		echo form_hidden('id', $fid);
		echo form_close ();

?>
</body>
</html