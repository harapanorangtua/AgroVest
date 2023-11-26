$(document).ready(function () {
    $("#add").click(function () {
        $("#signUp").modal("show");
        $("#id").val("");
        $("#nama").val("");
        $("#pria").prop("checked", true);
        $("#usia").val("");
        $("#username").val("");
        $("#password").val("");
    });
});
