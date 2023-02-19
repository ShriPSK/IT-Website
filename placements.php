<?php require("templates/header.php"); ?>
<div class="body-start"></div>
<div class="intro-v2 curriculum-bg">
    <div class="intro-v2-content">
        <h1>Placements</h1>
        <p class="container">The Center for University - Industry Collaboration (CUIC) plays an integral role in guiding
            the
            students achieve
            their career goals. The centre facilitates the training activities with the help of industry experts, alumni
            and corporate trainers to prepare the students industry-ready.</p>
    </div>
</div>
<div class="my-5 container">
    <h1 class="mx-0">Companies visited</h1>
    <center><img src="./Images/placement/companies.png" class="img-fluid"></center>
</div>
<div class="placement-head">
    <div class="placement-chart">
        <h2 style="color: black;padding-inline: 1em;text-align: center;">
            Previous Year's Placements</h2>
        <canvas id="myChart2" class="placement-bar"></canvas>
        <br>
        <p style="text-align:center; color: #ab3c35; font-size: 1.2rem">Academic Year (Number of Students Registered)
        </p>
    </div>
    <div class="placement-pdf">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active fs-5" id="tab-2018" onclick="onTabChange(2018)">2019</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" id="tab-2019" onclick="onTabChange(2019)">2020</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" id="tab-2020" onclick="onTabChange(2020)">2021</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" id="tab-2021" onclick="onTabChange(2021)">2022</a>
            </li>
        </ul>
        <div id="placement-data" class="container mt-2">
            <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/placement/p2018.pdf" height="500px" />
        </div>
    </div>
    <img style="max-width:100%;" src="./Images/placement/p1.webp" alt="">
    <img style="max-width:100%;" src="./Images/placement/p2.webp" alt="">
    <img style="max-width:100%;" src="./Images/placement/p3.webp" alt="">
    <img style="max-width:100%;" src="./Images/placement/p4.webp" alt="">
    <img style="max-width:100%;" src="./Images/placement/p5.webp" alt="">
    <img style="max-width:100%;" src="./Images/placement/p6.webp" alt="">
</div>
<div class="mt-5">
    <h2 style="color: black;padding-inline: 1em;text-align: center;">
        Higher Studies</h2>
</div>
<!-- <div class="students-input">
    <input type="radio" name="higher" style="display:none;" id="y1819" checked>
    <input type="radio" name="higher" style="display:none;" id="y1718">
    <input type="radio" name="higher" style="display:none;" id="y1617">
    <input type="radio" name="higher" style="display:none;" id="y1516">
    <input type="radio" name="higher" style="display:none;" id="y1415">            
    <label class="students-input-element" for="y1819">2018 - 2019</label>
    <label class="students-input-element" for="y1718">2017 - 2018</label>
    <label class="students-input-element" for="y1617">2016 - 2017</label>
    <label class="students-input-element" for="y1516">2015 - 2016</label>
    <label class="students-input-element" for="y1415">2014 - 2015</label>
  </div> -->

<!-- <div class="highers-container" id="higherstats-display"></div> -->
<div class="container my-3">
    <!-- <embed id="pdf-embed-hs" class="w-100 d-block mx-auto" src="./PDF/placement/HigherStudies.pdf" width="800px"
        height="500px" /> -->
    <table>
        <thead>
            <tr>
                <th>Year</th>
                <th>Name of student</th>
                <th>Enrollment no.</th>
                <th>Program graduated from</th>
                <th>Name of institution joined</th>
                <th>Year of admission</th>
                <th>Name of programme admitted to</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="2">LYGm2 (2015-16)</td>
                <td>Rakshana.G</td>
                <td>2015506034</td>
                <td>Information Technology</td>
                <td>Tacoma University</td>
                <td>2019</td>
                <td>M.S - Computer Science &amp; Systems</td>
            </tr>
            <tr>
                <td>N.Nivethan</td>
                <td>2015506082</td>
                <td>Information Technology</td>
                <td>Arizona State University</td>
                <td>2019</td>
                <td>M.S - Computer Science</td>
            </tr>
            <tr>
                <td>LYGm3 (2016-17)</td>
                <td>Jyothi Prasanth D R</td>
                <td>2016506028</td>
                <td>Information Technology</td>
                <td>Iowa State University</td>
                <td>2021</td>
                <td>M.S - Computer Science</td>
            </tr>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./Js/placements-bar.js"></script>
<script>
const onTabChange = (tabNo) => {
    if (tabNo === 2018) {
        $("#pdf-embed").attr("src", "./PDF/placement/p2018.pdf");
        $("#tab-2018").addClass("active");
        $("#tab-2019").removeClass("active");
        $("#tab-2020").removeClass("active");
        $("#tab-2021").removeClass("active");
    } else if (tabNo === 2019) {
        $("#pdf-embed").attr("src", "./PDF/placement/p2019.pdf");
        $("#tab-2018").removeClass("active");
        $("#tab-2019").addClass("active");
        $("#tab-2020").removeClass("active");
        $("#tab-2021").removeClass("active");
    } else if (tabNo === 2020) {
        $("#pdf-embed").attr("src", "./PDF/placement/p2020.pdf");
        $("#tab-2018").removeClass("active");
        $("#tab-2019").removeClass("active");
        $("#tab-2020").addClass("active");
        $("#tab-2021").removeClass("active");
    }else{
        $("#pdf-embed").attr("src", "./PDF/placement/p2021.pdf");
        $("#tab-2018").removeClass("active");
        $("#tab-2019").removeClass("active");
        $("#tab-2020").removeClass("active");
        $("#tab-2021").addClass("active");
    }
}
</script>
<?php require("templates/footer.php"); ?>