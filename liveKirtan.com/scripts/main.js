
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
   }

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
   }


/*==============================
Store messages in FIREBASE
================================*/

//create firebase reference
var dbRef = new Firebase("https://messages-91984.firebaseio.com"); // U NEED TO PUT YOUR DATABASE IN HERE
var contactsRef = dbRef.child('messages');
document.getElementsByName('contactForm')[0].addEventListener("submit", function( event ) {  
  event.preventDefault();
  var name= document.querySelector('#name').value;
  var msg = document.querySelector('#msg').value;
    contactsRef
      .push({
        name: document.querySelector('#name').value,
        email: document.querySelector('#email').value,
        msg:  document.querySelector('#msg').value
      });
    contactForm.reset();
    document.getElementsByName('contactForm')[0].style.display='none';
    document.getElementById('thanks').style.display='block';
}, false);
