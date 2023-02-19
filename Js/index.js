const d=["1.webp","2.webp","3.webp","4.webp","5.webp","6.webp"];
var currentImg=0;
var initial =100;
var sign=1;
function moveImgs(){
    for(let i=1;i<=d.length;i++)
    document.getElementById("img"+(i-1)).style["transform"]=`translateX(-${initial}%)`;
    if(initial>400|| initial<100)
        sign=-sign
    initial+=100*sign;
}
function init(){
    for(let i=0;i<d.length;i++){
        let img=document.createElement("img");
        img.src="./Images/Home/"+d[i];
        img.setAttribute("loading","lazy");
        img.id="img"+i;
        document.getElementById("slide-show").appendChild(img);
    }
    setInterval(()=>{
        moveImgs();
    },3000);
}
init();