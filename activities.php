<?php require("./templates/header.php"); ?>
<div class="body-start"></div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="my-3">
                    <h3>Best Paper Awards for Faculty Publications</h3>
                    <div class="container" style="max-width:100%"><?php require("./activitiesContent/bestPaperAwards.php"); ?></div>
                </div>                
            </div>
            <div class="col">
                <div class="my-3">
                    <h3>Faculty Achievements</h3>
                    <div class="container">
                        <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/FacultyAchivements.pdf"
                            width="100%" height="550px" />
                    </div>
                </div>
            </div>    
            
        </div>  
        <div class="my-3">
            <h3>Foreign Visit</h3>
            <div class="container"><?php require("./activitiesContent/foreignVisit.php"); ?></div>
        </div>
        <div class="my-3">
            <h3>Innovative Projects</h3>
            <div class="container"><?php require("./activitiesContent/innovative.php"); ?></div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="my-3 ">
                    <h3>Confrences Attended</h3>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active fs-5" id="ctab-2022" onclick="changeTabConf(0)">
                                2022
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" id="ctab-2021" onclick="changeTabConf(1)">
                                2021
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" id="ctab-2020" onclick="changeTabConf(2)">
                                2020
                            </a>
                        </li>
                    </ul>
                    <embed id="pdf-embed-events" class="my-3 w-100 d-block mx-auto"
                        src="./PDF/activities/Confrence21-22.pdf" height="650px" />
                </div>
               
            </div>
            <div class="col">
                 <div class="my-3">
                <h3>Journals Published</h3>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active fs-5" id="jtab-2022" onclick="changeTabJour(0)">
                                2022
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" id="jtab-2021" onclick="changeTabJour(1)">
                                2021
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" id="jtab-2020" onclick="changeTabJour(2)">
                                2020
                            </a>
                        </li>
                    </ul>
                    <embed id="jour-embed-events" class="my-3 w-100 d-block mx-auto"
                        src="./PDF/activities/Journals21-22.pdf" height="650px" />
                </div>
                
            </div>         
            
        </div>        
        <div class="my-3">
            <h3>Participation in Invited lectures</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto"
                    src="./PDF/activities/ParticipationInInvitedLectures.pdf" width="600px" height="500px" />
            </div>
        </div>
        <br>
        <h2>Faculty Development Program</h2>
        <div class="my-3">
            <h4>FDP Attended</h4>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active fs-5" id="fatab-2022" onclick="changeTabFDPA(0)">
                        2022
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" id="fatab-2021" onclick="changeTabFDPA(1)">
                        2021
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" id="fatab-2020" onclick="changeTabFDPA(2)">
                        2020
                    </a>
                </li>
            </ul>
            <embed id="FDPA-embed-events" class="my-3 w-100 d-block mx-auto"
                src="./PDF/activities/FDPAttended21-22.pdf" height="650px" />
        </div>  
        <div class="row">
            <div class="col-6">
                <div class="my-3">
                    <h3>FDP Organized 2021-2022</h3>
                    <div class="container" style="max-width:100%">
                        <div class="container" style="max-width:100%"><?php require("./activitiesContent/fdpOrg22.php"); ?></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="my-3">
                    <h3>FDP Organized 2020-21</h3>
                    <div class="container" style="max-width:100%">
                        <div class="container" style="max-width:100%"><?php require("./activitiesContent/fdpOrg20.php"); ?></div>
                    </div>
                </div>
            </div>
        </div>         
        <div class="my-3">
            <h3>FDP Organized 2019-20</h3>
            <div class="container">
                <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/activities/FDPOrg19-20.pdf" width="600px"
                    height="500px" />
            </div>
        </div>
               
    </div>
</div>
<style>
thead {
    background-color: var(--primary);
}
</style>

<script>
const changeTabConf = (tabNo) => {
    if (tabNo === 0){
        $("#pdf-embed-events").attr("src", "./PDF/activities/Confrence21-22.pdf");
        $("#ctab-2022").addClass("active");
        $("#ctab-2021").removeClass("active");
        $("#ctab-2020").removeClass("active");
    } 
    else if(tabNo===1){
        $("#pdf-embed-events").attr("src", "./PDF/activities/Confrence20-21.pdf");
        $("#ctab-2022").removeClass("active");
        $("#ctab-2021").addClass("active");
        $("#ctab-2020").removeClass("active");
    }else {
        $("#pdf-embed-events").attr("src", "./PDF/activities/Confrence19-20.pdf");
        $("#ctab-2022").removeClass("active");
        $("#ctab-2021").removeClass("active");
        $("#ctab-2020").addClass("active");
    };

}
const changeTabJour = (tabNo) => {
    if (tabNo === 0) {
        $("#jour-embed-events").attr("src", "./PDF/activities/Journals21-22.pdf");
        $("#jtab-2022").addClass("active");
        $("#jtab-2021").removeClass("active");
        $("#jtab-2020").removeClass("active");
    }
    else if(tabNo===1){
        $("#jour-embed-events").attr("src", "./PDF/activities/Journals20-21.pdf");
        $("#jtab-2022").removeClass("active");
        $("#jtab-2021").addClass("active");
        $("#jtab-2020").removeClass("active");
    }else {
        $("#jour-embed-events").attr("src", "./PDF/activities/Journals19-20.pdf");
        $("#jtab-2022").removeClass("active");
        $("#jtab-2021").removeClass("active");
        $("#jtab-2020").addClass("active");
    }
}
const changeTabFDPA = (tabNo) => {
    if (tabNo === 0){
        $("#FDPA-embed-events").attr("src", "./PDF/activities/FDPAttended21-22.pdf");
        $("#fatab-2022").addClass("active");
        $("#fatab-2021").removeClass("active");
        $("#fatab-2020").removeClass("active");
    }else if(tabNo===1){
        $("#FDPA-embed-events").attr("src", "./PDF/activities/FDPAttended20-21.pdf");
        $("#fatab-2022").removeClass("active");
        $("#fatab-2021").addClass("active");
        $("#fatab-2020").removeClass("active");
    }else {
        $("#FDPA-embed-events").attr("src", "./PDF/activities/FDPAttended19-20.pdf");
        $("#fatab-2022").removeClass("active");
        $("#fatab-2021").removeClass("active");
        $("#fatab-2020").addClass("active");
    }
    
}
</script>
<?php require("./templates/footer.php"); ?>