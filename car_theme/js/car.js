var isClick = "";
//Book api
$("#btnBook").click(function () {
  var dropdownMenuButton = document.getElementById("dropdownMenuButton");
  var option = document.createElement("option");
  $.ajax({
    url: "https://demo.api-platform.com/books",
    data: {
      _token: "{{ csrf_token() }}",
    },
    type: "GET",
    dataType: "json",
    success: function (result) {
      $("#option").empty();
      for (var key in result) {
        console.log(result[key]);
        var element = document.createElement("a");
        element.classList = "dropdown-item";
        element.id = result[key]["isbn"];
        element.href = "#";
        element.innerText = "" + result[key]["title"];
        document.querySelector(".dropdown-menu").appendChild(element);

        isClick = "Books";
      }
    },
    error: function () {
      //handle errors
      toastr.error(
        "{{__('message.Something went wrong, please try again !')}}"
      );
    },
  });
});
//Book api
$("#btnReview").click(function () {
  var dropdownMenuButton = document.getElementById("dropdownMenuButton");
  var option = document.createElement("option");
  $.ajax({
    url: "https://demo.api-platform.com/reviews",
    data: {
      _token: "{{ csrf_token() }}",
    },
    type: "GET",
    dataType: "json",
    success: function (result) {
      $("#option").empty();
      for (var key in result) {
        console.log(result[key]);
        var element = document.createElement("a");
        element.classList = "dropdown-item";
        element.id = result[key]["isbn"];
        element.href = "#";
        element.innerText = "" + result[key]["book"]["title"];
        document.querySelector(".dropdown-menu").appendChild(element);

        isClick = "Reviews";
      }
    },
    error: function () {
      //handle errors
      toastr.error(
        "{{__('message.Something went wrong, please try again !')}}"
      );
    },
  });
});
//choose title
$("#option").on("click", 'a', function (event) {
  var content = this.innerHTML;
  //add to form data
  $("#frmData").val(content);
  if (isClick == "Books") {
    $("#btnBook").text(content);
  } else {
    $("#btnReview").text(content);
  }
});
//submit form
$("#btnSubmit").click(function (event) {
  location.reload(0);
});