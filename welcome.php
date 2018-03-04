<?php 
session_start();
if(isset ($_SESSION['username']))
	{
		$server1="localhost";
		$use1="root";
		$pass1="root";
		$conn2=mysqli_connect($server1,$use1,$pass1,"pw5",8889);
		$query2 = "SELECT fullname , avatar FROM Users where username = '".$_SESSION['username']."'";
		$result2 = mysqli_query($conn2, $query2);
		if (mysqli_num_rows($result2) > 0) {
			while($row2 = mysqli_fetch_assoc($result2)){
				$data3= $row2['fullname'];
				$data4= $row2['avatar'];
			}
		}
		echo "<h2>Welcome ".$data3."</h2>";
		echo"<img src='img/".$data4."'/>";
		echo"<p>Your username is: ".$_SESSION['username']."</p>";
		$query3 = "SELECT title,author FROM favoritebooks , books where favoritebooks.username = '".$_SESSION['username']."' and favoritebooks.bookid=books.bookid;";
		$result3 = mysqli_query($conn2, $query3);
		if (mysqli_num_rows($result3) > 0){
			echo "<table><tr><th>List of favorite books:</th></tr>";
			while($row3 = mysqli_fetch_assoc($result3)){
				echo "<tr><td>".$row3['title']."</td>";
				echo "<td>".$row3['author']."</td></tr>";
		}
		echo "</table>";
		}
		else{
			echo "You don't have any favorite books to display";
		}
	}
else
	header("location:login.html");
?>
