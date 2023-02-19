<?php require("templates/header.php"); ?>
<div class="body-start"></div>
<div class="intro-v2 curriculum-bg">
    <div class="intro-v2-content">
        <h1>Students</h1>
        <p class="container">
            The 450+ students of the department are given equal emphasis on theoretical and experimental Information
            Technology with Anna
            University's curriculum.
        </p>
    </div>
</div>

<h2 class="mt-5 container">Students List</h2>
<div class="students-input container my-3">
    <input type="radio" name="degree" style="display: none" checked />
    <input type="radio" name="degree" style="display: none" />
    <input type="radio" name="degree" style="display: none" />
    <label id="ug-it" class="students-input-element" for="ug-it" onclick="changeDegree('ugIt')">
        Under Graduate (IT)
    </label>
    <label id="ug-aids" class="students-input-element active" for="ug-aids" onclick="changeDegree('ugAids')">
        Under Graduate (AI &amp; DS)
    </label>
    <label id="pg" class="students-input-element active" for="pg" onclick="changeDegree('pg')">
        Post Graduate
    </label>
    <h2 style="color: #ab3c35; padding-inline: 1em">Year :</h2>
    <select class="students-input-element" name="year" id="year"></select>
</div>
<div class="container">
    <embed id="pdf-embed" class="w-100 d-block mx-auto" src="./PDF/curriculum/UG-CBCS-2015.pdf" width="800px"
        height="500px" />
</div>
<div class="student-graph">        
    <img style="max-width:100%;" src="./Images/students/students-strength.webp" alt="">
    <img style="max-width:100%;" src="./Images/students/success-rate.webp" alt="">
    <div id="chartContainer" class="canvasChart" style="width: 100%;"></div>
    <script>

        var options = {
            animationEnabled: true,
            title: {
                text: "TNEA Ranking 2022-23"
            },
            data: [{
                type: "doughnut",
                innerRadius: "40%",
                showInLegend: true,
                legendText: "{label}",
                indexLabel: "{label}: #percent%",
                dataPoints: [
                    { label: "Between 0 to 1000", y: 45.56 },
                    { label: "Ranks between 1000 to 2000", y: 23.41 },
                    { label: "Ranks between 2000 to 5000", y: 10.12 },
                    { label: "Ranks between 5000 to 10000", y: 8.89 }
                ]
            }]
        };
        $("#chartContainer").CanvasJSChart(options);
    </script>
    <div id="chartContainer2" class="canvasChart" style="width: 100%;"></div>
    <script>
        var options = {
            animationEnabled: true,  	
            title:{
                text: "Admission Rate"
            },
            axisY: {
                suffix: "%"
            },
            toolTip: {
                shared: true,
                reversed: true
            },
            legend: {
                reversed: true,
                verticalAlign: "center",
                horizontalAlign: "right"
            },
            data: [
            {
                type: "stackedColumn100",
                name: "Tamil Nadu",
                showInLegend: true,
                yValueFormatString: "#,##0\"%\"",
                dataPoints: [
                { label: "2019 (120 students)", y: 86.66 },
                { label: "2018 (142 students)", y: 80.99 },
                { label: "2017 (128 students)", y: 88.28 },
                { label: "2016 (117 students)", y: 94.02 }
                ]
            },
            {
                type: "stackedColumn100",
                name: "Other State",
                showInLegend: true,
                yValueFormatString: "#,##0\"%\"",
                dataPoints: [
                { label: "2019 (120 students)", y: 1.66 },
                { label: "2018 (142 students)", y: 0.70 },
                { label: "2017 (128 students)", y: 0.78 },
                { label:"2016 (117 students)", y: 0.85 }
                ]
            },
            {
                type: "stackedColumn100",
                name: "NRI",
                showInLegend: true,
                yValueFormatString: "#,##0\"%\"",
                dataPoints: [
                { label: "2019 (120 students)", y: 1.66 },
                { label: "2018 (142 students)", y: 7.04 },
                { label: "2017 (128 students)", y: 0.78 },
                { label:"2016 (117 students)", y: 0 }
                ]
            },
            {
                type: "stackedColumn100",
                name: "FN",
                showInLegend: true,
                yValueFormatString: "#,##0\"%\"",
                dataPoints: [
                { label: "2019 (120 students)", y: 1.66 },
                { label: "2018 (142 students)", y: 1.40},
                { label: "2017 (128 students)", y: 3.12 },
                { label:"2016 (117 students)", y: 0 }
                ]
            },
            {
                type: "stackedColumn100",
                name: "CWIGC",
                showInLegend: true,
                yValueFormatString: "#,##0\"%\"",
                dataPoints: [
                { label: "2019 (120 students)", y: 2.5 },
                { label: "2018 (142 students)", y: 4.22 },
                { label: "2017 (128 students)", y: 3.12 },
                { label:"2016 (117 students)", y: 0 }
                ]
            },
            {
                type: "stackedColumn100",
                name: "Sponsored",
                showInLegend: true,
                yValueFormatString: "#,##0\"%\"",
                dataPoints: [
                { label: "2019 (120 students)", y: 5 },
                { label: "2018 (142 students)", y: 4.22 },
                { label: "2017 (128 students)", y: 2.34 },
                { label:"2016 (117 students)", y: 3.41 }
                ]
            },
            {
                type: "stackedColumn100",
                name: "Sports",
                showInLegend: true,
                yValueFormatString: "#,##0\"%\"",
                dataPoints: [
                { label: "2019 (120 students)", y: 0.83 },
                { label: "2018 (142 students)", y: 0.70 },
                { label: "2017 (128 students)", y: 0.78 },
                { label:"2016 (117 students)", y: 0 }
                ]
            },
            {
                type: "stackedColumn100",
                name: "PWD",
                showInLegend: true,
                yValueFormatString: "#,##0\"%\"",
                dataPoints: [
                { label: "2019 (120 students)", y: 0 },
                { label: "2018 (142 students)", y: 0.70 },
                { label: "2017 (128 students)", y: 0.78 },
                { label:"2016 (117 students)", y: 1.78 }
                ]
            }
            ]
        };

        $("#chartContainer2").CanvasJSChart(options);

    </script>
    <style>
        .student-graph .canvasChart  a{
        display:none;
        }
        .student-graph .canvasChart .canvasjs-chart-canvas{
                position:relative;
        }
        @media screen and (min-width: 922px) {
            .student-graph .canvasChart .canvasjs-chart-canvas{
                position:initial;
            }
        }
        

    </style>
    

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