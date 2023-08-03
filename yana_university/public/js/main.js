let hamburger = document.getElementById("hamburger");
let new_menu = document.getElementById('new_menu');
let ul = document.createElement("ul");
let list = [];
let a = [];
for(let i = 0;i < 3;i++){
    a.push(document.createElement('a'));
}
for(let i = 0;i < 3;i++){
    list.push(document.createElement("li"));
}
a[0].innerText = "サイト紹介"; 
a[0].href = "#";
a[1].innerText = "自己紹介";
a[1].href = "#";
a[2].innerText = "使いかた";
a[2].href = "#";
for(let i = 0;i < 3;i++){
    list[i].appendChild(a[i]);
    ul.appendChild(list[i]);
    ul.style.listStyle = "none";
}

hamburger.addEventListener("mouseover",function(){
    menus();
});
function menus(){
    new_menu.appendChild(ul);
    new_menu.style.display = "inline-block";
    new_menu.style.color = "white";
    hamburger.style.display = "none";
    new_menu.style.position = "relative";
    new_menu.style.top = "-43px";
    new_menu.style.left = "-10px";
    
};
new_menu.addEventListener('mouseleave',function(){
    hamburger_display();
})
function hamburger_display(){
    setTimeout(() =>{
        hamburger.style.display = "inline-block";
        new_menu.removeChild(ul);
    },100); 
}