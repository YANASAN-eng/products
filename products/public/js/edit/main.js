let back_btn = document.getElementById('backBtn');
let id = document.getElementById('id').value;
console.log(id);
back_btn.addEventListener('click',function(){
    location.href = "detaile?id=" + id;
})