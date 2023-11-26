$(document).ready(function () {
    $.ajax({
        url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/getPenggunaById",
        type: "GET",
        data: {
            penerima: usernameSession,
        },
        success: function (res) {
            var view = "";

            res.map((data) => {
                view +=
                    '<a href="javascript:void(0);" class="list-group-item list-group-item-action all">' +
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
        // Cek apakah usernameSession tidak kosong atau null
        if (usernameSession) {
            $.ajax({
                url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/getAllObrolan",
                type: "GET",
                data: {
                    pengirim: usernameSession,
                    penerima: "all",
                },
                beforeSend: function () {
                    $("#list-chats").html(
                        '<div class="d-flex flex-row justify-content-end mb-4 pt-1">' +
                            '<div><p class="p-2 me-3 mb-3 text-white rounded-3 bg-success">' +
                            "Sedang Loading..." +
                            "</div>" +
                            "</div>"
                    );
                },
                success: function (res) {
                    var view = "";

                    res.map((data) => {
                        var bgcolor, color, posisi;
                        if (data.pengirim === usernameSession) {
                            bgcolor = "bg-berhasil";
                            color = "white";
                        } else {
                            bgcolor = "";
                            color = "muted";
                        }

                        view += ` <div class="card mask-custom mb-3 ${bgcolor}"> 
        <div class="card-header d-flex justify-content-between">
            <p class="fw-bold mb-0"><i class="bi bi-person-circle"> ${data.pengirim}</i></p> <i class="bi bi-clock-history"> ${data.waktu}</i>
        </div> <div class="card-body">
            <div class="card-text">${data.obrolan}</div>
        </div>
    </div>
`;
                    });
                    $("#list-chats").html(view);
                },
                error: function (err) {
                    console.log(err);

                    $("#list-chats").html(
                        '<div class="d-flex flex-row justify-content-end mb-4 pt-1">' +
                            '<div><p class="p-2 me-3 mb-3 text-white rounded-3 bg-danger">' +
                            "Fetch Error!!!!" +
                            "</div>" +
                            "</div>"
                    );
                },
            });
        } else {
            // Tindakan atau notifikasi jika usernameSession kosong
            console.log(
                "UsernameSession kosong. Fungsi load_chat() tidak dijalankan."
            );
            // Atau tampilkan pesan ke pengguna bahwa mereka harus login terlebih dahulu
            // Contoh: alert("Anda harus login terlebih dahulu!");
        }
    }

    $("#form-send").submit(function () {
        if (usernameSession) {
            $.ajax({
                url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/insertObrolan",
                type: "POST",
                data: {
                    pengirim: usernameSession,
                    penerima: "all",
                    waktu: currentDate(),
                    obrolan: $("#chat").val(),
                },
                success: function (res) {
                    load_chat();

                    var notifElement =
                        '<div class="alert alert-success" role="alert">Pesan Terkirim!</div>';
                    $("#list-chats").append(notifElement);

                    setTimeout(function () {
                        $(".alert-success").remove();
                        k;
                    }, 5000); //
                },
                error: function (err) {
                    console.log(err);
                },
            });

            $("#chat").val("");
        } else {
            // Tindakan atau notifikasi jika usernameSession kosong
            console.log(
                "UsernameSession kosong. Pengguna tidak dapat melakukan posting."
            );            
            alert("Anda harus login terlebih dahulu!");
        }

        return false;
    });

    $("#delt").on("click", ".delete", function () {
        $.ajax({
            url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/deleteAllObrolan",
            type: "DELETE",
            beforeSend: function () {
                return confirm("Apakah Anda yakin anda akan menghapus data?");
            },
            success: function () {
                loadUser();
            },
            error: function (err) {
                console.log(err);
            },
        });
    });

    load_chat();
});
