
<?php

session_start();

$dbhost = ""; 
$dbuser = "sa"; //你的mssql用户名 
$dbpass = "123456"; //你的mssql密码 
//$dbname = "GroupData3"; //你的mssql库名 
$dbname = "dict"; //你的mssql库名 
$connect=odbc_connect("Driver={SQL Server};Server=$dbhost;Database=$dbname","$dbuser","$dbpass"); 
//if($connect)
//{echo "成功"."<br>";}
//session值的读取:
//$qunarry = $_SESSION['vaule'];

$serach = $_POST['serach']; 
//$qunarry = $_GET['vaule'];
$serach=iconv('utf-8', 'gb2312', $serach); 

//echo $serach;

		$sql = "select * from  dict where explain like '%$serach%' ";
		$query = odbc_exec($connect,$sql);
		while ($result = odbc_fetch_array($query)) {
				$data[] = $result;
		}
		
		
		
		foreach($data as $row) {
			    $Name = $row['explain'];
				echo "<br>";
			    echo "中文:".$Name=iconv('gb2312', 'utf-8', $Name);
				
				echo "<br>";
				echo "英文:".$CtfId = $row['words']; //父节点名字
				echo "<br>";
				
				
			

		}

 
  
?>