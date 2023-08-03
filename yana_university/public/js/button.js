let btn = document.getElementsByClassName("btn");
let link = [];

link[0] = "http://localhost:8888/YanaUniversity/public/math";
link[1] = "http://localhost:8888/YanaUniversity/public/physics";
link[2] = "http://localhost:8888/YanaUniversity/public/programming";
link[3] = "http://localhost:8888/YanaUniversity/public/illust";
link[4] = "http://localhost:8888/YanaUniversity/public/bgm";

for(let i = 0;i < btn.length;i++){
    btn[i].addEventListener('click',function(e){
        e.preventDefault();
        btn[i].style.boxShadow = "none";
        btn[i].style.position = "relative";
        btn[i].style.top = "10px";
        btn[i].style.left = "10px";
        setTimeout(function(){
            btn[i].style.position = "relative";
            btn[i].style.top = "0px";
            btn[i].style.left = "0px";
            btn[i].style.boxShadow = "10px 10px 5px rgba(100,100,100,0.8) ";
        },500)
        setTimeout(function(){
            location.href = link[i];
        },1000)  
    })
}