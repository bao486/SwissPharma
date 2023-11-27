function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Ici, tu devrais faire une requête AJAX pour vérifier les informations de connexion côté serveur
    // Exemple simplifié ici sans véritable vérification

    if (username === "user" && password === "pass") {
        // Animation d'image (remplace l'URL de l'image par la tienne)
        $('.card').fadeOut(500, function(){
            $('.card').css('background-image', 'url("success-image.jpg")').fadeIn(500);
        });

        // Redirige vers la page d'accueil ou effectue d'autres actions après la connexion réussie
    } else {
        alert("Login failed. Please check your username and password.");
    }
}
