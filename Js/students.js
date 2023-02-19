const currentYr = 2019;
const years = {
  ug: [2018, 2019, 2020, 2021, 2022],
  pg: [2020, 2021],
};
var year = currentYr;
var deg = "UG";
function createStudent(sno, regNo, name) {
  let item = document.createElement("div");
  item.className = " students-item";
  let s = document.createElement("span");
  s.innerText = sno;
  let r = document.createElement("i");
  r.innerText = regNo;
  let n = document.createElement("p");
  n.innerText = name;
  item.appendChild(s);
  item.appendChild(r);
  item.appendChild(n);
  return item;
}
function changeYears() {
  document.getElementById("year").innerHTML = "";
  let y = deg == "UG" ? years.ug : years.pg;
  for (let i = 0; i < y.length; i++) {
    let opt = document.createElement("option");
    opt.value = y[i];
    opt.innerText = y[i];
    document.getElementById("year").add(opt);
  }
}
function populateNamelist(students) {
  document.getElementById("students-display").innerHTML = "";
  document
    .getElementById("students-display")
    .appendChild(createStudent("S.No", "Register Number", "Student Name"));
  for (let i = 0; i < students.length; i++) {
    let student = students[i];
    document
      .getElementById("students-display")
      .appendChild(createStudent(student["S.no"], student.regNo, student.name));
  }
}
$(
  $.ajax({
    type: "POST",
    url: "../PHP/getStudents.php",
    data: {
      Degree: deg,
      Year: year,
    },
    complete: (r) => {
      try {
        let d = JSON.parse(r.responseText);
        populateNamelist(d["data"]);
        changeYears();
      } catch (e) {
        console.log("Name List Not Found");
      }
    },
  })
);
$("input[name='degree']").change(() => {
  year = currentYr;
  if ($("#ug").is(":checked")) deg = "UG";
  else deg = "PG";
  changeYears();
  $.ajax({
    type: "POST",
    url: "../PHP/getStudents.php",
    data: {
      Degree: deg,
      Year: year,
    },
    complete: (r) => {
      try {
        let d = JSON.parse(r.responseText);
        populateNamelist(d["data"]);
      } catch (e) {
        console.log("Name List Not Found");
      }
    },
  });
});
$("select[name='year']").change(() => {
  year = document.getElementsByName("year")[0].value;
  $.ajax({
    type: "POST",
    url: "../PHP/getStudents.php",
    data: {
      Degree: deg,
      Year: year,
    },
    complete: (r) => {
      try {
        let d = JSON.parse(r.responseText);
        populateNamelist(d["data"]);
      } catch (e) {
        console.log("Name List Not Found");
      }
    },
  });
});
