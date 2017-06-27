var app = new Vue({
    el:'#app',
    data: {
        email:'',
        password:''
    },
    created: function () {
        firebase.auth().onAuthStateChanged(function(firebaseUser){
            if(firebaseUser){
                window.location.href = "salesystem.html"
            }
        });
	},	
    methods: {
        ingresar: function (event) {
            event.preventDefault();
            if(this.email == '' || this.password == ''){
                sweetAlert("Oops...", "¡Todos los campos son obligatorios!", "error");
            }else{
                firebase.auth().signInWithEmailAndPassword(this.email,  this.password)
                .then(
                    function(user){
                        console.log(user)
                        firebase.auth().onAuthStateChanged(function(firebaseUser){
                            if(firebaseUser){
                                window.location.href = "salesystem.html"
                            }else{
                                window.location.href = "login.php";
                            }
                        });
                    },
                    function(error) {
                        var errorCode = error.code;
                        var errorMessage = error.message;                
                        sweetAlert("Oops...", errorMessage, "error");
                    });                
            }
        }
    }
});