<?php 

 $server ='localhost' ;
 $user = 'root' ;
 $password = '' ;
 $db = 'coronascan' ;
 $con = mysqli_connect($server, $user, $password, $db);

 if($con){
 	?>
 	<script type="text/javascript">
 		alert("connection success");
 	</script>
 } else {
 <script type="text/javascript">
 	alert("No connection");
 </script>
 <?php
}

 ?>