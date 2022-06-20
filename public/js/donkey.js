const gear = document.getElementById("gear");
gear.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
});

const alert = document.getElementById("alert");
alert.addEventListener("click", function () {
    alert.classList.toggle("hidden");

});

setTimeout(function () {
    $(".alert").fadeOut(1500);
} , 5000);



