<?php require("templates/header.php"); ?>
<div class="body-start"></div>
<div class="card">
    <div class="pt-3">
        <div class="row align-items-center container" style="max-width:100%;">
            <div class="col">
                <div class="container" style="max-width:100%;">
                    <h1 class="mt-1">Inter institute events</h1>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active fs-5" onclick="changeTab(0)">
                                2020
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" onclick="changeTab(1)">
                                2021
                            </a>
                        </li>
                    </ul>
                    <embed id="pdf-embed-events" class="my-3 w-100 d-block mx-auto"
                        src="./PDF/events/interInstitute2020.pdf" height="600px" />
                </div>
            </div>
        </div>
    </div>
</div>


<script>
const changeTab = (tabNo) => {
    if (tabNo === 0) $("#pdf-embed-events").attr("src", "./PDF/events/interInstitute2020.pdf");
    else $("#pdf-embed-events").attr("src", "./PDF/events/interInstitute2021.pdf");
    $(".nav-link").toggleClass("active");
}
const years = {
    ugIt: [2018, 2019, 2020, 2021, 2022],
    ugAids: [2022],
    pg: [2020, 2021],
};
let deg = "ugIt";
const changeDegree = (degree) => {
    deg = degree;
    document.getElementById("year").innerHTML = "";
    let y = deg == "ugIt" ? years.ugIt : deg == "ugAids" ? years.ugAids : years.pg;
    if (degree === "ugIt") {
        $("#ug-it").addClass("active");
        $("#ug-aids").removeClass("active");
        $("#pg").removeClass("active");
        changeYear(2018);
    } else if (degree === "ugAids") {
        $("#ug-it").removeClass("active");
        $("#ug-aids").addClass("active");
        $("#pg").removeClass("active");
        changeYear(2022);
    } else {
        $("#ug-it").removeClass("active");
        $("#ug-aids").removeClass("active");
        $("#pg").addClass("active");
        changeYear(2020);
    }
    for (let i = 0; i < y.length; i++) {
        let opt = document.createElement("option");
        opt.value = y[i];
        opt.innerText = y[i];
        document.getElementById("year").add(opt);
    }
}
const changeYear = (year) => {
    year = parseInt(year);
    if (deg === "ugIt") {
        if (year === 2018) $("#pdf-embed").attr("src", "./PDF/students/it2018-2022.pdf");
        else if (year === 2019) $("#pdf-embed").attr("src", "./PDF/students/it2019-2023.pdf");
        else if (year === 2020) $("#pdf-embed").attr("src", "./PDF/students/it2020-2024.pdf");
        else if (year === 2021) $("#pdf-embed").attr("src", "./PDF/students/it2021-2025.pdf");
        else $("#pdf-embed").attr("src", "./PDF/students/it2022-2026.pdf");
    } else if (deg === "ugAids") {
        $("#pdf-embed").attr("src", "./PDF/students/aids2022-2026.pdf")
    } else {
        if (year === 2020) $("#pdf-embed").attr("src", "./PDF/students/mtechit2020-2022.pdf");
        if (year === 2021) $("#pdf-embed").attr("src", "./PDF/students/mtechit2021-2023.pdf");
    }
}
$(document).ready(() => {
    changeDegree('ugIt');
})
$("#year").change(() => {
    changeYear($("#year").val());
})
</script>
<style>
.active {
    background-color: var(--primary);
    color: white;
}

.nav-item a {
    cursor: pointer;
}

img {
    max-width: 400px;
}
</style>
<?php require("templates/footer.php"); ?>