const form = document.querySelector("form");
const statustext = form.querySelector(".template .fill-out-button span");

form.onsubmit = (e)=> {
    e.preventDefault();
    statustext.style.color = "black";
    statustext.style.display = "flex";
    statustext.style.justifyContent = "center";

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "handlers/contact_handler.php", true);
    xhr.onload = ()=>{
        if (xhr.readyState == 4 && xhr.status == 200) {
            let res = xhr.response;
            if (res.indexOf("Bericht is verstuurd!") == -1) {
                statustext.style.color = "red";
            } else {
                form.reset();
                setTimeout(()=>{
                    statustext.style.display = "none";
                }, 4000)
            }
            statustext.innerText = res;
        }
    }
    let data = new FormData(form);
    xhr.send(data);
}