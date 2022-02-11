
@extends('layouts.template')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
@section('style')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
<style>
	/*1585 at use desktop*/
/*========================= Start setting ============================*/
	body {
		font-family: 'Sen', sans-serif !important;
		--bggreen:#40ad74;
		--bgblack:#202731;
		--bgblackopacity:#202731ed;
		--pt: 165px;
		--ptleft:105px;
		--ptright:105px;
	}
	#about{
		padding: 0px 54px;
		margin-bottom: -26px;
		background-color: var(--bggreen);
	}
	#about .img-fluid {
	    max-width: 100%;
	    height: auto;
	}
	#about h1{
		font-family: 'Sen', sans-serif !important;
		line-height: 50px;
    	font-size: 56px;
    	font-weight: 500;
	}
	#about .text-align-justify{
		/*text-align:justify;*/
	}
	#about .p-0{
		padding: 0px;
	}
	#about .header{
		font-size: 32px;
	}
	#about .paragraph{
		font-size: 23px;
    	line-height: 28px;
	}
	#about .align-items-center {
	    align-items: center!important;
	}
	#about .bg-white{
	    background-color: #fff;
	}
	#about .bg-black{
		background-color: #202731;
	}
	#about .row-custom {
	    display: table;
	}

	#about .row-custom [class*="col-"] {
	    float: none;
	    display: table-cell;
	    vertical-align: top;
	}
	#about .d-mobile-none{
		display: block;
	}
	#about .d-mobile-show{
		display: none;
	}
/*========================= End setting ============================*/

/*========================= Start section-one ============================*/
	#about .section-one{
		background-color: var(--bgblack);
    	padding: 30px var(--pt) 10px var(--pt);
	}
	#about .section-one .logo{
		width: 120px;
		display: block;
		margin: auto;
	}
	#about .section-one .box-content-header {
	    padding: 20px 0px 30px 0px;
	}
	#about .section-one h1,#about .section-one p{
		color: #fff;
	}
	#about .section-one p{
		text-align: center;
	}
/*========================= End section-one ============================*/


/*========================= Start section-two ============================*/
	#about .section-two{
		background-color: var(--bgblack);
	}
	
	#about .section-two .ab-img{
		height: 350px;
	}
	#about .section-two .banner{
		position: relative;
	    height: 350px;
	    width: 100%;
	    overflow: hidden;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	}
	#about .section-two .banner video{
	    position: absolute;
	    object-fit: cover;
	    width: 100%;
	    height: 350px;
	    object-fit: fill;
	}
	#about .section-two .banner .content{
		width: 100%;
	    position: absolute;
	    top: 0;
	    height: 350px;
	}
	#about .section-two figure {
	  display: -ms-flex;
	  display: -webkit-flex;
	  display: flex;
	  height: 350px;
	}

	#about .section-two figure button[name="play"] {
	  width: 120px;
	  height: 120px;
	  background: var(--bgblack);
	  border: none;
	  border-radius: 100%;
	  margin: auto;
	  cursor: pointer;
	}
	#about .section-two figure button[name="play"]:focus {
	  outline: 0;
	  border: 1px solid hsl(210, 58%, 69%);
	  box-shadow: 0 0 0 3px hsla(210, 76%, 57%, 0.5);
	}

	#about .section-two figure button[name="play"]::after {
	    content: '';
	    display: inline-block;
	    position: relative;
	    top: 3px;
	    left: 12px;
	    border-style: solid;
	    border-width: 43px 0 43px 53px;
	    border-color: transparent transparent transparent var(--bggreen);
	}
/*========================= End section-two ============================*/

/*========================= Start section-three ============================*/
	#about .section-three{
		background-color: white;
    	padding: 50px var(--pt) 30px var(--pt);
	}
	#about .section-three p{
		text-align: center;
	}
/*========================= End section-three ============================*/

/*========================= Start section-four ============================*/
	#about .section-four{
		background-color: #fff;
	}
	#about .section-four .box-content-left{
		background-color: var(--bgblack);
		padding: 137px 170px;
		/*display: flex;*/
	}
	#about .section-four .box-content-left img{
		display: block;
		margin: auto;

	}
	#about .section-four .box-content-right{
		padding: 137px 0px 90px 0px;
	}
	#about .section-four .box-content-aria{
	    padding: 0px var(--ptright) 0px var(--ptleft);
	    width: 100%;
	}
	#about .section-four .box-content-header{
		position: relative;
		margin-bottom: 116px;
	}
	#about .section-four .box-circle{
		position: absolute;
		top: 0;
	    right: 0;
	}
	#about .section-four .box-circle div{
		width: 30px;
	    height: 30px;
	    background-color: var(--bggreen);
	    border-radius: 50%;
	    margin: 0px 0px 8px 0px;
	}
	#about .section-four p{
	    padding: 0px var(--ptright) 0px var(--ptleft);
    }
    #about .section-four .box-circle-two{
		position: absolute;
	    bottom: 0;
	    right: var(--ptright);
	    top: 88%;
    }
    #about .section-four .box-circle-two td div{
		width: 30px;
	    height: 30px;
	    background-color: var(--bggreen);
	    border-radius: 50%;
	    margin-left: 27px;
   	 	margin-bottom: 27px;
	}
/*========================= End section-four ============================*/


/*========================= Start section-five ============================*/
	#about .section-five{
		padding-bottom: 34px;
		background-color: #fff;
	}
	#about .section-five .box-left{
		padding: 115px 160px 30px var(--pt);
	}
	#about .section-five .box-right{
		padding: 115px var(--ptright) 50px 300px;
		position: relative;
	}
	#about .section-five h1{
		margin-bottom: 70px;
	}
	#about .section-five .paragraph{
		margin-bottom: 30px;
	}
	#about .section-five .box-left img{
		margin-top: 46px;
	}
	#about .section-five .oeko-tex{
		width: 400px;
		display: block;
		margin: auto;
	}
	#about .section-five .box-right .backgrount-center{
		position: absolute;
	    background-color: var(--bgblack);
	    width: 200px;
	    height: 100%;
	    top: 0;
	    left: 0;
	}
	#about .section-five .box-right .img-backgrount-center{
		position: absolute;
	    z-index: 1;
    	/*top: 72px;*/
    	top: 10%;
    	left: -50px;
	}
	#about .section-five .box-right img{
		width: 180px;
		margin: auto;
		display: block;
		margin-bottom: 94px;
	}
/*========================= End section-five ============================*/
	
/*========================= Start section-six ============================*/
	#about .section-six{
		position: relative;
		background-color: #fff;
	}
	#about .section-six .box-left {
	    padding: 150px 0px 64px var(--pt);
	}
	#about .section-six .box-right {
		display: block;
	    width: 220px;
	    top: 80px;
	    position: absolute;
	    right: var(--ptright);
	}
	#about .section-six .content{
		position: absolute;
    	bottom: 0;
	}
	#about .section-six h1,#about .section-six p{
		color: white;
	}
	#about .section-six h1{
		font-size: 64px;
		margin-bottom: 56px;
	}
	#about .section-six ul {
		position: relative;
		list-style: none;
		margin-left: 0;
		padding-left: 0;
	}
	#about .section-six .box-left ul li:nth-child(1):before{
		content: ".";
		color: var(--bggreen);
	    position: absolute;
	    top: -45px;
   	 	left: -65px;
	    font-size: 200px;
	}
	#about .section-six .box-right ul li:nth-child(1):before{
		content: ".";
		color: var(--bggreen);
	    position: absolute;
	    top: -55px;
   	 	left: -65px;
	    font-size: 200px;
	}
	#about .section-six .box-right ul li:nth-child(2):before {
		content: ".";
		color: var(--bggreen);
	    position: absolute;
	    top: 0px;
	    left: -65px;
	    font-size: 200px;
	}
	#about .section-six .box-right ul li:nth-child(1) p{
		margin-bottom: 0px;
	}
/*========================= End section-six ============================*/    

/*========================= Start section-seven ============================*/

	#about .section-seven{
		background-color: #fff;
		border-bottom: 10px solid var(--bgblack);
	}
	#about .section-seven p.paragraph{
		font-size: 20px;
	}
	#about .section-seven img.circle {
	  	border-radius: 50%;
	  	display: block;
	  	margin: auto;
	    margin-bottom: 20px;
	}
	
	#about .section-seven .card:nth-child(1) {
	    padding: 33px 30px 0px 30px;
	}
	#about .section-seven .card:nth-child(2) {
	    padding: 33px 30px 40px 30px;
	}
	#about .section-seven .card ul {
	  list-style-type: none;
	  padding-left: 1em;
	}
	#about .section-seven .card ul li:nth-child(1){
		list-style: disc;
		font-weight: bold;
	}
	#about .section-seven .card ul li:nth-child(1) p,#about .section-seven .card ul li:nth-child(2) p{
		margin-bottom: 0px;
	}
	#about .section-seven .card ul li:nth-child(2):before {
	  content: "–";
	  position: absolute;
	  margin-left: -1em;
	  font-weight: bold;
	}
	#about .section-seven .custom-heigth{
		margin-bottom: 84px!important;
	}
	#about .section-seven .our-mission{
		background-color: var(--bgblack);
		padding: 62px 79px;
		position: relative;
	}
	#about .section-seven .our-mission h1{
		margin-bottom: 62px;
		color: white;
	}
	#about .section-seven .our-mission p{
		margin-bottom: 15px;
		color: white;
	}
	#about .section-seven .our-mission .box-circle-two{
		position: absolute;
	    bottom: 0;
	    left: 20px;
	    top: 90%;
    }
    #about .section-seven .our-mission .box-circle-two td div{
		width: 30px;
	    height: 30px;
	    background-color: var(--bggreen);
	    border-radius: 50%;
	    margin-left: 12px;
   	 	margin-bottom: 13px;
	}

/*========================= End section-seven ============================*/   

/*========================= Start section-eight ============================*/
	#about .section-eight{
		background-color: #fff;
		position: relative;
		height: 108px;
	}
	#about .section-eight .box-circle-two{
		position: absolute;
	    bottom: 0;
	    left: var(--pt);
	    top: 48%;
    }
    #about .section-eight .box-circle-two td div{
		width: 30px;
	    height: 30px;
	    background-color: var(--bggreen);
	    border-radius: 50%;
	    margin-left: 13px;
   	 	margin-bottom: 13px;
	}
	#about .section-eight .box-circle-two td:nth-child(1) div{
		margin-left: 0;
	}
/*========================= End section-eight ============================*/   

/*========================= Start section-nine ============================*/
	#about .section-nine{
		background-color: #fff;
		padding-bottom: 46px;
	}
/*========================= End section-nine ============================*/  

/*========================= Start section-ten ============================*/
	#about .section-ten{
		background-color: var(--bgblack);
		border-bottom: 10px solid var(--bgblack);
		padding-right: 63px;
	}
	#about .section-ten .box-content .box-left:nth-child(1){
		padding: 40px 60px 60px var(--pt);
	}
	#about .section-ten .box-content .box-left:nth-child(2){
		padding: 95px 60px 60px var(--pt);
	}
	#about .section-ten .box-content .box-left.bg-black p{
		color: #fff;
	}
	#about .section-ten .box-bg-p{
		margin-top: 47px;
	}
	#about .section-ten .box-bg-p-cus{
		padding-left: 15px;
	}
	#about .section-ten .box-content-right .box-bg-p{
		margin-top: 0;
	}
	#about .section-ten .box-bg-p .box-left:nth-child(1),
	#about .section-ten .box-bg-p .box-left:nth-child(2),
	#about .section-ten .box-bg-p .box-left:nth-child(3),
	#about .section-ten .box-bg-p .box-left:nth-child(4),
	#about .section-ten .box-bg-p .box-left:nth-child(5),
	#about .section-ten .box-bg-p .box-left:nth-child(6){
		padding: 40px 73px 20px 105px;
	}

	#about .section-ten .box-content .box-right:nth-child(1),
	#about .section-ten .box-content .box-right:nth-child(4),
	#about .section-ten .box-content .box-right:nth-child(6){
		padding: 0px 94px 40px var(--ptright);
	}
	#about .section-ten .box-content .box-right:nth-child(2),
	#about .section-ten .box-content .box-right:nth-child(3),
	#about .section-ten .box-content .box-right:nth-child(5),
	#about .section-ten .box-content .box-right:nth-child(7),
	#about .section-ten .box-content .box-right:nth-child(8),
	#about .section-ten .box-content .box-right:nth-child(9),
	#about .section-ten .box-content .box-right:nth-child(10){
		padding: 0px 94px 40px var(--ptright);
	}
	#about .section-ten ul {
	    position: relative;
	    list-style: none;
	    margin-left: 0;
	    padding-left: 0em;
	}
	#about .section-ten ul li:before {
	    content: ".";
	    color: var(--bggreen);
	    position: absolute;
	    top: -55px;
	    left: -55px;
	    font-size: 200px;
	}

/*========================= End section-ten ============================*/   

/*========================= Start section-eleven ============================*/
	#about .section-eleven{
		padding: 80px 54px 80px 95px;
		background-color: #fff;
	}
	#about .section-eleven .box-card-left{
		padding-right: 32px;
	}
	#about .section-eleven .box-card-center{
		padding-left: 29px;
		padding-right: 29px;
	}
	#about .section-eleven .box-card-right{
		margin-left: 32px;
		position: relative;
		height: 117px;
	}
	#about .section-eleven .box-card-left h1{
		font-size: 70px;
	    line-height: 65px;
	}
	#about .section-eleven .box-card-left p{
	    margin-top: 90px;
	}

	#about .section-eleven .box-circle-two{
		position: absolute;
	    bottom: 0;
	    left: 0;
    }
    #about .section-eleven .box-circle-two td div{
		width: 30px;
	    height: 30px;
	    background-color: var(--bggreen);
	    border-radius: 50%;
	    margin-left: 13px;
	}
	#about .section-eleven .box-circle-two td:nth-child(1) div{
		margin-left: 0;
	}
	#about .section-eleven .box-card-right-content p{
		margin-top: 64px;
		margin-bottom: 64px;
	}
	
/*========================= End section-eleven ============================*/  

/*========================= Start section-twelve ============================*/
	#about .section-twelve{
		background-color: #fff;
		padding-bottom: 30px;
	}	
	#about .section-twelve .box-right-aria{
		padding: 50px 90px 0px 90px;
	}
	#about .section-twelve .box-right-content h1{
		font-size: 28px;
    	line-height: 24px;
	}

	#about .section-twelve .box-right-content{
		position: relative;
    }
	#about .section-twelve .box-circle-two{
		position: absolute;
	    top: -30px;
    	right: 0;
    }
    #about .section-twelve .box-circle-two td div{
		width: 30px;
	    height: 30px;
	    background-color: var(--bggreen);
	    border-radius: 50%;
	    margin-left: 13px;
	}
	#about .section-twelve .box-circle-two td:nth-child(1) div{
		margin-left: 0;
	}
	#about .section-twelve .box-content-aria-custom{
		padding: 50px 30px 0px 90px;
	}
	#about .section-twelve .box-right-img-center{
		position: absolute;
	    top: -100px;
	    right: 43%;
	    z-index: 1;
	}
/*========================= End section-twelve ============================*/  

/******************** Responsive ********************/

@media (min-width: 1900px) {
	/*========================= Start setting ============================*/
		#about h1{
			font-family: unset;
			line-height: 54px;
	    	font-size: 60px;
		}
		
		#about .paragraph{
			font-size: 30px;
	    	line-height: 36px;
		}
	/*========================= End setting ============================*/

	/*========================= Start section-one ============================*/
		#about .section-one .logo {
	    	width: 180px;
		}
	/*========================= End section-one ============================*/	
	/*========================= Start section-four ============================*/
		#about .section-four .box-circle-two{
			top: 100%;
		}
	/*========================= End section-four ============================*/	

	/*========================= Start section-five ============================*/
		#about .section-five .box-right .img-backgrount-center {
		    top: 13%;
		}
	/*========================= End section-five ============================*/	

	/*========================= Start section-six ============================*/
		#about .section-six .box-right {
		    display: block;
		    width: 350px;
		    top: 90px;
		}
	/*========================= End section-six ============================*/

	/*========================= Start section-seven ============================*/
		#about .section-eleven .box-card-center {
		    padding-left: 51px;
		    padding-right: 51px;
		}
		#about .section-seven .our-mission .box-circle-two{
			top: 92%;
		}
		#about .section-seven .custom-heigth{
			margin-bottom: 72px!important;
		}
	/*========================= End section-seven ============================*/


	/*========================= Start section-twelve ============================*/
		#about .section-twelve .box-right-img-center{
			right: 45%;
		}
		#about .section-twelve .box-right-aria {
		    padding: 145px 90px 0px 90px;
		}
	/*========================= End section-twelve ============================*/
}
@media only screen and (min-width: 1200px) and (max-width: 1499px){
	/*========================= Start setting ============================*/
	    body {
		    --pt: 100px;
		    --ptleft: 100px;
		    --ptright: 100px;
		}
		#about h1{
			font-family: unset;
			line-height: 44px;
	    	font-size: 50px;
		}
		
		#about .paragraph{
			font-size: 18px;
    		line-height: 26px;
		}

	/*========================= End setting ============================*/

	
	
	
	
	/*========================= Start section-two ============================*/
		#about .section-four .box-circle-two {
		    top: 90%;
		}
	/*========================= End section-two ============================*/

	/*========================= Start section-four ============================*/
		/*#about .section-four .box-circle-two {
		    top: 91%;
		}*/
		#about .section-four .box-content-left {
		    padding: 107px 100px;
		}
	/*========================= End section-four ============================*/

	/*========================= Start section-five ============================*/
		#about .section-five .box-right .backgrount-center{
			width: 160px;
		}
		#about .section-five .box-right {
		    padding: 115px var(--ptright) 50px 250px;
		}
		#about .section-five .box-right .img-backgrount-center {
    		top: 7%;
    	}
	/*========================= End section-five ============================*/

	/*========================= Start section-seven ============================*/
	
		#about .section-seven .custom-heigth {
		    margin-bottom: 78px!important;
		}
		#about .section-seven .our-mission {
		    padding: 33px 49px;
		}
		#about .section-seven p.paragraph {
		    font-size: 16px;
		    line-height: 24px;
		}
		#about .section-seven .our-mission h1 {
		    margin-bottom: 20px;
		    color: white;
		}
		#about .section-seven img.circle {
		    width: 80px;
		}
		#about .section-seven .our-mission .box-circle-two {
		    left: 50px;
		    top: 82%;
		}
	/*========================= End section-seven ============================*/

	/*========================= Start section-ten ============================*/

	/*========================= End section-ten ============================*/

	/*========================= Start section-eleven ============================*/
		#about .section-eleven .box-card-center {
		    padding-left: 14px;
		    padding-right: 14px;
		}
	/*========================= End section-eleven ============================*/
	

	/*========================= Start section-twelve ============================*/
		#about .section-twelve .box-right-aria{
			padding: 40px 90px 0px 90px;
		}
		#about .section-twelve .box-right-img-center {
		    right: 42%;
		}

	/*========================= End section-twelve ============================*/
}
@media only screen and (min-width: 768px) and (max-width: 1199px) {
	/*orientation:portrait*/
	/*========================= Start setting ============================*/
		body {
		    --pt: 45px;
		    --ptleft: 45px;
		    --ptright: 45px;
		}
		#about {
		    padding: 0px 34px;
		}
		#about h1 {
		    line-height: 52px;
		    font-size: 46px;
		}
		#about .paragraph {
		    font-size: 18px;
		    line-height: 24px;
		}
		#about  .d-mobile-none{
			display: none!important
		}
		#about  .d-mobile-show{
			display: block;
		}
	/*========================= End setting ============================*/

	/*========================= Start section-two ============================*/
		#about .section-two .ab-img,
		#about .section-two .banner,
		#about .section-two .banner video,
		#about .section-two .banner .content,
		#about .section-two figure {
		  height: 200px;
		}
		#about .section-two figure button[name="play"] {
		    width: 80px;
		    height: 80px;
		}
		#about .section-two figure button[name="play"]::after {
		    top: 3px;
		    left: 6px;
		    border-width: 23px 0 23px 33px;
		}
	/*========================= End section-two ============================*/


	/*========================= Start section-four ============================*/
		#about .section-four .box-content-left {
		    padding: 50px 60px;
		}
		#about .section-four .box-content-right {
		    padding: 30px 0px 30px 0px;
		}
		#about .section-four .box-content-header {
		    position: relative;
		    margin-bottom: 30px;
		}
		#about .section-four .box-circle-two td div {
		    width: 20px;
		    height: 20px;
		    margin-left: 15px;
		    margin-bottom: 15px;
		}
		#about .section-four .box-circle-two {
		    top: 95%;
		}
	/*========================= End section-four ============================*/

	/*========================= Start section-five ============================*/
		#about .section-five .box-right .backgrount-center {
		    width: 150px;
		}
		#about .section-five .box-right {
		    padding: 50px var(--ptright) 50px var(--ptleft);
		}
		#about .section-five .box-right .img-backgrount-center {
	   	 	top: 5%;
	   	}
	   	#about .section-five .box-left {
		    padding: 15px 58px 30px var(--pt);
		}
		#about .section-five h1 {
		    margin-bottom: 30px;
		}
		#about .section-five .box-right img{
			display: none;
		}
	/*========================= End section-five ============================*/

	/*========================= Start section-six ============================*/
		#about .section-six .content {
		    top: 15px;
		}
		#about .section-six h1 {
		    font-size: 34px;
		    margin-bottom: 0px;
		}
		#about .section-six .paragraph {
		    font-size: 16px;
		    line-height: 24px;
		}
		#about .section-six ul {
		    margin-left: 50px;
		}
		#about .section-six .box-right ul {
		    margin-left: 140px;
		}
		#about .section-six .box-right {
		    width: 100%;
		    top: 0px;
		}
		#about .section-six .box-left {
		    padding: 30px 0px 30px var(--pt);
		}
	/*========================= End section-six ============================*/

	/*========================= Start section-seven ============================*/
		#about .section-seven .card:nth-child(1) {
		    padding: 30px 20px;
		    width: 50%;
		    float: left;
		}
		#about .section-seven .card:nth-child(2) {
		    padding: 30px 20px;
		    width: 50%;
		    float: left;
		}
		#about .section-seven .our-mission {
		    padding: 62px 20px;
		}
		#about .section-seven .our-mission img{
			display: block;
			margin: auto;
		}
		#about .section-seven .our-mission h1 {
		    margin-bottom: 30px;
		}
		#about .section-seven .our-mission h1,#about .section-seven .our-mission p {
		    text-align: center;
		}
		#about .section-seven p.paragraph {
		    font-size: 16px;
		}
		#about .section-seven .our-mission .box-circle-two {
		    left: 10px;
		    top: 93%;
		}
		#about .section-seven .custom-heigth {
		    margin-bottom: 30px!important;
		}
	/*========================= End section-seven ============================*/

	/*========================= Start section-ten ============================*/
		#about .section-ten {
		    padding-right: 0px;
		}
		#about .section-ten ul li:before {
		    top: -45px;
		    left: -40px;
		    font-size: 150px;
		}
		#about .section-ten .box-content .box-right:nth-child(1),
		#about .section-ten .box-content .box-right:nth-child(4),
		#about .section-ten .box-content .box-right:nth-child(6) {
		     padding: 0px 15px 20px 30px;
		}
		#about .section-ten .box-content .box-right:nth-child(2),
		#about .section-ten .box-content .box-right:nth-child(3),
		#about .section-ten .box-content .box-right:nth-child(5),
		#about .section-ten .box-content .box-right:nth-child(7),
		#about .section-ten .box-content .box-right:nth-child(8),
		#about .section-ten .box-content .box-right:nth-child(9),
		#about .section-ten .box-content .box-right:nth-child(10){
			padding: 0px 15px 20px 35px;
		}
		#about .section-ten .box-content .box-left:nth-child(1) {
		    padding: 30px 30px 30px var(--pt);
		}
		#about .section-ten .box-content .box-left:nth-child(2) {
		    padding: 30px 30px 30px var(--pt);
		}
		#about .section-ten .box-bg-p .box-left:nth-child(1),
		#about .section-ten .box-bg-p .box-left:nth-child(2),
		#about .section-ten .box-bg-p .box-left:nth-child(3),
		#about .section-ten .box-bg-p .box-left:nth-child(4),
		#about .section-ten .box-bg-p .box-left:nth-child(5),
		#about .section-ten .box-bg-p .box-left:nth-child(6){
		    padding: 30px 30px 20px 45px;
		}

	/*========================= End section-ten ============================*/

	/*========================= Start section-eleven ============================*/
		#about .section-eleven .row-custom [class*="col-"] {
		    float: left;
		    display: block;
		    vertical-align: unset;
		}
		#about .section-eleven {
		    padding: 80px 20px 80px 20px;
		}
		#about .section-eleven .box-card-left h1 {
		    font-size: 36px;
    		line-height: 24px;
		}
		#about .section-eleven .box-card-center {
		    padding-left: 0px;
		    padding-right: 0px;
		}
		#about .section-eleven .box-card-right-content p {
		    margin-top: 30px;
		    margin-bottom: 30px;
		}
		#about .section-eleven .box-card-left {
		    padding-right: 0px;
		}
		#about .section-eleven .box-card-left p {
		    margin-top: 30px;
		}
		#about .section-eleven .box-card-right {
		    height: 50px;
		}

	/*========================= End section-eleven ============================*/

	/*========================= Start section-twelve ============================*/
		#about .section-twelve .box-right-aria {
		    padding: 30px 30px 0px 30px;
		}
		#about .section-twelve .box-right-content h1 {
		    font-size: 24px;
		    line-height: 24px;
		}
		#about .section-twelve .box-content-aria-custom {
		    padding: 50px 30px 0px 30px;
		}
		#about .section-twelve .box-right-img-center {
		    display: none;
		}
		#about .section-twelve .box-circle-two {
		    top: -15px;
		}
	/*========================= End section-twelve ============================*/
}
@media only screen and (max-width: 767px) {
	/*========================= Start setting ============================*/
		body {
			--pt:0px;
			--ptleft:15px;
			--ptright:15px;
		}
		#about{
			padding: 0px 15px;
			background-color: var(--bggreen);
		}
		#about h1 {
		    font-family: unset;
		    line-height: 24px;
		    font-size: 32px;
		}
		
		#about .paragraph{
			font-size: 18px;
	    	line-height: inherit;
		}
		#about .d-mobile-none{
			display: none!important;
		}
		#about .d-mobile-show{
			display: block;
		}
		#about .row-custom {
		    display: table;
		}
		#about .row-custom [class*="col-"] {
		    float: unset;
		    display: block;
		    vertical-align: unset;
		}
	/*========================= End setting ============================*/

	/*========================= Start section-two ============================*/
		#about .section-two .ab-img {
		    height: auto;
		}
		#about .section-two figure button[name="play"] {
		    width: 80px;
		    height: 80px;
		}
		#about .section-two figure button[name="play"]::after {
		    top: 3px;
		    left: 6px;
		    border-width: 23px 0 23px 33px;
		}
	/*========================= End section-two ============================*/

	/*========================= Start section-four ============================*/
		#about .section-four .box-content-left {
		    padding: 0px;
		}
		/*#about .section-four .box-content-right img {
		    margin-top: 30px;
		    margin-bottom: 30px;
		}*/
		#about .section-four .box-circle div {
		    width: 15px;
		    height: 15px;
		    margin: 0px 0px 10px 0px;
		}
		#about .section-four .box-circle-two {
		    top: 100%;
		}
		#about .section-four .box-circle-two td div {
		    width: 15px;
		    height: 15px;
		    margin-left: 10px;
		    margin-bottom: 10px;
		}
		#about .section-four .box-content-header {
		    margin-bottom: 0px;
		}
		#about .section-four .box-content-right {
		    padding: 30px 0px 30px 0px;
		}
	/*========================= End section-four ============================*/

	/*========================= Start section-five ============================*/
		#about .section-five .box-left {
		    padding: 15px 15px 15px 15px;
		}
		#about .section-five h1 {
			margin-top: 30px;
		    margin-bottom: 30px;
		}
		#about .section-five .paragraph {
		    margin-bottom: 15px;
		}
		#about .section-five .box-left img {
		    margin-top: 30px;
		    margin-left: auto;
		    margin-right: auto;
		    display: block;
		}
		#about .section-five .box-right {
		    padding: 15px 15px 15px 15px;
		}
		#about .section-five .box-right img {
		    margin-bottom: 30px;
		}
		#about .section-five {
		    padding-bottom: 0px;
		}
	/*========================= End section-five ============================*/

	/*========================= Start section-six ============================*/
		#about .section-six .box-left,#about .section-six .box-right {
		    padding-left: 15px;
   			margin-top: -20px;
		}
		#about .section-six .box-left ul li:nth-child(1):before, 
		#about .section-six .box-right ul li:nth-child(1):before {
		    display: none;
		}
		#about .section-six h1 {
		    font-size: 44px;
		    margin-bottom: 30px;
		    text-align: left;
		    line-height: 44px;
		}
		#about .section-six .box-right {
		    display: block;
		    width: auto;
		    top: unset;
		    position: unset;
		    right: unset;
		}
	/*========================= End section-six ============================*/		

	/*========================= Start section-seven ============================*/
		#about .section-seven .card:nth-child(1) {
		    padding: 33px 15px 0px 15px;
		}
		#about .section-seven .card:nth-child(2) {
		    padding: 33px 15px 30px 15px;
		}
		#about .section-seven .our-mission h1 {
		    margin-bottom: 30px;
		}
		#about .section-seven .our-mission {
		    padding: 30px 15px;
		    position: unset;
		}
		#about .section-seven .our-mission .box-circle-two {
		    top: 81%;
		}
		#about .section-seven .custom-heigth {
		    margin-bottom: 0px!important;
		}
	/*========================= End section-seven ============================*/

	/*========================= Start section-eight ============================*/
		#about .section-eight {
		    height: 50px;
		}
		#about .section-eight .box-circle-two td:nth-child(1) div {
		    margin-left: 15px;
		}
		#about .section-eight .box-circle-two td div {
		    width: 15px;
		    height: 15px;
		    background-color: var(--bggreen);
		    border-radius: 50%;
		    margin-left: 13px;
		    margin-bottom: 0px;
		}
		#about .section-eight .box-circle-two {
		    top: 36%;
		}
	/*========================= End section-eight ============================*/

	/*========================= Start section-nine ============================*/
		#about .section-nine {
		    padding-bottom: 30px;
		}
	/*========================= End section-nine ============================*/

	/*========================= Start section-ten ============================*/
		#about .section-ten {
		    padding-right: 0px;
		    background-color: #fff;
		}
		#about .section-ten .box-content .box-left:nth-child(1) {
		    padding: 0px 15px 15px 15px;
		}
		#about .section-ten ul li:before {
		    display: none;
		}
		#about .section-ten .box-content .box-left:nth-child(2) {
		    padding: 30px 15px 15px 15px;
		}
		#about .section-ten .box-content .box-bg-p .box-left:nth-child(2) {
		    padding: 0px 15px 15px 15px;
		}
		#about .section-ten .box-bg-p {
		    margin-top: 30px;
		}
		#about .section-ten .box-bg-p-cus {
		    padding-left: 15px;
		    padding-right: 15px;
		}
		#about .section-ten-child .box-bg-p .box-left:nth-child(1) {
		    padding: 0px 15px 0px 0px;
		}
		#about .section-ten .box-bg-p .box-left:nth-child(2),
		#about .section-ten .box-bg-p .box-left:nth-child(3),
		#about .section-ten .box-bg-p .box-left:nth-child(4),
		#about .section-ten .box-bg-p .box-left:nth-child(5),
		#about .section-ten .box-bg-p .box-left:nth-child(6) {
		    padding: 0px 15px 15px 15px;
		}

		#about .section-ten .box-content .box-right:nth-child(1),
		#about .section-ten .box-content .box-right:nth-child(2),
		#about .section-ten .box-content .box-right:nth-child(3),
		#about .section-ten .box-content .box-right:nth-child(5),
		#about .section-ten .box-content .box-right:nth-child(7),
		#about .section-ten .box-content .box-right:nth-child(8),
		#about .section-ten .box-content .box-right:nth-child(9),
		#about .section-ten .box-content .box-right:nth-child(10) {
		    padding: 0px 15px 15px var(--ptright);
		}

		#about .section-ten .box-content .box-right:nth-child(1),
		#about .section-ten .box-content .box-right:nth-child(4),
		#about .section-ten .box-content .box-right:nth-child(6) {
		    padding: 0px 15px 40px var(--ptright);
		}

	/*========================= End section-ten ============================*/

	/*========================= Start section-eleven ============================*/
		#about .section-eleven {
		    padding: 30px 0px 15px 0px;
		}
		#about .section-eleven .box-card-left h1 {
		    font-size: 52px;
		    line-height: 40px;
		}
		#about .section-eleven .box-card-left p {
		    margin-top: 30px;
		}
		#about .section-eleven .box-card-left {
		    padding-right: 0px;
		}
		#about .section-eleven .box-card-center {
		    padding-left: 0px;
		    padding-right: 0px;
		}
		#about .section-eleven .box-card-right {
		    height: 30px;
		}
		#about .section-eleven .box-circle-two td div {
		    width: 15px;
		    height: 15px;
		}
		#about .section-eleven .box-card-right-content {
		    margin-left: 0px;
		}
		#about .section-eleven .box-card-right-content p {
		    margin-top: 30px;
		    margin-bottom: 30px;
		}
	/*========================= End section-eleven ============================*/

	/*========================= Start section-twelve ============================*/
		#about .section-twelve .box-right-aria {
		    padding: 30px 0px 0px 0px;
		}
		#about .section-twelve .box-right-img-center {
		    display: none;
		}
		#about .section-twelve .box-content-aria-custom {
		    padding: 30px 0px 0px 0px;
		}
		#about .section-twelve .box-circle-two td div {
		    width: 15px;
		    height: 15px;
		    margin-top: 10px;
		}
	/*========================= End section-twelve ============================*/
}
@media only screen and (max-width: 540px) {
	/*Surface Duo*/
	/*========================= Start section-six ============================*/  
		#about .section-six img{
			width: 100%;
    		height: 60vh;
		}
		#about .section-six .box-left, #about .section-six .box-right {
		    margin-top: 0px;
    		padding-right: 15px;
    		padding-bottom: 0px;
    		padding-top: 0px;
		}
	/*========================= End section-six ============================*/  
}
@media only screen and (max-width: 414px) {
	/*Iphone 6/7/8 plus*/
	/*========================= Start section-six ============================*/ 
		#about .section-six img {
		    height: auto;
		} 
		#about .section-six .box-left, #about .section-six .box-right {
		    margin-top: 120px;
		    padding-right: 35px;
		    padding-bottom: 0px;
		    padding-top: 0px;
		}
	/*========================= End section-six ============================*/  
}
@media only screen and (max-width: 411px) {
	/*Pixel 2*/
	/*========================= Start section-six ============================*/  
		#about .section-six img {
		    height: auto;
		}
		#about .section-six .box-left, #about .section-six .box-right {
			margin-top: 0px;
    		padding-right: 35px;
    		padding-bottom: 0px;
    		padding-top: 90px;
		}
	/*========================= End section-six ============================*/  
}
@media only screen and (max-width: 375px) {
	/*
	Iphone 6/7/8
	Iphone X
	*/
	/*========================= Start section-six ============================*/  
		#about .section-six img {
		    height: auto;
		}
		#about .section-six .box-left, #about .section-six .box-right {
		    padding-right: 10px;
		    margin-top: 90px;
		    padding-top: 0px;
		}
	/*========================= End section-six ============================*/  
}
@media only screen and (max-width: 360px) {
	/*Moto G4*/
	/*========================= Start section-six ============================*/  
		#about .section-six img {
		    height: auto;
		}
		#about .section-six .box-left, #about .section-six .box-right {
		    margin-top: 0px;
		    padding-right: 15px;
		    padding-bottom: 0px;
		    padding-top: 0px;
		}
	/*========================= End section-six ============================*/  
}
@media only screen and (max-width: 320px) {
	/*Iphone5/se*/
	/*========================= Start Setting ============================*/  
		#about h1 {
		    font-family: unset;
		    line-height: 16px;
		    font-size: 24px;
		}
		#about .paragraph {
		    font-size: 14px;
		    line-height: inherit;
		}
	/*========================= End Setting ============================*/  

	/*========================= Start section-six ============================*/
		#about .section-six img {
		    height: auto;
		}  
		#about .section-six .box-left, #about .section-six .box-right {
		    margin-top: 0px;
		    padding-right: 10px;
		    padding-bottom: 0px;
		    padding-top: 0px;
		}
	/*========================= End section-six ============================*/  

	/*========================= Start section-seven ============================*/  
		#about .section-seven .our-mission .box-circle-two {
		    top: 79%;
		    left: 15px;
		}
	/*========================= End section-seven ============================*/  

	/*========================= Start section-eleven ============================*/  
	#about .section-eleven .box-card-left h1 {
	    font-size: 48px;
	    line-height: 38px;
	}
	/*========================= End section-eleven ============================*/  

	/*========================= Start section-twelve ============================*/  
	#about .section-twelve .box-right-content h1 {
	    font-size: 18px;
	    line-height: 0px;
	}
	/*========================= End section-twelve ============================*/  
}
@media only screen and (max-width: 280px) {
	/*Galaxy Fold*/
	/*========================= Start Setting ============================*/  
		#about h1 {
		    line-height: 16px;
		    font-size: 24px!important;
		}
		#about .paragraph {
		    font-size: 11px!important;
		    line-height: 18px!important;
		}
	/*========================= End Setting ============================*/  

	/*========================= Start section-six ============================*/ 
		#about .section-six img {
		    height: auto;
		} 
		#about .section-six .box-left, #about .section-six .box-right {
		    margin-top: 0px;
		    padding-right: 10px;
		    padding-bottom: 0px;
		    padding-top: 120px;
		}
	/*========================= End section-six ============================*/  

	/*========================= Start section-seven ============================*/  
		#about .section-seven .our-mission .box-circle-two {
		    top: 82%;
		}
		#about .section-seven .our-mission .box-circle-two td div {
		    width: 20px;
		    height: 20px;
		    margin-left: 8px;
		    margin-bottom: 8px;
		}
	/*========================= End section-seven ============================*/  

	/*========================= Start section-eleven ============================*/  
		#about .section-eleven .box-card-left h1 {
		    font-size: 48px;
		    line-height: 18px;
		}
	/*========================= End section-eleven ============================*/  
}
</style>
@endsection
@section('content')
<div id="about">
	<div class="section-one">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="box-content">
						<div class="box-content-header">
							<img src="/assets/custom/images/aboutus/desktop/logo.webp" width="120" height="71" class="logo" alt="logo thaipolyester" loading="lazy">
						</div>
						<div class="box-content-aria">
							<p class="paragraph">Thai Polyester limited company (TPC) is recognized as a leading polyester yarn manufacturer in Thailand. The company has proficiently provided wide rank of fiber and yarn products such as POY, FDY, DTY, staple fiber and spun yarn in raw white, mélange, dope dyed and yarn dyed, especially for textile application to respond to customer in different industry.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-two">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6 p-0">
					<picture>
						<source srcset="/assets/custom/images/aboutus/mobile/about-us.webp" alt="about us thaipolyester" loading="lazy" media="(max-width: 640px)">
						<img src="/assets/custom/images/aboutus/desktop/about-us.webp" width="900" height="350" class="img-fluid ab-img" alt="about us thaipolyester" loading="lazy">
			        </picture>
				</div>
				<div class="col-md-6 col-sm-6 p-0">
					<div class="banner">
						@if($m==0)
						<video muted loop id="video" poster="/assets/custom/images/aboutus/desktop/VDO.webp">
						@else
						<video muted loop id="video" poster="/assets/custom/images/aboutus/mobile/VDO.webp">
						@endif
				            <source src="/assets/custom/images/aboutus/รวม.mp4" type="video/mp4">
				        </video>
				        <div class="content">
							<figure>
								<button class="button" id="btn-video" name="play"></button>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-three">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="box-content">
						<div class="box-content-aria">
							<p class="paragraph text-align-justify">This leads the company into the expert polyester<br>filament yarn manufacturer, polyester staple fiber producer, polyester spun yarn manufacturer, polyester twist yarn supplier and dope dyed polyester yarn manufacturer</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-four">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 p-0">
					<div class="box-content-left">
						<img src="/assets/custom/images/aboutus/desktop/recycled_polyester_yarn.webp" width="510" height="669" class="img-fluid" alt="recycled polyester yarn thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-md-6 p-0">
					<div class="box-content-right">
						<div class="box-content-aria">
							<div class="box-content-header">
								<h1>Recycled</h1>
								<h1>Polyester Yarn</h1>
								<div class="box-circle">
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
						</div>
						<p class="paragraph text-align-justify">TPC is also well known as a recycled polyester yarn supplier, with our products, both fiber and filament. The company has developed new product line called “EcoTPC” which is Thai sustainable brand. It is originated from regenerated PET bottle, fabric and yarn waste into polyester yarn. All of the products are certified by GRS. Therefore, the customers can trace back on our recycled yarn and fiber that compose of 100% post & pre-consumer depending on customer requirement.</p>
					</div>
					<div class="box-circle-two">
						<table>
							<tr>
								<td><div></div></td>
								<td><div></div></td>
							</tr>
							<tr>
								<td><div></div></td>
								<td><div></div></td>
							</tr>
							<tr>
								<td><div></div></td>
								<td><div></div></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-five">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 p-0">
					<div class="box-left">
						<h1>Certificates</h1>
						<p class="paragraph text-align-justify">The company supplies the customers worldwide, including knitting, weaving and garment factories in America, Europe, Asia Pacific, Asia and Southeast Asia and Africa.</p>
						<p class="paragraph text-align-justify">TPC’s products  are also certified the international standard certificates, ISO 9001:2015 and STANDARD 100 by OEKO-TEX® quality control,</p>
						<img src="/assets/custom/images/aboutus/desktop/oeko-tex.webp" width="400" height="149" class="img-fluid oeko-tex" alt="oeko tex thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-md-6 p-0">
					<div class="box-right">
						<img src="/assets/custom/images/aboutus/desktop/img-middle-certificates.webp" width="204" height="760" class="img-fluid img-backgrount-center d-mobile-none" alt="img middle certificates thaipolyester" loading="lazy">
						<div class="backgrount-center d-mobile-none"></div>
						<img src="/assets/custom/images/aboutus/desktop/ISO-9001-Intertek-768x529.webp" width="180" height="123" class="img-fluid" alt="ISO 9001 Intertek thaipolyester" loading="lazy">
						<p class="paragraph text-align-justify">The results of the inspection carried out according to Oeko-Tex® Standard 100, product class I for baby articles, have shown that these products comply with the human-ecological requirements of the currently established standard.</p>
						<p class="paragraph text-align-justify">The company developed products greatly and became the top polyester yarn supplier for our customers from all around the world.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-six">
		<picture>
			<source srcset="/assets/custom/images/aboutus/mobile/oss-mobile.webp" media="(max-width: 767px)">
			<source srcset="/assets/custom/images/aboutus/desktop/oss-1024.webp" media="(max-width: 1024px)">
			<source srcset="/assets/custom/images/aboutus/desktop/oss-1600.webp" media="(max-width: 1600px)">
			<img src="/assets/custom/images/aboutus/desktop/oss-1920.webp" width="1920" height="1036" class="img-fluid circle" alt="One Stop Service" loading="lazy">
        </picture>
	    <div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 p-0">
						<div class="box-left">
							<ul class="round">
								<li>
									<h1 class="text-align-justify">One Stop Service</h1>
								</li>
								<li>
									<p class="paragraph text-align-justify">With long experience, the company has gained the confident from both local and global consumers. This is because TPC is one stop service polyester yarn and fiber manufacturer with total capacity 317,450 tons annually. The capacity is divided into 200,750 tons of virgin products and 116,700 tons of recycled yarns and fiber.</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 p-0">
						<div class="box-right">
							<ul class="round">
								<li>
									<p class="paragraph text-align-justify">Furthermore, our manufactory is</p>
								</li>
								<li>
									<p class="paragraph text-align-justify">landed on 800 Acres (3.2 Million Sq.m), situated at Ban Bung district, Chonburi province, 50 km away from Laem Chabang, Thailand main port. This is very convenient for our export customers.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-seven">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12 p-0">
					<div class="card">
						<img src="/assets/custom/images/aboutus/desktop/our-mission-1.webp" width="116" height="116" class="img-fluid circle" alt="Offer High Quality And Best One Stop Service thaipolyester" loading="lazy">
						<ul>
							<li>
								<p class="paragraph">Offer High Quality And Best One Stop Service</p>
							</li>
							<li>
								<p class="paragraph text-align-justify">We are polyester yarn and fiber manufacturer with high quality products and provide the best one stop service. The company supplies variety products from Fiber to yarn, from virgin to recycle. The customer’s satisfaction is the company’s first priority goal.</p>
							</li>
						</ul>
					</div>
					<div class="card">
						<img src="/assets/custom/images/aboutus/desktop/our-mission-2.webp" width="116" height="116" class="img-fluid circle" alt="Serve Customers with Innovative Product thaipolyester" loading="lazy">
						<ul>
							<li>
								<p class="paragraph">Serve Customers with Innovative Product</p>
							</li>
							<li>
								<p class="paragraph text-align-justify">We emphasize on our products through research and development by using up-to-date technology in all production process in order to serve international consumers.</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 p-0">
					<div class="our-mission">
						<h1>Our Mission</h1>
						<p class="paragraph text-align-justify">To meet our mission, we determined to provide</p>
						<img src="/assets/custom/images/aboutus/desktop/our-mission-5.webp" width="634" height="947" class="img-fluid" alt="Our Mission thaipolyester" loading="lazy">
						<div class="box-circle-two">
							<table>
								<tbody>
									<tr>
										<td><div></div></td>
										<td><div></div></td>
									</tr>
									<tr>
										<td><div></div></td>
										<td><div></div></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 p-0">
					<div class="card">
						<img src="/assets/custom/images/aboutus/desktop/our-mission-3.webp" width="116" height="116" class="img-fluid circle" alt="Give Quick Response to Customer Requirement thaipolyester" loading="lazy">
						<ul>
							<li>
								<p class="paragraph">Give Quick Response to Customer Requirement</p>
							</li>
							<li>
								<p class="paragraph text-align-justify custom-heigth">The most important thing in providing excellent customer service is to respond promptly and understanding to the customer’s requirement.</p>
							</li>
						</ul>
					</div>
					<div class="card">
						<img src="/assets/custom/images/aboutus/desktop/our-mission-4.webp" width="116" height="116" class="img-fluid circle" alt="Provide Yarns with Competitive Price thaipolyester" loading="lazy">
						<ul>
							<li>
								<p class="paragraph">Provide Yarns with Competitive Price</p>
							</li>
							<li>
								<p class="paragraph text-align-justify">Due to the high competition in global market, we offer high quality yarns with reasonable prices. This is because we are one of the biggest vertical polyester yarn and fiber suppliers in Thailand.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-eight">
		<div class="box-circle-two">
			<table>
				<tbody>
					<tr>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="section-nine">
		<picture>
			<source srcset="/assets/custom/images/aboutus/mobile/what-we-do.webp" alt="" loading="lazy" media="(max-width: 767px)">
			<img src="/assets/custom/images/aboutus/desktop/what-we-do-1920.webp" width="1920" height="399" class="img-fluid circle" alt="what we do banner thaipolyester" loading="lazy">
        </picture>
	</div>
	<div class="section-ten">
		<div class="container-fluid">
			<div class="row row-custom">
				<div class="col-md-6 p-0 bg-white">
					<div class="box-content">
						<div class="box-left">
							<ul class="round">
								<li>
									<p class="paragraph text-align-justify"><b>Polyester Staple Fiber (PSF)</b> is made directly from PTA & MEG through Spinning and Fiber line process.  PSF is used for spinning process of Spun Yarns such as Ring Spun and Open End. There are two mainly spec of PSF; 1.2 Denier for general requirement and 1.0 Denier for special product which require high level of softener and durability.</p>
								</li>
							</ul>
						</div>
						<div class="box-left bg-black">
							<ul class="round">
								<li>
									<p class="paragraph text-align-justify"><b>Fully Drawn Yarn (FDY)</b> is produced by a process similar to POY manufacturing .The yarn is produced at higher spinning speeds coupled with intermediate drawing integrated in the process itself. FDY can be knitted or woven with any other filament yarn to get fabric of various different varieties. For industrial applications requiring uniformity and consistent tenacity, elongation, and shrinkage.</p>
								</li>
							</ul>
						</div>
						<div class="box-bg-p box-bg-p-cus">
							<div class="row row-custom">
								<div class="col-md-1 p-0 bg-black d-mobile-none"></div>
								<div class="col-md-12 p-0">
									<div class="box-left">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify"><b>Monofilament</b> is also known as single polyester yarns, mother yarn for splitting. This type of product is made from FDY. Due to TPC is vertical polyester yarn manufacture, the quality of Monofilament is controlled since FDY process.  There are only 2 Deniers; 20/1 and 30/1. Mono filament yarns provide soft touch and good physical properties.</p>
											</li>
										</ul>
									</div>
									<div class="box-left">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify"><b>Ring spun</b> is made by twisting and thinning the polyester strands to make a very fine, strong, soft rope of polyester fibers.</p>
											</li>
										</ul>
									</div>
									<div class="box-left">
										<img src="/assets/custom/images/aboutus/desktop/recycled-products.webp" width="721" height="322" class="img-fluid circle" alt="Recycled products with GRS certificate thaipolyester" loading="lazy">
									</div>
									<div class="box-left">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify"><b>Recycled products with GRS certificate</b> our Recycled products come from 2 sources which are PET post consumer bottle and fabrics waste & yarn. It depends on customer requirement. Our products are guaranteed by the Global Recycle Standard (GRS) was originally developed by Control Union Certifications</p>
											</li>
										</ul>
									</div>
									<div class="box-left">
										<img src="/assets/custom/images/aboutus/desktop/dope-dyed-black-yarn.webp" width="892" height="266" class="img-fluid circle" alt="Dope Dyed Black yarn thaipolyester" loading="lazy">
									</div>
									<div class="box-left">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify"><b>Dope Dyed Black yarn</b> are created by adding a black masterbatch colorant to the polymer melt in spinning or extrusion This results in fibers and filaments that are fully impregnated with pigment coming out of the spinnerets in a one step process. The strong point of dope dyed black yarn is wet  fastness property and the competitive of price.</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 bg-white">
					<div class="box-content box-content-right">
						<div class="box-bg-p">
							<div class="row row-custom">
								<div class="col-md-12 p-0">
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify"><b>Partially Oriented Yarn (POY)</b> is the first yarn made directly from PTA and MEG by using Spinning and Take-up process and mainly used in texturizing to make textured yarn (DTY)</p>
											</li>
										</ul>
									</div>
									<div class="box-right">
										<img src="/assets/custom/images/aboutus/desktop/what-we-do-1.webp" width="892" height="266" class="img-fluid circle" alt="what we do thaipolyester" loading="lazy">
									</div>
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify"><b>Drawn Textured Yarn (DTY)</b> is textured Yarn product. It is made from POY by texturizing process by Spindle Machine. It is the most used texturing process in the textile industry owing and can be manufactured in various colors, texture creating natural feel, high durability and. retention properties.</p>
											</li>
										</ul>
									</div>
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify"><b>Twist Yarn</b> is the spiral arrangement of the fibers around the axis of the yarn. The twist binds the fibers together and also contributes to the strength of the yarn. The firm produces 2 types of Twist yarn; S Twist or  Left –twist and Z Twist  or Right-twist.</p>
											</li>
										</ul>
									</div>
									<div class="box-right">
										<img src="/assets/custom/images/aboutus/desktop/what-we-do-2.webp" width="887" height="472" class="img-fluid circle" alt="what we do thaipolyester" loading="lazy">
									</div>
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify"><b>Open-end - the fiber sliver</b> is separated into single fibers and in which the separated fiber material is brought by an air stream to a collecting surface from which it is drawn off while being twisted.</p>
											</li>
										</ul>
									</div>
									<div class="box-right">
										<img src="/assets/custom/images/aboutus/desktop/what-we-do-3.webp" width="926" height="599" class="img-fluid circle" alt="what we do thaipolyester" loading="lazy">
									</div>
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify"><b>Dyed yarn</b> is made by dyeing process at the dyeing machine which is made a small order as to the size of the machine.</p>
											</li>
										</ul>
									</div>
									<div class="box-right">
										<img src="/assets/custom/images/aboutus/desktop/what-we-do-4.webp" width="721" height="823" class="img-fluid circle" alt="what we do thaipolyester" loading="lazy">
									</div>
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify"><b>Semi dull</b> is a white and slightly opaque polyester type.</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-eleven">
		<div class="container-fluid">
			<div class="row row-custom">
				<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
					<div class="box-card-left">
						<h1>Leading-</h1>
						<h1>Edge</h1>
						<h1>Process</h1>
						<h1>Technology</h1>
						<p class="paragraph text-align-justify">To enhance the premium quality, an engineering plant of TPC’s production phases has successive through Zimmer AG Germany. Regard to filament and textured yarn is developed with the latest generation of application on German operation, Barmag, take-up. The company always selects the modern and innovative technology equipment from Germany.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="box-card-center">
						<img src="/assets/custom/images/aboutus/desktop/leading-edge-process-technology-1.webp" width="695" height="1345" class="img-fluid circle" alt="leading edge process technology thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="box-card-right-area">
						<div class="box-card-right">
							<div class="box-circle-two">
								<table>
									<tbody>
										<tr>
											<td><div></div></td>
											<td><div></div></td>
											<td><div></div></td>
											<td><div></div></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="box-card-right-content">
							<p class="paragraph">The state-of-art technology ensures us to serve the customers with Top Quality and Reliable Sup</p>
							<img src="/assets/custom/images/aboutus/desktop/leading-edge-process-technology-2.webp" width="382" height="382" class="img-fluid circle" alt="leading edge process technology thaipolyester" loading="lazy">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-twelve">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 p-0">
					<div class="box-content-aria">
						<img src="/assets/custom/images/aboutus/desktop/our-history.webp" width="726" height="797" class="img-fluid circle" alt="Our history thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-md-6">
					<div class="box-right-aria">
						<div class="box-right-content">
							<h1>2001</h1>
							<p class="paragraph text-align-justify">Signed contract with Zimmer AG and Starting construction.</p>
							<hr>
							<h1>2003</h1>
							<p class="paragraph text-align-justify">Start production on 16 June with raw white polyester fiber</p>
							<hr>
							<h1>2005</h1>
							<p class="paragraph text-align-justify">Start fiber line-II , Mono filament , Investment on Honest Logistic Co., Ltd.</p>
							<hr>

							<h1>2006</h1>
							<p class="paragraph text-align-justify">Certified quality system as requirement of ISO9001:2000</p>
							<hr>
							<h1>2007</h1>
							<p class="paragraph text-align-justify">Start new POY Line K , Mono textured , Modified Line H = 8end to 16 end</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 p-0 d-mobile-show">
					<img src="/assets/custom/images/aboutus/desktop/recycled polyester.webp" width="726" height="832" class="img-fluid circle" alt="recycled polyester thaipolyester" loading="lazy">
				</div>
				<div class="col-md-6">
					<div class="box-right-aria">
						<div class="box-right-content">
							<h1>2008</h1>
							<p class="paragraph text-align-justify">Establishment of Modern PET Co., Ltd. To recycle PET bottles to recycled polyester.</p>
							<hr>
							<h1>2009</h1>
							<p class="paragraph text-align-justify">Modified Line G,C,D 8 end to 16 end 2 winder in 1 position , Modified Line K to test produced dope dyed</p>
							<hr>
							<h1>2010</h1>
							<p class="paragraph text-align-justify">Production of R-POY , R-PSF from PET bottle flake</p>
							<hr>

							<h1>2011</h1>
							<p class="paragraph text-align-justify">Production of Dope dyed  Line G  , Investment on  Master  batch compound for launched Dope dyed polyester yarn.</p>
							<hr>
							<h1>2012</h1>
							<p class="paragraph text-align-justify">Start produce recycled polyester Pop corn from In-house polyester waste for recycled produced , Production of Doped dyed PSF.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 p-0 d-mobile-none">
					<img src="/assets/custom/images/aboutus/desktop/recycled polyester.webp" width="726" height="832" class="img-fluid circle" alt="recycled polyester thaipolyester" loading="lazy">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="box-right-img-center">
						<img src="/assets/custom/images/aboutus/desktop/icon-recycle.webp" width="254" height="243" class="img-fluid circle" alt="icon recycle thaipolyester" loading="lazy">
					</div>
				</div>		
				<div class="col-md-6">
					<div class="box-content-aria box-content-aria-custom">
						<img src="/assets/custom/images/aboutus/desktop/ecotpc.webp" width="516" height="565" class="img-fluid circle" alt="eco thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-md-6">
					<div class="box-right-aria">
						<div class="box-right-content">
							<div class="box-circle-two">
								<table>
										<tbody>
											<tr>
												<td><div></div></td>
												<td><div></div></td>
											</tr>
										</tbody>
								</table>
							</div>
							<h1>2013</h1>
							<p class="paragraph text-align-justify">Investment on Biomass steam boiler for saving energy. Expansion production of dope dyed filament.</p>
							<hr>
							<h1>2014</h1>
							<p class="paragraph text-align-justify">Recycled polyester from “Internal Polyester yarn waste</p>
							<hr>
							<h1>2015</h1>
							<p class="paragraph text-align-justify">Recycled polyester from “Internal fabric waste” with The GREEN Project</p>
							<hr>

							<h1>2019</h1>
							<p class="paragraph text-align-justify">Launched a new brand “ ECOTPC ”</p>
							<hr>
							<h1>2021</h1>
							<p class="paragraph text-align-justify">Start new fiber line produce polyester staple fiber 1.0 De</p>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('custom-script')
<script>
	let video = document.getElementById('video');
    document.getElementById('btn-video').addEventListener('click', button_action);
    function button_action() {
        if (video.paused) {
            video.play();
            document.getElementById('btn-video').style.display = 'none';
        } else{
            video.pause();
        }
    };
    jQuery(document).ready(function($){
    	//get width media query
    	// alert($(window).innerWidth())
    	$(window).scroll(function(event){
    		if (!video.paused) {
    			video.pause();
    			document.getElementById('btn-video').style.display = 'block';
    		}
		});
	});
    
</script>
@endsection
