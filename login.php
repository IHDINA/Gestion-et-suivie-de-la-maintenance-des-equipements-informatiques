<?php
        include('admin/lib/dbcon.php');
		dbcon(); 
		session_start();	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		/*................................................ admin .....................................................*/
			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			$num_row = mysql_num_rows($result);
			
		/*...................................................Technical Staff ..............................................*/


		$query_client = mysql_query("SELECT * FROM resptech WHERE username='$username' AND password='$password'")or die(mysql_error());
		$num_row_client = mysql_num_rows($query_client);
		$row_client = mysql_fetch_array($query_client);
        /*...................................................fonctionnaire ..............................................*/


        $que = mysql_query("SELECT * FROM fonctionnaire WHERE username='$username' AND password='$password'")or die(mysql_error("non "));
		
		$row_cl = mysql_fetch_array($que);
        $num_r= mysql_num_rows($que);
		/*.................................................................................................*/


		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['admin_id'];
		echo 'true_admin';
		
		mysql_query("insert into user_log (username,login_date,admin_id)values('$username',NOW(),".$row['admin_id'].")")or die(mysql_error());
		/*.................................................................................................*/
		}else if ($num_row_client > 0){
		$_SESSION['id_tech']=$row_client['respAdm_id'];
		echo 'true';
		
		mysql_query("insert into user_log (username,login_date,respAdm_id)values('$username',NOW(),".$row_client['respAdm_id'].")")or die(mysql_error());
		/*................................................... ..............................................*/
		 }
    else if ($num_r > 0){
		$_SESSION['f_id']=$row_cl['fonct_id'];
		echo 'true_f';
    mysql_query("insert into user_log (username,login_date,fonct_id)values('$username',NOW(),".$row_cl['fonct_id'].")")or die(mysql_error("non inere"));




    }else { 
				echo 'false';
		}	
				
		?>