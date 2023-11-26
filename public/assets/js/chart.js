$(document).ready(function () {
    const ctx = document.getElementById("myChart");

    $.ajax({
        url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/getAllPengguna",
        type: "GET",
        success: function (res) {
            new Chart(ctx, {
                type: "pie",
                data: {
                    labels: ["Laki-laki", "Perempuan"],
                    datasets: [
                        {
                            label: "Persentase User",
                            data: [
                                res.filter(checkPria).length,
                                res.filter(checkWanita).length,
                            ],
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        },
        error: function (err) {
            console.log(err);
        },
    });

    function checkPria(data) {
        return data.jenis_kelamin == "Laki-laki";
    }

    function checkWanita(data) {
        return data.jenis_kelamin == "Perempuan";
    }

    const rtx = document.getElementById("myChart2");

    $.ajax({
        url: "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jmkmr/endpoint/getAllPengguna",
        type: "GET",
        success: function (res) {
            function checkUsia(data, minAge, maxAge) {
                return data.usia >= minAge && data.usia <= maxAge;
            }

            new Chart(rtx, {
                type: "line",
                data: {
                    labels: ["0-9", "10-19", "20-29", "30-39", "40-49", "50+"],
                    datasets: [
                        {
                            label: "# Rentang usia User",
                            data: [
                                res.filter(data => checkUsia(data, 0, 9)).length,
                                res.filter(data => checkUsia(data, 10, 19)).length,
                                res.filter(data => checkUsia(data, 20, 29)).length,
                                res.filter(data => checkUsia(data, 30, 39)).length,
                                res.filter(data => checkUsia(data, 40, 49)).length,
                                res.filter(data => checkUsia(data, 50, Infinity)).length,
                            ],
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        },
        error: function (err) {
            console.log(err);
        },
    });
});
