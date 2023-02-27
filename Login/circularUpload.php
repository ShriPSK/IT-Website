<?php
	session_start();
	include("../templates/header1.php");
	include("../connection.php");
?>
<head>
<style>
        .circular
        {
            border: 2px solid #808080;
            border-radius: 30px;
            width: 50%;
            height: 50%;
			/* display: flex; */
			/* justify-content: center; */
			margin-left: 25%;

        }
        ::placeholder
        {
            font-size: 18px;
            font-color: red;
            padding-left: 10px;
        }
    </style>
</head>
<br><br>
<body>
	<div class="circular_upload">
				<form method="post" enctype="multipart/form-data" class="circular">
					<br><center><h3>Upload PDF with Username</h3></center><br>
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
					?><br>
					<div class="form-group form-control-lg">
						<input type="text" placeholder="Enter your name" name="name">
					</div>
					<div class="form-group form-control-lg">
						<input type="file" placeholder="Enter file name" name="pdf_file" accept=".pdf" required>
					</div>
					
					<div class="form-group form-control-lg">
                        <input type="date" name="date" class="form-control" required>
                    </div>

					<div class="form-group form-control-lg">
                            <label for="type" id="type1">Type</label>
                            <select id="type" name="type" class="form-control">
								<option value="Choose">Choose</option>
                                <option value="Staff">Staff</option>
                                <option value="Student">Student</option>
                                <option value="General">General</option>
                                <option value="Examination">Examination</option>
                            </select>
                    </div>

					<div class="form-group form-control-lg">
						<center><input type="submit" style="padding: 10px;width: 20%;border-radius: 30px;" name="submit" value="submit"></center>
					</div>
				</form>
			</center>
	</div>
	<?php require("../templates/footer.php");?>
</body>
