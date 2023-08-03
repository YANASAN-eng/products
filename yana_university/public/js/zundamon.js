let zundamon = document.getElementById("zundamon");
let zundamon_btn = document.createElement("button");
let flag = 0;
zundamon_btn.innerText = "ずんだもんによる読み上げ";
zundamon_btn.style.color = "rgba(0,255,100,0.8)";
zundamon_btn.style.boxShadow = "10px 10px 10px rgba(100,100,100,0.5)";
zundamon.appendChild(zundamon_btn);
zundamon_btn.style.display = "inline-block"
const audio = new Audio("./voice/index.wav");
zundamon_btn.addEventListener("click",function(){
    if(flag == 0){
        flag = 1;
        zundamon_btn.style.boxShadow = "none";
        zundamon_btn.style.position = "relative";
        zundamon_btn.style.top = "10px";
        zundamon_btn.style.left = "10px";
        audio.play();
        setTimeout(function(){
        zundamon_btn.style.position = "relative";
        zundamon_btn.style.top = "0px";
        zundamon_btn.style.left = "0px";
        zundamon_btn.style.boxShadow = "10px 10px 10px rgba(100,100,100,0.5)";
        },100)
    }else{
        console.log(flag);
        flag = 0;
        audio.pause();
        audio.currentTime = 0;
        zundamon_btn.style.boxShadow = "none";
        zundamon_btn.style.position = "relative";
        zundamon_btn.style.top = "10px";
        zundamon_btn.style.left = "10px";
        setTimeout(function(){
        zundamon_btn.style.position = "relative";
        zundamon_btn.style.top = "0px";
        zundamon_btn.style.left = "0px";
        zundamon_btn.style.boxShadow = "10px 10px 10px rgba(100,100,100,0.5)";
        },100)
    }

})