<?php require("../templates/header1.php"); ?>
<?php require("../connection.php"); ?><br><br><br><br>
<head>
    <script>
        document.getElementById("select-month").addEventListener("submit",function(event)
        {
            event.preventDefault();
        });
    </script>
</head>
<h2 class="text-center">General Circulars</h2><br><br>
<form method="post" name="select-month"">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <label>Select month</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                </div>
                <div class="col-6">
                <select name="month" class="form-select form-select-lg" style="width: 100%;" id="month">
                    <option selected>Choose</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                </div>
                <div class="col-3">
                    <center><input type="submit" value="submit" class="btn border border-dark border-5 rounded-pill text-center" name="Submit" style="width:50%;"></center>
                </div>
            </div>
        </div>
    </form><br><br>


<?php
    if(isset($_POST['Submit']))
    {
        if($_POST['month']=="Choose")   echo "<script> alert('Select a month');</script>";
        else        specificMonth($_POST['month'],$con);
    }
    
    function specificMonth($month, $con ){
        $selectQuery = "select * from circular_data where type='General' and month(date)=$month";
        $squery = mysqli_query($con, $selectQuery);
        $count = mysqli_num_rows($squery);
        if($count==0)
        {
            echo '<center><h3> No circulars found</h3><center>';
        }
        else
        {
            echo '
            <div style="margin-left: 5%;margin-right: 5%;">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Circular Name</th>
                        <th>Date</th>
                        <th><center>View Circular</center></th>
                    </tr>
                </thead>
                <tbody>
            ';
            while (($result = mysqli_fetch_assoc($squery))) {
                echo '
                <tr>
                        <td>'.$result['circular_name'].'</td>
                        <td>'.$result['date'].'</td>
                ';
                $target="../PDF/circulars/".$result['filename'];
                echo "<td><center><html><a href='test.php?file=$target' target='_blank'>View</a></html></center></td>";
                echo "</tr>";
             }
        
        }
    }
    echo "</tbody></table></div></div></div>" ;
    require("../templates/footer.php"); 

?>
