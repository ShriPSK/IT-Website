const years={
    ug:['R-2019','R-2018','CBCS-2015','R-2012'],
    pgt:['R-2013','R-2009'],
    pgf:['CBCS-2015','R-2013','R-2009'],
    research1:['R-2015','R-2010'],
    research2:['R-2015','R-2010']
  }
  var year=years.ug[0];
  var deg='UG';
  function changeYears(){
    document.getElementById("year").innerHTML='';
    let y=(deg=="UG")?years.ug:(deg=="PGT")?years.pgt:(deg=="PGF")?years.pgf:(deg=="MS")?years.research1:years.research2;
    for(let i=0;i<y.length;i++){
      let opt=document.createElement('option');
      opt.value=y[i];
      opt.innerText=y[i];
      document.getElementById("year").add(opt);
    }
  }
  $(
    $.ajax({
      type:'POST',
      url:'./PHP/getCurriculum.php',
      data:{
        Degree:deg,
        Year:year
      },
      complete:(r)=>{
        try{
          document.getElementById("curriculum-display").src=r.responseText;
          changeYears();
        }catch(e){
          
        }
      }
    })
  );
  $("input[name='degree']").change(()=>{
    if($('#ug').is(":checked")){
      deg='UG';
      year=years.ug[0];
    }else if($('#pgt').is(":checked")){
     deg="PGT";
     year=years.pgt[0];
    }else if($('#pgf').is(":checked")){
     deg="PGF";
     year=years.pgf[0];
    }else if($('#research1').is(":checked")){
      deg="MS"
      year=years.research1[0];
    }else{
      deg="PHD";
      year=years.research2[0];
    };
    changeYears();
    $.ajax({
      type:'POST',
      url:'./PHP/getCurriculum.php',
      data:{
        Degree:deg,
        Year:year
      },
      complete:(r)=>{
        try{
          document.getElementById("curriculum-display").src=r.responseText;
        }catch(e){
          
        }
      }
    });
  });
  $("select[name='year']").change(()=>{
    year=document.getElementsByName('year')[0].value;
    $.ajax({
      type:'POST',
      url:'./PHP/getCurriculum.php',
      data:{
        Degree:deg,
        Year:year
      },
      complete:(r)=>{
        try{
          document.getElementById("curriculum-display").src=r.responseText;
        }catch(e){
          
        }
      }
    });
  });
  