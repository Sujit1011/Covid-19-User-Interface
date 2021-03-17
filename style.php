<style type="text/css">
	
	html
	{
		scroll-behavior: smooth;
	}
	
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: sans-serif;
	}
	
	.nav_style
	{
		background-color: #a29bfe!important;
		
	}
	.nav_style a
	{
		color: white;
	}
	.main_header
	{
		height: 450px;
		width: 100%
	}
	.rightside h1
	{
		font-size: 3rem;	
	}
	.corona_rot img
	{
		animation: hcorona 3s linear infinite;
	}
	
	@keyframe hcorona
	{
		0% {transform: rotate(0);}
		100% {transform: rotate(360deg);}
	}
	
	
	.leftside img
	{
		animation: heartbeat 5s linear infinite;
	}
	
	@keyframes heartbeat
	{
		0%
		{
			transform: scale(.75);
		}
		20%
		{
			transform: scale(1);
		}
		40%
		{
			transform: scale( .75);
		}
		60%
		{
			transform: scale(1);
		}
		80%
		{
			transform: scale( .75);
		}
		100%
		{
			transform: scale( .75);
		}
	}
	
	.corona_update
	{
		margin: 0 0 30px 0;
	}
	
	.corona_update h3
	{
		color: #ff7675;
	}
	
	.corona_update h1
	{
		font-size: 2rem;
		text-align: center;
	}
	


	.sub_section
	{
		background-color: #fbfafd;
	}
	
	
	.footer_style
	{
		background-color: #a29bfe;
		height: 50px;
		padding: 15px;
		
	}
	.footer_style p
	{
		margin-bottom: 0px;
	}
	
/*
	.back-to-top {
	  position: fixed;
	  display: none;
	  background: #3EC1D5;
	  color: #fff;
	  padding: 6px 12px 9px 12px;
	  font-size: 16px;
	  border-radius: 2px;
	  right: 15px;
	  bottom: 15px;
	  transition: background 0.5s;
	}
*/

/*
	@media (max-width: 768px) {
	  .back-to-top {
		bottom: 15px;
	  }
	}

	.back-to-top:focus {
	  background: #3EC1D5;
	  color: #fff;
	  outline: none;
	}

	.back-to-top:hover {
	  background: #3cd6ed;
	  color: #fff;
	}
*/
	
	


</style>