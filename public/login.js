'use strick'
var userName = document.querySelector('#username');
var userEmail = document.querySelector('#userEmail');
var userPass = document.querySelector('#userpass');
var userSubscribe = document.querySelector('#usersubscribe');
var sendBtn = document.querySelector('#send_btn');

console.log(sendBtn);

sendBtn.onclick = send;

function send () {

    var data = {
        name: userName.value,
        password: userPass.value,
        subscribe: userSabscribe.value,
        email: userEmail.value,
        
    }
    fetch('/login', {
        method: 'POST',
        body: JSON.stringify(data)
    });

}
// alert("hello")