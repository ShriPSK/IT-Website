function rotateDivClick() {
	let c = document.getElementsByClassName("faculty-item");
	for (let i = 0; i < c.length; i++)
		c[i].onclick = () => {
			rotateDiv(i, c[i].className);
		};
}
function getZ(n = 1) {
	switch (n) {
		case 9:
			return 1.35;
		case 10:
			return 1.35;
		case 11:
			return 1.37;
		case 12:
			return 1.4;
		case 13:
			return 1.42;
		case 14:
			return 1.45;
	}
	return 1.2;
}
function rotateDiv(i = 0, name = "faculty-item") {
	let c = document.getElementsByClassName(name);
	let r = document.body.clientWidth / 180;
	r = r > 6 ? 6 : r;
	let s = 360 / c.length - 1;
	console.log(s);
	let q = s * (c.length / 4) + c.length / 2;
	if (i == c.length) i = 0;

	for (let j = 0; j < c.length; j++) {
		let x = r * Math.cos(0.0174533 * (j == c.length - 1 ? q + 7 : q)) * 3.3;
		let z = r * Math.sin(q * 0.0174533) * getZ(c.length); //1.2;
		c[i].style["transform"] = `translateX(${x}em) translateZ(${z}em) `;
		q += s;
		c[i].style["z-index"] = c.length - j;
		i++;
		if (i == c.length) i = 0;
	}
}
var columns = [
	"qualification",
	"qualification",
	"qualification",
	"qualification",
	"qualification",
	"qualification",
	"qualification",
	"qualification",
	"qualification",
];
function populateContent(d) {
	document.getElementById("displayContent").innerHTML = "";
	for (let i = 0; i < d.length; i++) {
		let l = document.createElement("li");
		l.innerText = d[i];
		document.getElementById("displayContent").appendChild(l);
	}
}
function generateList() {
	document.getElementById("list").innerHTML = "";
	for (let i = 0; i < columns.length; i++) {
		let inp = document.createElement("input");
		inp.setAttribute("type", "radio");
		inp.id = columns[i];
		inp.name = "list";
		inp.onchange = () => {
			document.getElementById("display-title").innerHTML = columns[
				i
			].replaceAll("_", " ");
			document.getElementById("displayContent").style["visibility"] = "visible";
			document
				.getElementById("displayContent")
				.scrollIntoView({ behavior: "smooth", block: "end", inline: "end" });
			$(
				$.ajax({
					type: "POST",
					url: "../PHP/getFacultyColDetails.php",
					data: {
						tableN: columns[i],
						fid: ID,
					},
					complete: (r) => {
						try {
							let d = JSON.parse(r.responseText);
							populateContent(d.data);
						} catch (e) {
							populateContent([]);
						}
					},
				})
			);
		};
		let l = document.createElement("label");
		l.setAttribute("for", columns[i]);
		l.classList = "faculty-item";
		l.innerText = columns[i].replaceAll("_", " ");
		document.getElementById("list").appendChild(inp);
		document.getElementById("list").appendChild(l);
	}
	if (document.body.clientWidth > 750) {
		rotateDivClick();
		rotateDiv();
	}
}
function initData(d) {
	document.getElementById("img").src=d.image;
	document.getElementById("name").innerHTML = d.name;
	document.getElementById("designation").innerHTML = d.designation;
	document.getElementById("email").innerHTML = d.emailID;
	document.getElementById("area").innerHTML = d.AOS;
	document.getElementById("phone").href = "tel:"+d.phoneNumber;
	document.getElementById("phone").innerHTML = d.phoneNumber;
	document.getElementById("personalSite").href = d.personalSiteLink;
	if(d.personalSiteLink!="#")
		document.getElementById("personalSite").innerHTML = d.personalSiteLink;
	document.getElementById("acoeSite").href = d.acoeSiteLink;
	if(d.details!="")
		columns = d.details.split("#");
	else 
		columns=[];
	generateList();
}
$(
	$.ajax({
		type: "POST",
		url: "./PHP/getFaculty.php",
		data: {
			fid: ID,
		},
		complete: (r) => {
			try {
				let d = JSON.parse(r.responseText);
				initData(d);
			} catch (e) {
				console.log("Faculty Not Found");
			}
		},
	})
);
window.onload = () => {
	if (document.body.clientWidth > 750) {
		rotateDivClick();
		rotateDiv();
	}
};
