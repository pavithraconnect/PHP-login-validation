 <?php
 session_start();
		if($_POST['username']=='' || $_POST['password']==''){
			header("Location:login.html");	
		}
		$server="localhost";
		$use="root";
		$pass="root";
		$conn = mysqli_connect($server,$use,$pass,"pw5",8889);
		$query1= "SELECT username,password FROM Users WHERE username='".$_POST['username']."' and password='".$_POST['password']."'"; 
		$result = mysqli_query($conn, $query1);
		while($row = mysqli_fetch_assoc($result)){
			$data1= $row["username"];
			$data2= $row["password"];
		}
		if($_POST['username']==$data1&&$_POST['password']==$data2){
			$_SESSION['username']=$_POST['username'];
			header("Location:welcome.php"); 
		}
		else{
			header("Location:login.html");	
		}
		
		
 ?>