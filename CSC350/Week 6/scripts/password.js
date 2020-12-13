/*text value to the password*/
function addValueToPassword(button) {
  var currVal = $("#passcode").val();
  if (button == "bksp") {
    $("#passcode").val(currVal.substring(0,
      currVal.length - 1));
  } else {
    $("#passcode").val(currVal.concat(button));
  }
}

function getPassword() {

    return "123";
}

/* On the main page, after password entry, directs
 * user to page 1
 */
$("#btnEnter").click(function () {
  var password = getPassword();

  if (document.getElementById("passcode").value ==
    password) {
        $("#btnEnter").attr("href",
          "#pageOne").button();
              }
  else {
    alert(
      "Incorrect password, please try again."
    );
  }
});
