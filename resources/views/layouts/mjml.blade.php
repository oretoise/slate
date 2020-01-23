<mjml owa="desktop">
    <mj-head>
        <mj-font href="https://fonts.googleapis.com/css?family=Roboto&display=swap" name="Roboto" />
        <mj-attributes>
            <mj-all padding="0" />
	        <mj-all font-family="'Roboto', Arial, sans-serif" />
	        <mj-all line-height="16px" />
	        <mj-all font-size="13.3333px" />
        </mj-attributes>

        <mj-style>
            a {color: #007FA3;}
			.apply {display:block;padding-left:20px;}
		    .info {padding-bottom: 10px;}
			.img-center {display: none;}
			.img-right {display: none;}
            .icon {padding: 0px 5px 0px 5px;width: 24px; height: 24px;}
			#logo {padding-top: 10px; margin-left:auto;margin-right:auto; display:block;}
			.small_message > a {color: #5D1725;}
		    .social {padding-bottom: 10px;}
		    .social > div > a > img {padding: 10px 5px 10px 5px;}
			.divider > img {padding: 0px 5px 10px 5px;}
			.wrapper {margin: auto;}
            div {font-family: 'Roboto', Arial, sans-serif;}

			table, tbody, tr, td {
				padding:0; margin:0; border-collapse: collapse;
			}

        	body {
        		margin: 0;
        		background-color: #C1C6C8;
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
				padding-bottom: 5px;
			}

			.divider_footer {
				display: block;
			}

			@media only screen and (min-width: 610px) {
				.img-right {
                    float: right;
					display: block;
		    		padding: 0px 0px 10px 10px;
                }
				.apply {
					float: right;}
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
				.divider_footer {display:table-cell;}
				.info {text-align: left;}
				.logo {text-align:right;float:right;display:block;}
                .staff {width: auto; padding: 5px 5px 5px 5px;}
				.wrapper {max-width: 750px;}

			    .social > div > a > img {
			    	margin-top:auto;
			    	margin-bottom:auto;
			    }
        	}
        </mj-style>
        <mj-title>@yield('title')</mj-title>
    </mj-head>
    <mj-body background-color="#C1C6C8" width="750px">
        <mj-spacer height="20px" />
        <mj-section background-color="#5D1725">
            <mj-column>
                <mj-image padding-bottom="4px" alt="Mississippi State University"src="https://goto.msstate.edu/www/images/Distance/headers/{{$program}}_header.png"/>
            </mj-column>
        </mj-section>

        <mj-section background-color="#FFFFFF">
            <mj-column>
                <mj-text padding="5px 20px 0px 20px">
                    @yield('content')
                </mj-text>
            </mj-column>
        </mj-section>

        <mj-section background-color="#FFFFFF">
            <mj-column>
                <mj-text padding="0px 20px 20px 20px">
                    <div class="signature">
                        @yield('signature')
                    </div>
                </mj-text>
            </mj-column>
            <mj-column>
                <mj-text align="right" padding="0px 20px 10px 0px">
                    <div>
                        @yield('apply')
                    </div>
                </mj-text>
            </mj-column>
        </mj-section>

        <mj-section background-color="#000000" padding="20px 20px 20px 20px">
            <mj-column>
                <mj-text color="#FFFFFF" font-size="16px" line-height="19px" padding-bottom="10px">
                    <b>Center for Distance Education</b><br/>P.O Box 5247<br/>365 Barr Avenue<br/>Mississippi State, MS 39762
                </mj-text>
            </mj-column>

            <mj-column>
                <mj-section>
                    <mj-column>
                        <mj-text css-class="social" align="center">
                            <a href="https://www.facebook.com/MississippiStateUniversityOnline/" target="_blank">
                            <img class="icon" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/fb_icon.png" /></a>
                            <a href="https://twitter.com/msstateonline" target="_blank">
			                <img class="icon" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/tw_icon.png" /></a>
                            <a href="https://www.instagram.com/msstateonline/" target="_blank">
			                <img class="icon" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/ig_icon.png" /></a>
                            <a href="https://www.linkedin.com/company/mississippi-state-university-center-for-distance-education/" target="_blank">
			                <img class="icon" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/li_icon.png" /></a>
                        </mj-text>
                    </mj-column>
                </mj-section>
            </mj-column>

            <mj-column>
                <mj-text css-class="divider_footer logo"><img id="logo" src="http://devel.distance.msstate.edu/images/msstate_flipped.png" width="170px" /></mj-text>
            </mj-column>
        </mj-section>
    </mj-body>
</mjml>
