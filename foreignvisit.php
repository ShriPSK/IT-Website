<?php require("./templates/header.php"); ?>
<div class="body-start"></div>
<div>
    <div class="card"style="max-width:95%;">
        <div class="my-3">
            <h1>Foreign Visit</h1>
            <div class="container"><?php require("./activitiesContent/foreignVisit.php"); ?></div>
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