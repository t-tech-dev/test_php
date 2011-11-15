<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link rel = "stylesheet" href='<?=base_url()?>">css/employee.css'type="text/css"/>
</head>
<body>
<div id="menu"><?php echo anchor('employee/index','แสดงข้อมูล');
echo "|";
echo anchor('employee/input','เพิ่มข้อมูล')?>
</div>
<br/>
<table>
	<tr>
    <th>ID</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>ตำแหน่ง</th>
    <th>ชื่อเล่น</th>
    <th>สถานะ</th>
    </tr>
 <?php 
	 if($query->num_rows()==0){
		 echo"<tr>";
		 echo"<td colspan=\"6\"align=\"center\">ยังไม่มีข้อมูล</td>";
		 echo"</tr>";
	 }else{
		 foreach($query->result()as $row){
			 echo"<tr>";
			 echo"<td>".$row-> id."</td>";
			 echo"<td>".$row-> Fname."</td>";
			 echo"<td>".$row-> Lname."</td>";
			 echo"<td>".$row-> jobname."</td>";
			 echo"<td>".$row-> nickname."</td>";
			 if($row->member==0){
				 echo"<td>เลิกทำ</td>"; 
			 }else{
				  echo"<td>ทำงาน</td>";
				 }
			  echo "<td>".anchor("employee/input".$row->id,"แก้ไข")."</td>";
			  echo "<td>".anchor("employee/del".$row->id,"ลบ")."</td>";
			  echo "</tr>";
			 }
	 }
 ?>
</table>
</body>
</html>