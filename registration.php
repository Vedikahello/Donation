<?php
require_once('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>User Registration</title>
    <link rel= "stylesheet" href="reg.css">
</head>
<body>

<div>
    <?php
     
    ?>
</div>
 <div>
     <form method="post" action="registration.php">
         <div class="container">

           <div class="row">
            <div class="col-sm-3">
             <h1>Registration</h1>
             
             <hr class="mb-3">
             
             <div class="form-group">
             <lable for="firstname"><b>First Name</b></lable>
             <input class="form-control" id="firstname"  type="text" name="firstname" required>
             </div>

             <div class="form-group">
             <lable for="lastname"><b>Last Name</b></lable>
             <input class="form-control" id="lastname" type="text" name="lastname" required>
             </div>

             <div class="form-group">
             <lable for="email"><b>Email Address</b></lable>
             <input class="form-control" id="email" type="email" name="email" required>
             </div>

             <div class="form-group">
             <lable for="phonenumber"><b>Phone Number</b></lable>
             <input class="form-control" id ="phonenumber" type="text" name="phonenumber" required>
             </div>
            
             <hr class="mb-3">
             <button type="submit" id="register" name="create" value="Sign Up">Register</button> 
            </div>
           </div>
         </div>
     </form>
 </div> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
 <script type="text/javascript">
	$(function(){
        $('#register').click(function(e){

            var valid = this.form.checkValidity();
            if(valid){

                var firstname   = $('#firstname').val();
                var lastname    = $('#lastname').val();
                var email       = $('#email').val();
                var phonenumber = $('#phonenumber').val();

                e.preventDefault();
  
                $.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber},
					success: function(data){
					Swal.fire({
								'title': 'Registration Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Error',
								'text': 'There is some error while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
 </script>


</body>
</html>