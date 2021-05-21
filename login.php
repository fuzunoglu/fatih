<?php 

		
          if(isset($_POST)){
               
               if($_POST['Uname']=='g171210379@sakarya.edu.tr' && $_POST['Pass']=='g171210379'){
                   echo "Hoşgeldiniz  ".  $_POST['Pass']; 
				   
				   return;
               }
               else echo "Kullanıcı adınız veya şifreniz hatalı";
			   header("location:login.html");
           }
?>