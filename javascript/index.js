var menu = document.getElementById('menu_bar');
var navbar = document.getElementById('navbar');

menu.addEventListener("click", function() {
  if(navbar.style.display == "none") {
  	navbar.style.display = "block";
  }
  else{
  	navbar.style.display = "none";
  }
});


/*scroll upp down*/
const scrollup = document.querySelector('.scrollup');
window.addEventListener('scroll', () => {
	if (window.pageYOffset > 100) {
		scrollup.classList.add("active");
	}
	else{
		scrollup.classList.remove("active");
	}
});


//smtp email system api:
function sendEmail(){
	Email.send({
        Host: "smtp.elasticemail.com",
        Username: "rohitshiv849@gmail.com",
        Password: "CC239D0AB190A2A6001EB762BC2401095B2B",
        To: 'rohitshiv849@gmail.com',
        From: document.getElementById("email").value,
        Subject: "Sending Email using javascript",
        Body: "Well that was easy!!",
      })
        .then(function (message) {
          alert("mail sent successfully")
        });
}