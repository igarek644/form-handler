window.onload = function () { 
  var email = document.querySelector("input[name=email]");
  var phone = document.querySelector("input[name=phone]");
  var name = document.querySelector("input[name=name]");

  document.querySelector(".buttons").onclick = function () {
    var params = "email=" + email.value + "&phone=" + phone.value +"&name=" + name.value;
    sendAjax(params);
  }


};

function sendAjax(params) {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function (ev) {
        if (request.readyState === 4 && request.status === 200) {
          if (request.responseText === "1") {
            document.location.replace("complete.php");
            return;
          }
          document.querySelector(".response .response-text").innerHTML = request.responseText;
        }
    };

    request.open("POST", "form-handler.php");
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send(params);
}