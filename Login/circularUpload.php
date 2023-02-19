<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itdepartment";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error);
    } else{
        echo "Connected to db";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container" style="margin-top:30px">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
			<strong>Fill UserName and Upload PDF</strong>
				<form method="post" enctype="multipart/form-data">
					<?php
						// If submit button is clicked
						if ($_POST && isset($_POST['submit']))
						{
						// get name from the form when submitted
						$name = $_POST['name'];	
                        $date= $_POST['date'];
                        $type= $_POST['type'];

						if (isset($_FILES['pdf_file']['name']))
						{
						// If the ‘pdf_file’ field has an attachment
							$file_name = $_FILES['pdf_file']['name'];
							$file_tmp = $_FILES['pdf_file']['tmp_name'];
							
							// Move the uploaded pdf file into the pdf folder
							move_uploaded_file($file_tmp,"../PDF/circulars/".$file_name);
							// Insert the submitted data from the form into the table
							$insertquery =
							"INSERT INTO circular_data(circular_name,date, type, filename) VALUES('$name','$date','$type', '$file_name')";
							
							// Execute insert query
							$iquery = mysqli_query($con, $insertquery);	

								if ($iquery)
							    {							
					?>											
								<div class=
								"alert alert-success alert-dismissible fade show text-center">
									<a class="close" data-dismiss="alert" aria-label="close">
									×
									</a>
									<strong>Success!</strong> Data submitted successfully.
								</div>
								<?php
								}
								else
								{
								?>
								<div class=
								"alert alert-danger alert-dismissible fade show text-center">
									<a class="close" data-dismiss="alert" aria-label="close">
									×
									</a>
									<strong>Failed!</strong> Try Again!
								</div>
								<?php
								}
							}
							else
							{
							?>
								<div class=
								"alert alert-danger alert-dismissible fade show text-center">
								<a class="close" data-dismiss="alert" aria-label="close">
									×
								</a>
								<strong>Failed!</strong> File must be uploaded in PDF format!
								</div>
							<?php
							}// end if
						}// end if
					?>
					
					<div class="form-input py-2">
						<div class="form-group">
							<input type="text" class="form-control"
								placeholder="Enter your name" name="name">
						</div>								
						<div class="form-group">
							<input type="file" name="pdf_file"
								class="form-control" accept=".pdf" required/>
						</div>
                        <div>
                            <input type="date" name="date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="type">Type</label>
                            <select id="type" name="type" class="form-control">
								<option value="Choose">Choose</option>
                                <option value="Staff">Staff</option>
                                <option value="Student">Student</option>
                                <option value="General">General</option>
                                <option value="Examination">Examination</option>
                            </select>
                        </div>
						<div class="form-group">
							<input type="submit"
								class="btnRegister" name="submit" value="Submit">
						</div>
					</div>
				</form>
			</div>		
		</div>
	</div>
</body>
</html>
