<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM</title>
	
	<!-- Bootstrap Files-->
	<link rel="stylesheet"  href="bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
	<!-- Style files-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript">
		function validate()
		{
		    var inp = document.getElementById('upload');
		    var tmp = document.getElementById('imgg');
		    var ml = document.getElementById('email');
		    var nm = document.getElementById('name');
		    var clg = document.getElementById('college');
		    var cnt = document.getElementById('country');
		    var pd = document.getElementById('password');
		    var pd1 = document.getElementById('rpassword');
		     if(ml.files.length == 0)
		    {
		        alert("Email Required");
		   		tmp.focus();
		    return false;
		    }
		     if(nm.files.length == 0)
		    {
		        alert("Name  Required");
		   		tmp.focus();
		    return false;
		    }
		     if(clg.files.length == 0)
		    {
		        alert("College Name Required");
		   		tmp.focus();
		    return false;
		    }
		     if(cnt.files.length == 0)
		    {
		        alert("Select Country Please");
		   		tmp.focus();
		    return false;
		    }
		     if(pd.files.length == 0)
		    {
		        alert("Password Required");
		   		tmp.focus();
		    return false;
		    }
		     if(pd1.files.length == 0)
		    {
		        alert("Retype Password Required");
		   		tmp.focus();
		    return false;
		    }
		    if(tmp.files.length == 0)
		    {
		        alert("Image Attachment Required");
		   		tmp.focus();
		    return false;
		    }
		    if(inp.files.length == 0){
		        alert("Ppt Attachment Required");
		   		inp.focus();
		    return false;
		    }
		    
		}
	</script>
	<script type="text/javascript" src="js/script.js"></script>
	
</head>
<!-- Body Start here-->
<body style="background-color: black;">
	<div>
		<div  class="header">
			<!-- header section-->
		</div>
		<div  class="mainbody">
				<div>
				<!-- form start here-->
				<form action="process/regis_pro.php" id="reForm" method="post" onSubmit="return(validate());" enctype="multipart/form-data">
					<div class="container-fluid">
					<div class="row">
						<h4 style="color: white;text-align: center; padding: 5px;">REGISTER FORM</h4>
							<div  class="col-lg-12 col-md-12 col-xs-12">
								
								 <div class="row">
								     <div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">						        
								       <input type="text" class="form-control" autofocus="autofocus" id="name" name="name" placeholder="NAME" >
								      </div>
		    				     </div>
		    				     <div class="row">
								      <div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">							        
								       <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" required="required">
								       
								      </div>
		    				     </div> 
		    				     <div class="row">
								      <div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">						        
								       <input type="text" class="form-control" id="college" name="college" placeholder="COLLEGE" required="required">
								       
								      </div>
		    				     </div> 
		    				     <div class="row">
								      <div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">						        
								       <select class="form-control" id="country" name="country" required="required">
								       	<option value="">COUNTRY</option>
								       	<option value="INDIA">INDIA</option>
								       	<option value="AFGHANISTAN">AFGHANISTAN</option>
								       	<option value="CANADA">CANADA</option>
								       	<option value="CALIFORNIYA">CALIFORNIYA</option>
								       </select>
								       
								      </div>
		    				     </div> 
								<div class="row">
									<div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">	
										<label class="form-control" > <input style="display: none;" type="file" name="images"   accept="image/*" id="imgg"  >UPLOAD IMAGE</label>
									</div>
									
								</div>
								<div class="row">
									<div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">	
										<label id="msfiles1" class="form-control" >UPLOAD PPT FILE ONLY* <input  accept="application/vnd.ms-powerpoint" style="float: right; width: 92px;" type="file" name="msfile" id="upload"    ></label>
									</div>
									
								</div>	
								 <div class="row">
								      <div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">						        
								       <input type="password" class="form-control" id="password" name="password" placeholder="PASSWORD" required="required">
								       
								      </div>
		    				     </div>
		    				      <div class="row">
								      <div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">						        
								       <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="RETYPE PASSWORD" required="required">
								       
								      </div>
		    				     </div>
		    				     <div class="row">
								     <div class="col-lg-4"></div>
								      <div class="form-group col-lg-4">						        
								       <textarea type="text" style="height: 78px !important; resize: none;" class="form-control" id="message" name="message" placeholder="MESSAGE *maximum 50 words" required="required"></textarea>
								       <p  class="lkl">IF YOU AlREADY AN USER ?<a  style="color: white;" href="login.php">LOGIN HERE</a></p>
								       
								      </div>
		    				     </div> 
		    				     <div class="row">
								     
								      <div class="form-group " align="center">					        
								       <input type="submit" style="border-radius: 16px; width: 119px;" name="submit" class="btn  waves-effect waves-light" onClick="validation();" value="REGISTER"> 
								       </div>
		    				     </div> 

    				
    				
    			</div>
				</div>
				</form>
				<!--Form ended here-->
			</div>
		</div>
	</div>

</body>
<!-- Body Ended here-->
</html>