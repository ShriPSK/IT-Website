<?php require("templates/header.php"); ?>

<?php 
  $jsonData = file_get_contents("./JSON/faculty/teaching.json");
  $data = json_decode($jsonData, true);

  $jsonData = file_get_contents("./JSON/faculty/formerStaff.json");
  $formerStaffData = json_decode($jsonData, true);
  ?>
<div class="mx-3">
    <div class="container my-3 mt-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active fs-5"style="font-size:1.5em;" onclick="changeTab(0)" aria-current="page" href="#" id="ts-toggle">
                    Teaching Staff
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5"style="font-size:1.5em;" href="#" onclick="changeTab(2)" id="ff-toggle">
                    Former Staff
                </a>
            </li>
        </ul>
    </div>
    <div id="teaching-staff-content" class="container">
        <div class="teaching-staff-wrapper row justify-content-center" id="teaching-display">
            <div class="col-3"></div>
            <?php
        echo "<div class='teaching-staff-item text-center col-4 p-3 m-1' onclick='displayStaff(0)'>
          <img src="."./Images/teachingStaff/".$data[0]['img']." alt='' class='fac-img img-fluid' />
          <div>".$data[0]['name']."</div>
          <i>".$data[0]['designation']."</i>
          <div><a href='tel:'>".$data[0]['mobile']."</a></div>
          <div>".$data[0]['email']."</div>
        </div>
        <div class='col-3'></div>
        ";
        for ($i=1; $i <= 2; $i++) {
            echo "<div class='teaching-staff-item text-center col-4 p-3 m-4' onclick='displayStaff(".$i.")'>
              <img src="."./Images/teachingStaff/".$data[$i]['img']." alt='' class='fac-img img-fluid' />
              <div>".$data[$i]['name']."</div>
              <i>".$data[$i]['designation']."</i>
              <div><a href='tel:'>".$data[$i]['mobile']."</a></div>
              <div>".$data[$i]['email']."</div>
            </div>";
          }
          for ($i=3; $i <= 4; $i++) {
            echo "<div class='teaching-staff-item text-center col-4 p-3 m-4' onclick='displayStaff(".$i.")'>
              <img src="."./Images/teachingStaff/".$data[$i]['img']." alt='' class='fac-img img-fluid' />
              <div>".$data[$i]['name']."</div>
              <i>".$data[$i]['designation']."</i>
              <div><a href='tel:'>".$data[$i]['mobile']."</a></div>
              <div>".$data[$i]['email']."</div>
            </div>";
          }
          for ($i=5; $i < count($data); $i++) {
            echo "<div class='teaching-staff-item teaching-staff-item1 text-center col-3 p-3 m-4' onclick='displayStaff(".$i.")'>
              <img src="."./Images/teachingStaff/".$data[$i]['img']." alt='' class='fac-img img-fluid' />
              <div>".$data[$i]['name']."</div>
              <i>".$data[$i]['designation']."</i>
              <div><a href='tel:'>".$data[$i]['mobile']."</a></div>
              <div>".$data[$i]['email']."</div>
            </div>";
          }
    ?>
        </div>
    </div>
</div>


<?php
  for ($i=0; $i < count($data); $i++) {
    echo "
    <div id='modal-".$i."' class='modal'>
      <div class='modal-content'>
        <span class='close'>&times;</span>
        <div class='staff-modal'>
          <div class='left'>
            <img src='./Images/teachingStaff/".$data[$i]['img']."' alt='Staff image' class='fac-detail-img img-fluid' />
            <div style='display: flex;gap: 1em;justify-content: center;'>
              <a target='_blank' href='".$data[$i]['externalLink']."'><button class='btn btn-primary mx-auto d-block'>Profile</button></a>
            </div>
          </div>
          <div class='right'>
            <table class='staffTable'>
              <tbody>
                <tr>
                  <td>Name</td>
                  <td>".$data[$i]['name']."</td>                
                </tr>
                <tr>
                  <td>Designation</td>
                  <td>".$data[$i]['designation']."</td>
                </tr>
                <tr>
                  <td>Area Of Expertise</td>
                  <td>".$data[$i]['areaOfExpertise']."</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>".$data[$i]['email']."</td>
                </tr>
                <tr>
                  <td>Intercom Number</td>
                  <td>".$data[$i]['mobile']."</td>
                </tr>
                <tr>
                  <td>Orcid Id</td>
                  <td><a href='https://orcid.org/".$data[$i]['orcidId']."'>".$data[$i]['orcidId']."</a></td>
                </tr>
                <tr>
                  <td>Scopus Id</td>
                  <td><a href='https://www.scopus.com/authid/detail.uri?authorId=".$data[$i]['ScopusId']."'>".$data[$i]['ScopusId']."</a></td>
                </tr>
                <tr>
                  <td>Researcher Id</td>
                  <td><a href='https://www.webofscience.com/wos/author/rid/".$data[$i]['ResearcherId']."'>".$data[$i]['ResearcherId']."</a></td>
                </tr>
                <tr>
                  <td>Google Scholar Id</td>
                  <td><a href='http://scholar.google.co.in/citations?user=".$data[$i]['GoogleScholarID']."'>".$data[$i]['GoogleScholarID']."</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    ";
  }
?>

<style>
button {
    background-color: var(--forestGreen);
    border: 0;
    border-radius: 10px;
    color: white;
    padding: 0.75rem 1rem;
    font-size: 1.2rem;
    margin-top: 2rem;
    cursor: pointer;
}

table {
    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 0px;
    text-align: justify;
    padding: 8px;
}

td:nth-child(odd) {
    padding-right: 100px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}



.left {
    display: flex;
    flex-direction: column;
}


/* The Modal (background) */
.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 9999999;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.teaching-staff-item {
    /* background: rgb(255, 255, 255); */
    /* background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(255, 240, 240, 1) 100%); */
    cursor: pointer;
    border-radius: 10px;
    background-color: #BCCEF8;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}

.fac-img {
    height: 200px;
}

.fac-detail-img {
    max-width: 350px;
}
</style>

<script>
let activeModal = -1;
const displayStaff = (id) => {
    const modal = document.getElementById("modal-" + id);
    modal.style.display = "block";
    activeModal = parseInt(id);
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    let target = event.target.className;
    if (target === "close" || target.indexOf('modal') !== -1) {
        document.getElementById("modal-" + activeModal).style.display = "none";
        activeModal = -1;
    }
}
const changeTab = (tabNo) => {
    const teachingStaff = $("#teaching-staff-content"),
        nonTeachingStaff = $("#non-teaching-staff-content"),
        formerFaculty = $("#former-staff-content"),
        formerHod = $("#former-hod-content");
    tsToggle = $("#ts-toggle"),
        ntsToggle = $("#nts-toggle"),
        ffToggle = $("#ff-toggle"),
        fhodToggle = $("#fhod-toggle")
    let contents = [teachingStaff, nonTeachingStaff, formerFaculty],
        toggles = [tsToggle, ntsToggle, ffToggle, fhodToggle];
    contents.forEach(content => content.hide());
    toggles.forEach(toggle => toggle.removeClass("active"));
    if (tabNo === 0) {
        teachingStaff.show();
        tsToggle.addClass("active");
    } else if (tabNo === 1) {
        //nonTeachingStaff.show();
        //ntsToggle.addClass("active");
    } else if (tabNo === 2) {
        formerFaculty.show();
        ffToggle.addClass("active");
    } else if (tabNo === 3) {
        formerHod.show();
        fhodToggle.addClass("active");
    }
}
</script>
<div id="former-staff-content" class="container" style="display: none">
    <div class="teaching-staff-wrapper row justify-content-center" id="teaching-display">
        <?php        
          for ($i=0; $i < count($formerStaffData); $i++) {
            echo "<div onclick='window.location.href = `".$formerStaffData[$i]['link']."`;' class='teaching-staff-item text-center col-3 p-3 m-4'>
              <img src="."./Images/formerStaff/".$formerStaffData[$i]['img']." alt='' class='fac-img img-fluid' />
              <div>".$formerStaffData[$i]['name']."</div>
              <i>".$formerStaffData[$i]['designation']."</i>
              <div><a href='tel:'>".$formerStaffData[$i]['mobile']."</a></div>
              <div>".$formerStaffData[$i]['email']."</div>
            </div>";
          }
    ?>
    </div>
</div>

<div id="former-hod-content" class="container" style="display: none">
    <div class="teaching-staff-wrapper row justify-content-center" id="teaching-display">
        <a href="https://annauniv.irins.org/profile/269368" class='teaching-staff-item text-center col-3 p-3 m-4' style="color:black">
            <img src='./Images/formerStaff/hod.webp' alt='' class='fac-img img-fluid' />
            <div>Dr.B.Vinayagasundaram</div>
            <i>Former HOD | Assosciate Professor</i>
            <div>bvsundaram@annauniv.edu</div>
        </a>
        <a href="https://annauniv.irins.org/profile/117758" class='teaching-staff-item text-center col-3 p-3 m-4' style="color:black">
            <img src='./Images/formerStaff/hod1.webp' alt='' class='fac-img img-fluid' />
            <div>Dr S Thamarai Selvi</div>
            <i>Former HOD | Professor</i>
        </a>
    </div>
</div>
<!-- <script src="./Js/faculties.js"></script> -->

<?php require("templates/footer.php"); ?>