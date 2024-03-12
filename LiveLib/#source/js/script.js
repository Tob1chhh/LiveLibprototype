const login_button = document.getElementById("login__btn");

const backToTop = document.getElementById("back_to_top");
backToTop.addEventListener("click", function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
});