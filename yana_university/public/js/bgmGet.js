let bgmName = document.getElementsByClassName("bgmName");
let bgmUrl = document.getElementsByClassName('bgmUrl');
let contents = document.getElementById('contents');
let content = [];
for(let i = 0;i < bgmUrl.length;i++){
    content.push(document.createElement("div"));
}
let id = [];
let iframe = [];
console.log(bgmUrl.length);
for(let i = 0;i < bgmUrl.length;i++){
    id.push(bgmUrl[i].innerText.split("v="));
    iframe.push(`<iframe width="100%" height="395" src="https://www.youtube.com/embed/${id[i][1]}" title="${bgmName[i].innerText}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`);
}
for(let i = 0;i < bgmUrl.length;i++){
    content[i].innerHTML = iframe[i];
    contents.appendChild(content[i]);
}
