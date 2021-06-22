  
let container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

setTimeout(() => {
	container.classList.add('sign-in')
}, 200)

/*form*/
var x=document.getElementById('login');
var y=document.getElementById('register');
var z=document.getElementById('btn');
function register(){
	x.style.left='-400px';
	y.style.left='50px';
	z.style.left='110px'; 
}
function login(){
	x.style.left='50px'; 
	y.style.left='450px'; 
	z.style.left='0px';  
}

var modal = document.getElementById('login-form');
window.onclick = function(event){
	if(event.target == modal){
		modal.style.display = "none";
	}
}




 