<!DOCTYPE html>
<html>
<head>
	<title>Team</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}
		.team-section{
			overflow: hidden;
			text-align: center;
			background: #34495e;
			padding: 60px;
		}
		.team-section p{
			font-size: 35px;
			color: white;
			text-transform: uppercase;
		}
		.border{
			display: block;
			margin: auto;
			width: auto;
			height: auto;
			background: transparent;
			margin-bottom: 40px;
			text-align: center;
		}
		.ps{
			margin-bottom: 40px;
		}
		.ps a{
			display: inline-block;
			margin: 0 30px;
			width: 160px;
			height: 160px;
			overflow: hidden;
			border-radius: 50%;
		}
		.ps a img{
			width: 100%;
			filter: grayscale(100%);
			transition: 0.1s all;
		}
		.ps a:hover img{
			filter: none;
			display: block;

		}
		.section{
			width: 600px;
			margin: auto;
			font-size: 20px;
			color: white;
			text-align: justify;
			height: 0;
			overflow: hidden;
		}
		.section:target{
			height: auto;
		}
		.name{
			display: block;
			margin-bottom: 30px;
			text-align: center;
			font-size: 22px;

		}
		
}
		
	</style>
</head>
<body>
	<div>
	<div class="team-section">
		<p>our team</p>
		<span class="border"></span>
		<div class="ps">
			<a href="#p1"><img src="fahim.jpg" alt=""></a>
			<a href="#p2"><img src="jhumur.jpg" alt=""></a>
			<a href="#p3"><img src="uccash.jpg" alt=""></a>
		</div>

		<div class="section" id="p1">
			<span class="name">Fahim Ashhab</span>
			<span class="border">Qualification : B.Sc. Engg. in CSE(Running)<br>
				Bangladesh Army University of Science and Technology<br>Mobile: +8801793916017<br>Email: ashhabf50@gmail.com</span>
			<P></P>
		</div>
		<div class="section" id="p2">
			<span class="name">Nahin Rukeiya Jhumur</span>
			<span class="border">Qualification : B.Sc. Engg. in CSE(Running)<br>
				Bangladesh Army University of Science and Technology<br>Mobile: +8801757893501<br>Email: jhumur.baust@gmail.com</span>
			<P></P>
		</div>
		<div class="section" id="p3">
			<span class="name">Fazlay Elahi Uccash</span>
			<span class="border">Qualification : B.Sc. Engg. in CSE(Running)<br>
				Bangladesh Army University of Science and Technology<br>Mobile: +8801779947578<br>Email: uccash0123@gmail.com</span>
			<P></P>
		</div>
		
	</div>


	<div class="team-section">
		<p>advisors</p>
		<span class="border"></span>
		<div class="ps">
			<a href="#p4"><img src="hasan.jpg" alt=""></a>
			<a href="#p5"><img src="sowket.jpg" alt=""></a>
		</div>

		<div class="section" id="p4">
			<span class="name">Md. Al-Hasan</span>
			<span class="border">Designation :	Lecturer <br>Department :	Computer Science and Engineering,BAUST<br>Qualification :	B. Sc. Engg in CSE (CUET), M.Sc. in CSE, PhD in CSE ( Pursuing )<br>Mobile:+8801722-774004<br>Email:	hasan07cse@gmail.com, al-hasan@baust.edu.bd</span>
			<P></P>
		</div>
		<div class="section" id="p5">
			<span class="name">Dr. Mohammed Sowket Ali</span>
			<span class="border">Designation :	Assistant Professor<br>Department :	Computer Science and Engineering<br>Qualification :	PhD. in Nano-IT Engineering (Korea), M.Engg., B.Sc. Engg., MIEB, MBCS, IAENG<br>Mobile:	+8801791895371<br>Email:		sowket@baust.edu.bd,sowket@gmail.com</span>
			<P></P>
		</div>
		
		
	</div>
	</div>


</body>
</html>