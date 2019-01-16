<?php
if(isset($_POST['submit'])){
            
        //Fetching variables of the form which travels in URL
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

    
        if($name !='')
        {           
          
            header('Location:http://www.google.com/');
        }
    
     else{
            ?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
         }
        
    }
?>