$(document).ready(function () {
  $("#submit").click(function () {
    let firstname = $("#firstname").val();
    let lastname = $("#lastname").val();
    let address = $("#address").val();
    let contactno = $("#contactno").val();
    let username = $("#username").val();
    let password = $("#password").val();
    let emptype = $("#emptype").val();
    let role = $("#role").val();

    if (firstname == "" || lastname == "" || address == "" || contactno == "") {
      return false;
    }

    $.ajax({
      type: "POST",
      url: "./components/users/createuser.php",
      data: {
        firstname: firstname,
        lastname: lastname,
        address: address,
        contactno: contactno,
        username: username,
        password: password,
        emptype: emptype,
        role: role,
      },
      cache: false,
      success: function (data) {
        alert(data);
      },
      error: function (xhr, status, error) {
        console.error(xhr);
      },
    });
  });
});
