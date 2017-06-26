var app = new Vue({
    el:'#app',
    data: {
        email:'',
        password:''
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