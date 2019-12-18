<!DOCTYPE html>
<html>
<head>
	<title>screen saver app</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			background-color: black;
		}
		div{
			font-family: 'Bebas Neue', cursive;
			height: 100vh;
			width: 100%;
			margin: 0;
			text-align: center;
			font-size: 200pt;
			line-height: 100vh;
			color: #ccff33;
			animation:colorChange 10s infinite alternate;
			text-shadow:0px 0px 150px #ccff33;
			user-select: none; 
		}
		.subText{
			position: absolute;
			font-family: 'Bebas Neue', cursive;
			font-size: 30pt;
			color: #ccff33;
			animation:colorChange 10s infinite alternate;
			text-shadow: 0px 0px 150px #ccff33;
			user-select: none;
			text-align: center;
			width: 100%;
			height:10vh;
			left: 0%;
			margin-top: -38vh;
			background-color: transparent;
		}
		@keyframes colorChange{
			5%{
				color: #ffcc00;
				text-shadow:0px 0px 150px #ffcc00;
			}
			10%{
				color: #ff9933;
				text-shadow:0px 0px 150px #ff9933;
			}
			15%{
				color: #ff6600;
				text-shadow:0px 0px 150px #ff6600;
			}
			20%{
				color: #ff5050;
				text-shadow:0px 0px 150px #ff5050;
			}
			25%{
				color: #ff0066;
				text-shadow:0px 0px 150px #ff0066;
			}
			30%{
				color: #ff3399;
				text-shadow:0px 0px 150px #ff3399;
			}
			35%{
				color: #ff00ff;
				text-shadow:0px 0px 150px #ff00ff;
			}
			40%{
				color: #cc33ff;
				text-shadow:0px 0px 150px #cc33ff;
			}
			45%{
				color: #9966ff;
				text-shadow:0px 0px 150px #9966ff;
			}
			50%{
				color: #6666ff;
				text-shadow:0px 0px 150px #6666ff;
			}
			55%{
				color: #3366ff;
				text-shadow:0px 0px 150px #3366ff;
			}
			60%{
				color: #0066ff;
				text-shadow:0px 0px 150px #0066ff;
			}
			65%{
				color: #0099ff;
				text-shadow:0px 0px 150px #0099ff;
			}
			70%{
				color: #00ccff;
				text-shadow:0px 0px 150px #00ccff;
			}
			75%{
				color: #33cccc;
				text-shadow:0px 0px 150px #33cccc;
			}
			80%{
				color: #00ffcc;
				text-shadow:0px 0px 150px #00ffcc;
			}
			85%{
				color: #00ff99;
				text-shadow:0px 0px 150px #00ff99;
			}
			90%{
				color: #00ff00;
				text-shadow:0px 0px 150px #00ff00;
			}
			95%{
				color: #33cc33;
				text-shadow:0px 0px 150px #33cc33;
			}
			100%{
				color: #009900;
				text-shadow:0px 0px 150px #009900;
			}
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
	<div id="div">
	fuck you.
	</div>
	<span class="subText">but in a good way.</span>
	<script type="text/javascript">
		/*let div = document.getElementById('div');
		div.addEventListener("dblclick",() => {
			div.innerHTML = (prompt("Choose header text") + ".");
			localStorage.Main = div.innerHTML;
		})
		let sub = document.getElementsByTagName("SPAN")[0];
		sub.addEventListener("dblclick",() => {
			sub.innerHTML = (prompt("Choose subText") + ".");
			localStorage.Sub = sub.innerHTML;
		})
		let saveToLocalStorage = () => {
			localStorage.setItem("Main",div.innerHTML);
			localStorage.setItem("Sub",sub.innerHTML);
		}
		let getFromLocalStorage = () => {
			div.innerHTML = localStorage.getItem("Main");
			sub.innerHTML = localStorage.getItem("Sub");
		}
		let start = () => {
			if(localStorage.Main && localStorage.Sub){
				localStorage.Main = div.innerHTML;
				localStorage.Sub = sub.innerHTML;
			}else{
				saveToLocalStorage();
			}
		}
		getFromLocalStorage();
		start();*/
	</script>
</body>
</html>
