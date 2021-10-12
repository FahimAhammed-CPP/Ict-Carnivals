// javascript for the slide:
var a=1;
function slide(){
	if(a==1){
		document.getElementById('simg1').style.display='block';
		document.getElementById('simg2').style.display='none';
		document.getElementById('simg3').style.display='none';
		document.getElementById('simg4').style.display='none';
		a=2;
	}
	else if(a==2){
		document.getElementById('simg1').style.display='none';
		document.getElementById('simg2').style.display='block';
		document.getElementById('simg3').style.display='none';
		document.getElementById('simg4').style.display='none';
		a=3;
	}
	else if(a==3){
		document.getElementById('simg1').style.display='none';
		document.getElementById('simg2').style.display='none';
		document.getElementById('simg3').style.display='block';
		document.getElementById('simg4').style.display='none';
		a=4;
	}
	else if(a==4){
		document.getElementById('simg1').style.display='none';
		document.getElementById('simg2').style.display='none';
		document.getElementById('simg3').style.display='none';
		document.getElementById('simg4').style.display='block';
		a=1;
	}

	setTimeout(function(){
		slide();
	},2000)
}
slide();

