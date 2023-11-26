$(document).ready(function () {
    function loadUser(searchKeyword = "") {
        $.ajax({
            url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/getpenggunaAdmin",
            dataType: "json",
            type: "GET",
            success: function (res) {
                var view = "";
                var filteredData = res;

                // Filter data berdasarkan kata kunci pencarian
                if (searchKeyword !== "") {
                    filteredData = res.filter((element) => {
                        // Sesuaikan kondisi pencarian sesuai kebutuhan
                        return (
                            (element._id &&
                                element._id
                                    .toLowerCase()
                                    .includes(searchKeyword.toLowerCase())) ||
                            (element.username &&
                                element.username
                                    .toLowerCase()
                                    .includes(searchKeyword.toLowerCase())) ||
                            (element.nama &&
                                element.nama
                                    .toLowerCase()
                                    .includes(searchKeyword.toLowerCase())) ||
                            (element.jenis_kelamin &&
                                element.jenis_kelamin
                                    .toLowerCase()
                                    .includes(searchKeyword.toLowerCase())) ||
                            (element.usia &&
                                element.usia.toString().includes(searchKeyword))
                        );
                    });
                }

                filteredData.forEach((element, index) => {
                    var nomor = index + 1;
                    view += "<tr>";
                    view += "<td class='text-center'>" + nomor + "</td>";
                    view += "<td>" + (element._id ? element._id : "") + "</td>";
                    view +=
                        "<td>" +
                        (element.username ? element.username : "") +
                        "</td>";
                    view +=
                        "<td>" + (element.nama ? element.nama : "") + "</td>";
                    view +=
                        "<td>" +
                        (element.jenis_kelamin ? element.jenis_kelamin : "") +
                        "</td>";
                    view +=
                        "<td>" + (element.usia ? element.usia : "") + "</td>";
                    view += "<td>";
                    view +=
                        ' <a href="javascript:void(0)" class="btn btn-danger delete" data-id="' +
                        element._id +
                        '">Hapus</a>';
                    view += "</td>";
                    view += "</tr>";
                });
                $("#tableUser tbody").html(view);

                $("#totalData").html(filteredData.length);
            },
            error: function (err) {
                console.log(err);
            },
        });
    }

    loadUser();

    $("#searchButton").on("click", function () {
        var searchKeyword = $("#searchInput").val();
        loadUser(searchKeyword);
    });

    $("#tableUser").on("click", ".delete", function () {
        var id = $(this).data("id");
        alert(id);
        $.ajax({
            url:
                "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/deleteUserById?id=" +
                id,
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
});
