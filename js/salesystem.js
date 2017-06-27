firebase.auth().onAuthStateChanged(function(firebaseUser){
    if(!firebaseUser){
        window.location.href = "login.php"
    }
});
salir = function(){
    console.log('logout');
    firebase.auth().signOut();            
}