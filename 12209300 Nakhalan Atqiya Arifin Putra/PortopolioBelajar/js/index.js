document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    if (user == "akusukaprogramming" && pass == "miaw") {
        window.location.href = 'beranda.html'; 
    } else {
        alert("Username dan password anda salah!");
    }
});