window.onload=()=>{
  
}
function populateFaculties(d){
  document.getElementById("teaching-display").innerHTML="";
  for(let i=0;i<d.length;i++){
    let faculty=document.createElement("div");
    faculty.classList="faculties-item";
    let name=document.createElement("p");
    name.innerHTML=d[i].name;
    let img=document.createElement("img");
    img.src=d[i].image;
    img.setAttribute("loading","lazy");
    let designation=document.createElement("i");
    designation.innerHTML=d[i].designation;
    let phone=document.createElement("a");
    phone.href="tel:"+d[i].phoneNumber;
    
    phone.innerHTML = '<i class="bi bi-telephone"></i> ' + d[i].phoneNumber;
    let email=document.createElement("p");
    email.innerHTML = '<i class="bi bi-envelope"></i> ' + d[i].emailID;
    faculty.appendChild(img);
    faculty.appendChild(name);
    faculty.appendChild(designation);
    faculty.appendChild(email);
    faculty.appendChild(phone);
    faculty.onclick=()=>{
      window.location="./faculty.php?id="+d[i].id;
    }
    document.getElementById("teaching-display").appendChild(faculty);
  }
}
$(
	$.ajax({
		type: "POST",
		url: "../PHP/getFaculties.php",
		data: {
			data:true
		},
		complete: (r) => {
			try {
				let d = JSON.parse(r.responseText);
				populateFaculties(d);
			} catch (e) {
				console.log("Name List Not Found");
			}
		},
	})
);