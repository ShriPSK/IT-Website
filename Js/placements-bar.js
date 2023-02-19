var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
    labels: ['2020-2021 (115)', '2019-2020 (105)', '2018-2019 (111)', 
            '2017-2018 (118)', '2016-2017 (115)', '2015-2016 (116)', 
            '2014-2015 (108)', '2013-2014 (115)', '2012-2013 (111)', 
            '2011-2012 (122)', '2010-2011 (115)', '2009-2010 (74)'],
    datasets: [{
        label: '# placed',
        data: [79, 75, 85, 77, 87, 87, 95, 95, 88, 103, 88, 65],
        backgroundColor: [
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)',
            'rgba(171,60,53, 0.7)'
        ],
        borderColor: [
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)',
            'rgba(171,60,53, 1)'
        ],
        borderWidth: 1
    }]
},
options: {
    scales: {
        y: {
            beginAtZero: true
        }
    }
}
});

const yrArr=[];
var yr='1819';


var table = "<th>S.No</th><th>Name</th><th>Program Name</th><th>University</th>";
var tableclose = "</tbody></table>";

function populateNamelist(d){
    var t= table;
    for(let i=0;i<d.length;i++){
        var trow = "<td>"+d[i].sno+"</td><td>"+d[i].name+"</td><td>"+d[i].Pname+"</td><td>"+d[i].univ+"</td>";           
        t = t + trow;
    }
    $('#higherstats-display').append(t); 
    console.log(d);
}



$("input[name='higher']").change(()=>{
    if($('#y1819').is(":checked"))
        yr='1819';
    else if($('#y1718').is(":checked"))
        yr='1718';
    else if($('#y1617').is(":checked"))
        yr='1617';
    else if($('#y1516').is(":checked"))
        yr='1516';
    else if($('#y1415').is(":checked"))
        yr='1415';
    
    $.ajax({
        type:'POST',
        url:'./PHP/getPlacements.php',
        data:{
        Year:yr
        },
        complete:(r)=>{
        try{
            let d=JSON.parse(r.responseText);    
            $("#higherstats-display").text("");        
            populateNamelist(d);
        }catch(e){
            console.log("Name List Not Found");
        }
        }
    });
});