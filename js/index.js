firebase.auth().onAuthStateChanged(function(firebaseUser){
    if(firebaseUser){
        window.location.href = "salesystem.html"
    }else{
        window.location.href = "login.php";
    }
});