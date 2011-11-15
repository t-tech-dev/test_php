<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
</head>
<body>
<h1><?php echo $heading;?></h1>

<ul>
<?php foreach($todo_list as $item):?>

<li><?php echo $item;?></li>
<?php endforeach?>

</body>
</html>