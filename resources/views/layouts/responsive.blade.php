<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <style>
			a {color: #007FA3;}
			.apply {padding-top: 10px;}
		    .info {padding-bottom: 10px;}
			.img-center {display: none;}
			.small_message > a {color: #660000;}
		    .social {padding-bottom: 10px;}
		    .social > a > img {padding: 0px 5px 0px 5px;}
			table {margin: auto;}

        	body {
        		font-family: "Helvetica", "Arial", "Lucida Grande", sans-serif;
        		margin: 0;
        		background-color: #CCCCCC;
        	}

		    .wrapper {
		        display: grid;
		        margin: auto;
		    }

		    .small_message {
		    	text-align: center;
		    	color:#777777;
		    	font-size:11px;
				padding: 10px 10px 10px 10px;
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
		    	padding: 10px 10px 10px 10px;
		    }

		    .footer .wrapper {
		    	color: #FFFFFF;
		    	text-align: center;
		    }

            .img-right {
                max-width: 350px;
				display: none;
            }

        	@media only screen and (min-width: 486px) {
			    .wrapper {max-width: 750px;}

			    .signature {
			    	grid-row: 2;
			    }

			    .apply {
			    	grid-column: auto;
			    	grid-row: 2;
                    margin-left: auto;
			    }

                .sig .wrapper {
                    display: grid;
                    grid-template-columns: 50% 50%;
                }

			    .footer {
			    	background: #000000;
			    	padding: 20px 20px 20px 20px;
			    }

			    .info {
			    	grid-column: 1;
			    	grid-row: auto;
			    	text-align: left;
			    }

			    .social {
			    	grid-column: 2;
			    	grid-row:auto;
			    	margin-top:auto;
			    	margin-bottom:auto;
			    }

			    .social > a > img {
		    		padding-left: 5px;
		    		padding-right: 5px;
			    }

			    .logo {
			    	grid-column: 3;
			    	grid-row:auto;
			    	text-align:right;
			    }

				.img-center {
                    max-width: 700px;
                    height: auto;
                    display: block;
                    margin: auto;
                    padding-right: 10px;
                    padding-top: 10px;
                }

                .img-right {
                    float: right;
					display: block;
		    		padding: 0px 0px 10px 10px;
                }
        	}
        </style>
    </head>
	<body>
		<div class="wrapper">
			<div class="small_message">
				Having trouble viewing this email? <a href="%%view_email_url%%">View it in your browser.</a>
			</div>

			<div class="header">
                <div style="background-color:#660000;">
                    <!--[if gte mso 9]>
                    <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                    <v:fill type="tile" src="https://cdn01.its.msstate.edu/i/basedrupal/1.0.5/img/background/bg_header.jpg" color="#660000"/>
                    </v:background>
                    <![endif]-->
                    <table height="100%" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td valign="top" background="https://cdn01.its.msstate.edu/i/basedrupal/1.0.5/img/background/bg_header.jpg">
                                <img alt="Mississippi State University" src="/slate/img/{{$program}}.png" style="height:auto; width:100%; max-width: 617px; min-height: 58px; min-width:320px;" />
                            </td>
                        </tr>
                    </table>
                </div>
			</div>

			<div class="content">
				@yield('content')

				<div class="sig">
					<div class="wrapper">
						<div class="signature">
							@yield('signature')
						</div>

						<div class="apply">
							@yield('apply')
						</div>
					</div>
				</div>
			</div>

			<div class="footer">
				<div class="wrapper">
					<div class="info">
						<b>*|USER:COMPANY|*</b><br/>*|USER:ADDRESS|*
					</div>

					<div class="social">
						<a href="https://www.facebook.com/Distance.Education.MSU" target="_blank">
	                    <img src="http://distance.msstate.edu/images/global/social/facebook.png" /></a>

	                    <a href="https://twitter.com/MSStateDistance" target="_blank">
	                    <img src="http://distance.msstate.edu/images/global/social/twitter.png" /></a>

	                    <a href="https://instagram.com/msstatedistance/" target="_blank">
	                    <img src="http://distance.msstate.edu/images/global/social/instagram.png" /></a>

	                    <a href="http://www.linkedin.com/company/mississippi-state-university-center-for-distance-education?trk=company_name" target="_blank">
	                    <img src="http://distance.msstate.edu/images/global/social/linkedIn.png" /></a>
					</div>

					<div class="logo">
						<img src="http://distance.msstate.edu/images/distance/distance@StateStacked.png" width="125" height="70"/>
					</div>
				</div>
			</div>

            <div class="small_message">
                Not interested anymore? <a href="*|UNSUB|*">Unsubscribe</a>.<br/>
                You are receiving this because you signed up at <a href="https://msstate.edu/">msstate.edu</a> or with one of our education partners.
            </div>
		</div>
    </body>
</html>