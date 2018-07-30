  function chatData(){

     let name = document.getElementById("chat-name");
     let mail = document.getElementById("chat-mail");
     let message = document.getElementById("chat-message");

     let xhr = new XMLHttpRequest();
     
     xhr.onload = function(){

       if (this.status == 200) {
         document.getElementById("chat-hint").textContent = this.responseText;
       }else{
         alert('failed');
       }
       
     }

     xhr.open("GET","../php/chat.php?name=" +name.value+ "&mail=" +mail.value+ "&message=" +message.value, true);
     xhr.send();

     name.value = "";
     mail.value = "";
     message.value = "";
}

var chatForm = document.getElementById("chat-form");

if (chatForm.addEventListener) {

  chatForm.addEventListener('submit',function(e){

      e.preventDefault();
      chatData();
      
  },false);

}else{
  chatForm.attachEvent('onsubmit',function(e){
      e.returnValue = false;
      chatData();
  },false);
}


