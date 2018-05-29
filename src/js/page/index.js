require('../../style/css/screen.css')

let form = document.getElementById('sendform')
document.getElementById('send').onclick = (e) =>{
    e.preventDefault();
    let name = form.name.value
    let mail = form.mail.value
    let phone = form.phone.value
    let country = form.countryId.value
    let Line = form.line.value
    let LineID = form.id.value
    if (name == '' || mail == '' || phone == '' || country == '' ) {
        alert('請填寫完整正確');
        return
    }
    if (!form.reade.checked) {
        alert('您尚未同意條款');
        return
    }
    const payload = { name, mail, phone, country, Line, LineID}
    let body = `name=${name}&mail=${mail}&phone=${phone}&country=${country}&Line=${Line}&LineID=${LineID}`
    fetch('../php/creat.php',{
        method: 'POST',
        credentials: 'include',
        headers: { 
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        dataType : 'json',
        body: body
    }).then((response) => {
        if (!response.ok) throw new Error(response.statusText)
        return response.json()
    }).then((item) => {
        if (item.msg == 'ok') {
            form.reset()
            alert('感謝您的填寫')
        }else{
            alert('您手機已經填寫申請過了')
        }
    }).catch((error) => {
        alert(error)
        console.log(error)
    })
}

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    // modalImg.src = this.src;
    // captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}