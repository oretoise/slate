<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <style>

        	body { /* These rules apply to all screen sizes. */
        		font-family: "Helvetica", "Arial", "Lucida Grande", sans-serif;
        		margin: 0;
        		background-color: #CCCCCC;
        	}

		    a { /* Links */
		    	color: #660000;
		    }

		    .wrapper { /* Mobile Grid Layout - Single Column */
		        display: grid;
		        margin: auto;
		        grid-template-columns: 100% ;
		    }

		    .trouble_viewing { /* Have trouble viewing this email? */
		    	text-align: center;
		    	color:#777777;
		    	font-size:11px;
		    }

		    .header { /* CDE Logo */
                grid-row: 2;
		    	min-height: 58px;
		    	text-align: center;
		    	background-image: url(https://cdn01.its.msstate.edu/i/basedrupal/1.0.5/img/background/bg_header.jpg);
		    }

		    .content { /* Email body content. */
                grid-row: 3;
		    	background: #FFFFFF;
		    	padding:10px 10px 10px 10px;
		    	font-size: 10.0pt;
		    }

		    .content .wrapper { /* Content Grid */
		    	display: grid;
		    	margin: auto;
		    	grid-template-columns: 100%;
		    	grid-template-rows: auto;
		    	font-size: 10.0pt;
		    }

            .content .wrapper .center > p > a {
                color: #007FA3;
            }

            table {
				margin-left: auto;
				margin-right: auto;
			}

			td {
				font-size: 10.0pt;
			}

            td.bsis {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
            }

            td.grey {
                background-color: #EDEDED;
            }

            .center {
                grid-column: auto;
                grid-row: 1;
            }

            .center .wrapper {
                grid-template-columns: 100%;
                grid-template-rows: auto;
                text-align: center;
            }

		    .left { /* Left side of content grid for email body. */
		    	grid-column: 1;
		    	grid-row: auto;
		    }

		    .right { /* Right side of content grid. Usually an image if present. */
		    	grid-column: 1;
		    	grid-row: auto;
                padding-top: 10px;
		    }

		    .right > p > img { /* Resize right-hand image to fit. */
		    	margin-left:auto;
		    	margin-right:auto ;
		    	display:block;
		    }

        	.signature {
		    	grid-column: 1;
		    	grid-row: 1;
                text-align: center;
		    }

		    .apply {
    			grid-column: 1;
    			grid-row: 2;
    			margin: auto;
    		}

		    /* Footer */
		    .footer {
		    	grid-row: 4;
		    	background: #000000;
		    	padding: 10px 10px 10px 10px;
		    	font-size: 10.0pt;
		    }

		    /* Footer Grid */
		    .footer .wrapper {
		    	display: grid;
		    	grid-template-columns: auto;
		    	grid-template-rows: auto;
		    	color: #FFFFFF;
		    	font-size: 11px;
		    	text-align:center;
		    }

		    .info {
		    	grid-column: 1;
		    	grid-row: 1;
		    	padding-bottom: 10px;
		    }

		    /* TODO: Convert this to 1 x 5 grid */
		    .social {
		    	grid-column: 1;
		    	grid-row: 2;
		    	padding-bottom: 10px;
		    }

		    .social > a > img {
	    		padding-left: 5px;
	    		padding-right: 5px;
		    }

		    .logo {
		    	grid-column: 1;
		    	grid-row: 3;
		    }

            .sig {
                grid-row: auto;
                grid-column: 1;
            }

            .sig .wrapper {
                display: grid;
                grid-template-columns: auto;
                margin: auto;

            }

            .unsub { /* Have trouble viewing this email? */
		    	text-align: center;
		    	grid-row: 5;
		    	color:#777777;
		    	font-size:11px;
		    }

            .sig .wrapper .signature > p > a {
                color: #007FA3;
            }

        	/* Mobile Only */
        	@media only screen and (max-width: 767px) {
        		.mobile-hide {
        			display:none;
        		}
        	}

        	/* Desktop Only */
        	@media only screen and (min-width: 486px) {

                .center .wrapper {
                    grid-template-columns: 50% 50%;
                    grid-template-rows: auto;
                    text-align: left;
                }

			    .wrapper {
			    	max-width: 1024px;
			    }

                .table-left {
                    grid-column: 1;
                }

                .table-right {
                    grid-column: 2;
                }

                .left {
                    grid-column: 1;
                    grid-row: auto;
                }

                .right {
                    grid-column: 2;
                    grid-row: auto;
                    padding-top: 0px;
                }

			    .right > img {
			    	width:100%;
			    	height:auto;
			    }

			    /* Side-by-side signature/Apply button */
			    .signature {
			    	grid-column: auto;
			    	grid-row: 2;
                    text-align: left;
			    }

			    .apply {
			    	grid-column: auto;
			    	grid-row: 2;
                    margin-right: 0;
                    margin-left: auto;
			    }

                .sig {
                    grid-row: auto;
                    grid-column: 1;
                }

                .sig .wrapper {
                    display: grid;
                    grid-template-columns: 50% 50%;
                }

			    /* Footer */
			    .footer {
			    	grid-row: auto;
			    	background: #000000;
			    	padding: 10px 10px 10px 10px;
			    	font-size: 10.0pt;
			    }

			    /* Footer Grid */
			    .footer .wrapper {
			    	display: grid;
			    	margin: auto;
			    	grid-template-columns: 33% 33% 33%;
			    	color: #FFFFFF;
			    	font-size: 11px;
			    }

			    .info {
			    	grid-column: 1;
			    	grid-row: auto;
			    	text-align: left;
			    }

			    /* TODO: Convert this to 1 x 5 grid */
			    .social {
			    	grid-column: 2;
			    	grid-row: auto;
			    	margin-top:auto;
			    	margin-bottom:auto;
			    }

			    .social > a > img {
		    		/* TODO: VCenter this */
		    		padding-left: 5px;
		    		padding-right: 5px;
			    }

			    .logo {
			    	grid-column: 3;
			    	grid-row: auto;
			    	text-align:right;
			    }
        	}
        </style>
    </head>

	<body>
		<div class="wrapper">
			<div class="trouble_viewing" style="padding: 10px 10px 10px 10px;">
				Having trouble viewing this email? <a href="%%view_email_url%%">View it in your browser.</a>
			</div>

			<div class="header">
                <div style="background-color:#660000;">
                    <!--[if gte mso 9]>
                    <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                    <v:fill type="tile" src="https://cdn01.its.msstate.edu/i/basedrupal/1.0.5/img/background/bg_header.jpg" color="#660000"/>
                    </v:background>
                    <![endif]-->
                    <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="top" align="center" background="https://cdn01.its.msstate.edu/i/basedrupal/1.0.5/img/background/bg_header.jpg">
                                <img alt="Mississippi State University" src="" style="height:auto; width:100%; max-width: 617px; min-height: 58px; min-width:320px;" />
                            </td>
                        </tr>
                    </table>
                </div>
			</div>

			<div class="content">
                <div class="wrapper">
            		<div class="center">
                        @yield('content')
						{{ $program }}
                    </div>

                    <div class="sig">
                        <div class="wrapper">
                            <div class="signature">
                                <p>
                                    @yield('signature')
                                </p>
                            </div>

                            <div class="apply">
                                @yield('apply')
                            </div>
                        </div>
                    </div>
                </div>
			</div>

			<div class="footer">
				<div class="wrapper">
					<div class="info">
						<b>*|USER:COMPANY|*</b><br/>
						*|USER:ADDRESS|*
					</div>

					<div class="social">
						<a href="https://www.facebook.com/Distance.Education.MSU" target="_blank" style="color:#fff;">
	                        <img src="http://distance.msstate.edu/images/global/social/facebook.png" /></a>

	                    <a href="https://twitter.com/MSStateDistance" target="_blank" style="color:#fff;">
	                        <img src="http://distance.msstate.edu/images/global/social/twitter.png" /></a>

	                    <a href="https://instagram.com/msstatedistance/" target="_blank" style="color:#fff;">
	                        <img src="http://distance.msstate.edu/images/global/social/instagram.png" /></a>

	                    <a href="http://www.linkedin.com/company/mississippi-state-university-center-for-distance-education?trk=company_name" target="_blank" style="color:#fff;">
	                        <img src="http://distance.msstate.edu/images/global/social/linkedIn.png" /></a>
					</div>

					<div class="logo">
						<img src="http://distance.msstate.edu/images/distance/distance@StateStacked.png" width="125" height="70"/>
					</div>
				</div>
			</div>

            <div class="unsub" style="padding: 10px 10px 10px 10px;">
                Not interested anymore? <a href="*|UNSUB|*">Unsubscribe</a>.<br/>
                You are receiving this because you signed up at <a href="https://msstate.edu/">msstate.edu</a> or with one of our education partners.
            </div>
		</div>
    </body>
</html>
