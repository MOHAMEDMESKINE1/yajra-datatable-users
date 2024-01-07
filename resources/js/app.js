import axios from 'axios';
import './bootstrap';
import 'laravel-datatables-vite';

const messages = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById("message");
const message_form = document.getElementById("message_form");

message_form.addEventListener("submit",(e)=>{
    e.preventDefault();

    let has_errors = false;

    if(username_input.value==""){
        alert("please enter a username")
        has_errors = true;
    }
    if(message_input.value==""){
        alert("please enter a message")
        has_errors = true;
    }
    if(has_errors){
        return;
    }

    const options = {
        method:"post",
        url:"chat/send-message",
        data : {
            username : username_input.value,
            message : message_input.value,
        }
    }
    axios(options);
    username_input.value==""
    message_input.value==""
})
window.Echo.channel('chat').listen('.message',(e)=>{
    messages.innerHTML+=`
        <div class="bg-white p-2">
            <p  class='bg-success text-white shadow shadow-sm p-1 rounded rounded-md'> ${e.username}</p>
            <p class="text-primary"> ${e.message}</p>
        </div>
    `
});