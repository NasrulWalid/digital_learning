<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
	<nav class="navbar">
		<div class="brand">
			<a href="#">SMK EVOS E-SPORT</a>
		</div>
		<ul class="sisikanan">
			<li><a href="<?php echo base_url('home'); ?>"  class="aktif">HOME</a></li>
			<li><a href="#" class="aktif">PENDAFTARAN</a></li>
			<li><a href="#" class="aktif">JADWAL PELAJARAN</a></li>
			<li><a href="<?php echo base_url('login/index'); ?>" class="aktif">LOGIN</a></li>
			<li><span>0748-324284</span></li>
		</ul>
	</nav>
    <div class="kotaklogin" id="login" >
    
    <form action="<?php echo base_url('mahasiswa/index'); ?>" method="post">
		<h1>Silahkan Login</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" class="formlogin" placeholder="Masukkan Username Anda">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="formlogin" placeholder="Masukkan Password Anda">
        <br>
        <br>
        <button type="submit" class="tombollogin">Login</button>
    </form>
    </div>
</body>

</html>
<style>

body{
	font-family: "Roboto" sans-serif;
	background: #d5f0f3;
}

h1{
	/*ketebalan font*/
	font-weight: 300;
    text-transform: uppercase;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: yellow;
  height: 50px;
  box-shadow: 0 7px 15px 0 rgba(red, green, blue, 0.5);
}

.brand a {
  font-size: 20px;
  font-weight: bold;
  color: black;
  text-decoration: none;
}

.sisikanan {
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
}

.sisikanan a {
  margin-left: 20px;
  text-decoration: none;
  color: black;
}

.sisikanan > li {
	text-decoration: none;
	list-style-type: none;
	padding: 15px;
}

.sisikanan > li > span {
  font-weight: bold;
}

.sisikanan>li>a:hover {
	color: crimson;
	transition: all .3s ease-in-out ;
}

.aktif {
	color: white;
	padding: 15px;
}

.aktif:hover {
	color: white !important;
	background-color: #46de4b;
	transition: all .6s ease-in-out ;
}

.kotaklogin{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	align-items: center;
	margin: 100px 600px ;
	padding: 30px 20px;
    border-radius: 20px;
}
 
label{
	font-size: 11pt;
    font-style: italic;

}
 
.formlogin{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
    border-radius: 10px;
}
 
.tombollogin{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 10px;
	padding: 10px 20px;
}
</style>
