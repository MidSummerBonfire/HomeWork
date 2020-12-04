
function getUserName() {
  return "helper";
}
function getPassword() {

    return "feelBetter";
}


$("#btnEnter").click(function () {
  var password = getPassword();
  var userName = getUserName();

  if (document.getElementById("passcode").value ==
    password && document.getElementById("userName").value == userName) {
        $("#btnEnter").attr("href",
          "#pageHome").button();
              }
  else {
    alert(
      "Incorrect password, please try again."
    );
  }
});
