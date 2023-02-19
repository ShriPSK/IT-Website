<?php require("templates/header.php"); ?>
<div class="body-start"></div>
<?php 
  $jsonData = file_get_contents("./JSON/faculty/teaching.json");
  $data = json_decode($jsonData, true);

  $jsonData = file_get_contents("./JSON/faculty/formerStaff.json");
  $formerStaffData = json_decode($jsonData, true);
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

.staff-modal {
    display: flex;
    justify-content: space-evenly;
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
    margin-right: 2rem;
}
</style>





<div class="container" id="non-teaching-staff-content">
    <h1>Technical Staff</h1>
    <div>
        <div class="row justify-content-center">
            <div class="col-3 p-3 faculties-item_2">
                <img src="./Images/faculty/kanan.webp" alt="" />
                <h3>Mr. V. Kannan</h3>
                <p>Professional Assistant - I</p>
                <p>
                    <span class="fs-6"><strong>Responsibilities</strong><br></span>
                    Conference Website Maintanence, System Maintanence, Server Maintanence
                </p>
                <ul>
                    <span class="fs-6"><strong>Qualification<br></strong></span>
                    <li>
                        Diploma in IT - Valivalam Desikar Polytechnic College Nagapattinam
                    </li>
                    <li>B.E (CSE) - Anna University, MIT Campus</li>
                </ul>
            </div>
            
            <div class="col-3 faculties-item_2">
                <img src="./Images/faculty/kalpana.webp" alt="" />
                <h3>Ms. S. Kalpana</h3>
                <p>Professional Assistant - I</p>
                <p>
                    <span class="fs-6"><strong>Responsibilities<br></strong></span>
                    Maintain hardware and software issues for all systems in Labs.
                    Troubleshoot the hardware and peripherals when needed.
                </p>
                <ul>
                    <span class="fs-6"><strong>Qualification<br></strong></span>
                    <li>B.E (C.S.E) - Rajalakshmi Engineering College, Thandalam.</li>
                </ul>
            </div>
            <div class="col-3 faculties-item_2">
                <img src="./Images/faculty/Babu.webp" alt="" />
                <h3>Mr. J. Babu</h3>
                <p>Professional Assistant - I</p>
                <p>
                    <span class="fs-6"><strong>Responsibilities<br></strong></span>
                    System Maintenance, Software Installation and upgradation, Server
                    Maintenance
                </p>
                <ul>
                    <span class="fs-6"><strong>Qualification<br></strong></span>
                    <li>BE(CSE) Pallavan college of Engineering, Kanchipuram</li>
                </ul>
            </div>
            
        </div>
        <div class="row my-3 justify-content-center">
        <div class="col-3 faculties-item_2">
                <img src="./Images/faculty/Saravanan.webp" alt="" />
                <h3>Mr. V. Saravanan</h3>
                <p>Professional Assistant - II</p>
                <p>
                    <span class="fs-6"><strong>Responsibilities<br></strong></span>
                    Server Maintanence, System Troubleshooting, Lab Maintanence
                </p>
                <ul>
                    <span class="fs-6"><strong>Qualification<br></strong></span>
                    <li>
                        Diploma in Electrical and Electronics Engineering - Sri Ram Polytechnic,
                        Vepampattu
                    </li>
                    <li>Bachelor of Computer Application - Madurai Kamarajar University</li>
                    <li>Master of Computer Application - Anna University CEG Campus</li>
                </ul>
            </div>
            <div class="col-3 faculties-item_2">
                <img src="./Images/faculty/Senbagam.webp" />
                <h3>Ms. G. Senbagam</h3>
                <p>Professional Assistant - II</p>
                <p>
                    <span class="fs-6"><strong>Responsibilities<br></strong></span>
                    System Troubleshooting, Lab Maintanence
                </p>
                <ul>
                    <span class="fs-6"><strong>Qualification<br></strong></span>
                    <li>B.Sc Computer Science - Indo American College</li>
                    <li>B.Ed Computer Science - Saratha College of Education</li>
                    <li>
                        Master of Computer Application - Quaid-E-Millath Government College for
                        Women
                    </li>
                </ul>
            </div>
        </div>
        <h1>Admistrative Staff</h1>
        <ul>
            <li>Mrs. M. Eswari - M.S.G.C</li>
            <li>Mr. A. Augustin - Professional Assistant - II</li>
            <li>Mr. R. Sandiappan - Peon</li>
            <li>Mrs. Umarani .A - Assistant</li>
            <li>Ms. Kalaiselvi .K - Clerical Assistant</li>
            <li>Mr. Nallathambi .K - Peon</li>
        </ul>
    </div>
</div>
<!-- <script src="./Js/faculties.js"></script> -->

<?php require("templates/footer.php"); ?>