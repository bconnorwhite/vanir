function sendEmail(){
  var xhttp = new XMLHttpRequest();
  var url = "<?php bloginfo('template_url'); ?>" + "/mail.php";
  var params = "name=" + document.getElementById('form-name').value + "&email=" + document.getElementById('form-email').value + "&message=" + document.getElementById('form-message').value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200){
      document.getElementById('contact-form').style.opacity = 0;
      var name = document.getElementById('form-name').value;
      if(/^[A-Za-z\s]+$/.test(name)){
        name = name.split(" ")[0];
        document.getElementById('thanks').innerHTML = "Thanks " + name + "! Your message has been sent.";
      }
      setTimeout(function(){
        document.getElementById('contact-form').style.visibility = "hidden";
        document.getElementById('form-message').style.height = "0";
        document.getElementById('contact-form').style.height = "0";
        document.getElementById('thanks').style.display = "block";
      }, 1000);
    }
  };
  xhttp.open("POST", url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(params);
}
