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
<div class="col-lg-6 col-md-6 col-12">
    <div class="card">
        <div class="card-header text-center">
        <h4>Records from Database</h4>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table>
            <thead>
                <th>Circular Name</th>
                <th>Date</th>
                <th>Type</th>
            </thead>
            <tbody>
            <?php
                $selectQuery = "select * from circular_data where type='Examination'";
                $squery = mysqli_query($con, $selectQuery);

                while (($result = mysqli_fetch_assoc($squery))) {
            ?>
            <tr>
                <td><?php echo $result['circular_name']; ?></td>
                <td><?php echo $result['date']; ?></td>
                <td><?php echo $result['type']; ?></td>
                <td><?php echo $result['filename']; ?></td>
                <?php 
                    $target="./PDF/circulars/".$result['filename'];
                    echo "<td><html><a href='test.php?file=$target' target='_blank'>View</a></html></td>"; 
                ?>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>			
        </div>
    </div>
</div>

