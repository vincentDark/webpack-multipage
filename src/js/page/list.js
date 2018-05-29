require('../../style/css/list.css')

var pw = prompt("請輸入密碼");
if (pw == 'FX516888@') {
    getdata()
} else {
    alert('密碼輸入錯誤')
    location.reload();
}

function getdata() {
    fetch('../php/list.php', {method: 'get'})
    .then((response) => {
        if (!response.ok) throw new Error(response.statusText)
        return response.json()
    }).then((item) => {
        let tbody = document.querySelector('tbody')
        item.forEach(element => {
            tbody.innerHTML += `
            <tr>
                <td>${element.name}</td>
                <td>${element.mail}</td>
                <td>${element.country}</td>
                <td>${element.phone}</td>
                <td>${element.line}</td>
                <td>${element.lineid}</td>
                <td>${element.req_date}</td>
            </tr>
            `
        });
    }).catch((error) => {
        alert(error)
        console.log(error)
    })
}