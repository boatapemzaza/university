//CONTACT
const getContact = document.getElementById('CONTACT');

const getdata = () => { axios.get('http://localhost/home/update.json').then(response => {
   getContact.innerHTML = response.data.CONTACT;
});
};

//CONTACT


function blackScreen(check){


    let img = document.createElement("div");
    img.style.width = "20%";
    img.style.height = "20%";
    img.style.left = "40%";
    img.style.top = "40%";
    img.style.position = "fixed";
    img.style.borderRadius = "10px";
    img.className = "btn btn-dark";
    body.appendChild(img);

    let text = document.createElement("span");
    text.style.position = "fixed";
    text.style.color = "white";
    text.style.top = "46%";
    text.style.right = "47%";
    text.innerHTML = (check==='1')?"ส่งเรื่องสำเร็จ":"ส่งไม่สำเร็จ";
    body.appendChild(text);

    let close = document.createElement("button");
    close.style.position = "fixed";
    close.className = "btn btn-secondary";
    close.style.top = "53%";
    close.style.right = "47%";
    close.innerHTML ="SUBMIT";

    close.onclick = () => {
        try {
            text.parentNode.removeChild(text);
            img.parentNode.removeChild(img);
            localStorage.lungtu = 0;
            close.parentNode.removeChild(close);
        } catch(err) {
            
        }
    }
    body.appendChild(close);
}

window.addEventListener('load', (event) => {
    getdata();
    const getCheck = document.getElementById('isCheck');
    console.log(getCheck.value);
    (getCheck.value!=='3')?blackScreen(getCheck.value):null;
});