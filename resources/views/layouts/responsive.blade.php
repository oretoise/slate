<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
        <title>@yield('title')</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
			a {color: #007FA3;}
			.apply {padding-top: 10px;}
		    .info {padding-bottom: 10px;}
			.img-center {display: none;}
			.img-right {display: none;}
            .icon {width: 24px; height: 24px;}
			.small_message > a {color: #5D1725;}
		    .social {padding-bottom: 10px;}
		    .social > a > img {padding: 0px 5px 0px 5px;}
			.divider > img {padding: 0px 5px 10px 5px;}
			.wrapper {margin: auto;}
            div {font-family: 'Roboto', Arial, sans-serif;}

			table, tbody, tr, td {
				padding:0; margin:0; border-collapse: collapse;
				width: 100%;
			}

        	body {
        		margin: 0;
        		background-color: #CCCCCC;
        	}

		    .header {
		    	min-height: 58px;
		    	text-align: center;
		    	background-image: url(https://cdn01.its.msstate.edu/i/basedrupal/1.0.5/img/background/bg_header.jpg);
		    }

		    .content {
		    	background: #FFFFFF;
		    	padding:5px 20px 20px 20px;
		    	font-size: 10.0pt;
		    }

		    .footer {
		    	background: #000000;
				color: #FFFFFF;
		    	padding: 20px 20px 20px 20px;
				text-align: center;
		    }

			.divider {
				width: 100%;
				display: block;
				padding-bottom: 5px;
			}

			.divider_footer {
				display: block;
				width: 100%;
			}

			@media only screen and (min-width: 610px) {
				.img-right {
                    float: right;
					display: block;
		    		padding: 0px 0px 10px 10px;
                }
			}

			@media only screen and (min-width: 730px) {
				.img-center {
                    max-width: 700px;
                    height: auto;
                    display: block;
                    margin: auto;
                    padding-right: 10px;
                    padding-top: 10px;
                }
			}

        	@media only screen and (min-width: 500px) {
				.divider {display:table-cell;}
				.divider_footer {display:table-cell;width:33.3%;}
				.info {text-align: left;}
				.logo {text-align:right;}
                .staff {width: auto; padding: 5px 5px 5px 5px;}
				.wrapper {max-width: 750px;}

			    .social {
			    	margin-top:auto;
			    	margin-bottom:auto;
			    }
        	}
        </style>
    </head>
	<body style='background-color:#CCCCCC; padding-top: 20px;'>
		<div class="wrapper">
			<div class="header">
                <div style="background-color:#5D1725;">
					<img alt="Mississippi State University" src="https://goto.msstate.edu/www/images/Distance/headers/{{$program}}_header.png" style="height:auto; width:100%; min-height: 58px; min-width:320px;" />
                </div>
			</div>

			<div class="content">
				@yield('content')

				<table>
					<tr>
						<td class="divider">
							@yield('signature')
						</td>
						<td class="divider">
							@yield('apply')
						</td>
					</tr>
				</table>
			</div>

			<div class="footer">
				<table>
					<tr>
						<td class="divider_footer info">
							<b>Center for Distance Education</b><br/>P.O Box 5247<br/>365 Barr Avenue<br/>Mississippi State, MS 39762
						</td>
						<td class="divider_footer social">
							<a href="https://www.facebook.com/msstateonline/" target="_blank">
							<img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/facebook.svg" /></a>

							<a href="https://twitter.com/msstateonline" target="_blank">
							<img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/twitter.svg" /></a>

							<a href="https://www.instagram.com/mississippistateonline/" target="_blank">
							<img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/instagram.svg" /></a>

							<a href="https://www.linkedin.com/company/mississippi-state-university-center-for-distance-education/" target="_blank">
							<img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/linkedin.svg" /></a>
						</td>
						<td class="divider_footer logo">
							<img src="http://devel.distance.msstate.edu/images/msstate_flipped.png" style="width: 170px;"/>
						</td>
					</tr>
				</table>
			</div>
		</div>
    </body>
</html>