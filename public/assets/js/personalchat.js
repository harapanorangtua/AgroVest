$(document).ready(function () {
  $.ajax({
    url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/getPenggunaLain",
    type: "GET",
    data: {
      penerima: $("#username").html(),
    },
    beforeSend: function () {
      $("#list-users").html(
        '<a href="#" class="list-group-item list-group-item-action">Loading...</a>'
      );
    },
    success: function (res) {
      var view = "";

      res.map((data) => {
        view +=
          '<a href="#" class="list-group-item list-group-item-action user">' +
          data.username +
          "</a>";
      });

      $("#list-users").html(view);
    },
    error: function (err) {
      console.log(err);

      $("#list-users").html(
        '<a href="#" class="list-group-item list-group-item-action">Fatch Error...</a>'
      );
    },
  });

  function currentDate() {
    var date = new Date();

    return date.toUTCString();
  }

  function load_chat() {
    $.ajax({
      url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/getPersonalChatByPengirimPenerima",
      type: "GET",
      data: {
        pengirim: $("#list-users .active").html(),
        penerima: $("#username").html(),
      },
      beforeSend: function () {
        $("#list-chats").html(
          '<div class="card">' +
            '<div class="card-body">' +
            "Loading..." +
            "</div>" +
            "</div>"
        );
      },
      success: function (res) {
        var view = "";

        res.map((data) => {
          if (data.pengirim == $("#username").html()) {
            bgcolor = " text-bg-success";
            color = "white";
          } else {
            bgcolor = "";
            color = "muted";
          }

          view +=
            '<div class="card mb-3' +
            bgcolor +
            '">' +
            '<div class="card-body">' +
            '<h5 class="card-title">' +
            data.pengirim +
            "</h5>" +
            data.personalChat +
            '<div class="text-end text-' +
            color +
            '">' +
            data.waktu +
            "</div>" +
            "</div>" +
            "</div>";
        });

        $("#list-chats").html(view);
      },
      error: function (err) {
        console.log(err);

        $("#list-chats").html(
          '<div class="card">' +
            '<div class="card-body">' +
            "Fetch Error..." +
            '<div class="text-end text-muted">' +
            currentDate() +
            "</div>" +
            "</div>" +
            "</div>"
        );
      },
    });
  }

  $("#list-users").on("click", ".user", function () {
    var username = $(this).html();

    $("#list-users .user").removeClass("active");
    $(this).addClass("active");

    // load_chat();
    setInterval(load_chat, 15000);

    $("#form-send").removeClass("d-none");
  });

  $("#form-send").submit(function () {
    $.ajax({
      url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/postChat",
      type: "POST",
      data: {
        pengirim: $("#username").html(),
        penerima: $("#list-users .active").html(),
        waktu: currentDate,
        personalChat: $("#chat").val(),
      },
      success: function (res) {
        load_chat();
      },
      error: function (err) {
        console.log(err);
      },
    });

    $("#chat").val("");

    return false;
  });
});
