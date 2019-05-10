<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
        <title>@yield('title')</title>
        <style>
			a {color: #007FA3;}
			.apply {padding-top: 10px;}
		    .info {padding-bottom: 10px;}
			.img-center {display: none;}
			.small_message > a {color: #660000;}
		    .social {padding-bottom: 10px;}
		    .social > a > img {padding: 0px 5px 0px 5px;}
			.wrapper {margin: auto;}

			table, tbody, tr, td {
				padding:0; margin:0;border-collapse: collapse;
				width: 100%;
			}

        	body {
        		font-family: "Helvetica", "Arial", "Lucida Grande", sans-serif;
        		margin: 0;
        		background-color: #CCCCCC;
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
				color: #FFFFFF;
		    	padding: 20px 20px 20px 20px;
				text-align: center;
		    }

            .img-right {
                max-width: 350px;
				display: none;
            }

			.divider {
				width: 100%;
				display: block;
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

        	@media only screen and (min-width: 500px) {
				.divider {display:table-cell;}
				.divider_footer {display:table-cell;width:33.3%;}
				.info {text-align: left;}
				.logo {text-align:right;}
				.wrapper {max-width: 750px;}

			    .social {
			    	margin-top:auto;
			    	margin-bottom:auto;
			    }

				.img-center {
                    max-width: 700px;
                    height: auto;
                    display: block;
                    margin: auto;
                    padding-right: 10px;
                    padding-top: 10px;
                }
        	}
        </style>
    </head>
	<body style='background-color:#CCCCCC'>
		<div class="wrapper">
			<div class="small_message">
				Having trouble viewing this email? <a href="*|ARCHIVE|*">View it in your browser.</a>
			</div>

			<div class="header">
                <div style="background-color:#660000;">
					<img alt="Mississippi State University" src="https://goto.msstate.edu/www/images/Distance/{{$program}}_header.png" style="height:auto; width:100%; min-height: 58px; min-width:320px;" />
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
							<b>*|USER:COMPANY|*</b><br/>*|USER:ADDRESS|*
						</td>
						<td class="divider_footer social">
							<a href="https://www.facebook.com/Distance.Education.MSU" target="_blank">
							<img src="http://distance.msstate.edu/images/global/social/facebook.png" /></a>

							<a href="https://twitter.com/MSStateDistance" target="_blank">
							<img src="http://distance.msstate.edu/images/global/social/twitter.png" /></a>

							<a href="https://instagram.com/msstatedistance/" target="_blank">
							<img src="http://distance.msstate.edu/images/global/social/instagram.png" /></a>

							<a href="http://www.linkedin.com/company/mississippi-state-university-center-for-distance-education?trk=company_name" target="_blank">
							<img src="http://distance.msstate.edu/images/global/social/linkedIn.png" /></a>
						</td>
						<td class="divider_footer logo">
							<img src="http://distance.msstate.edu/images/distance/distance@StateStacked.png" width="125" height="70"/>
						</td>
					</tr>
				</table>
			</div>

            <div class="small_message">
                Not interested anymore? <a href="*|UNSUB|*">Unsubscribe</a>.<br/>
                You are receiving this because you signed up at <a href="https://msstate.edu/">msstate.edu</a> or with one of our education partners.
            </div>
		</div>
    </body>
</html>