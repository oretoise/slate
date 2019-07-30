<mjml>
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
			.apply {padding-top: 10px;}
		    .info {padding-bottom: 10px;}
			.img-center {display: none;}
			.img-right {display: none;}
            .icon {width: 24px; height: 24px;}
			.small_message > a {color: #660000;}
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
        </mj-style>
        <mj-title>@yield('title')</mj-title>
    </mj-head>
    <mj-body background-color="#CCCCCC" width="750px">
        <mj-spacer height="20px" />
        <mj-section background-color="#660000">
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
                <mj-raw>
                    <div class="apply">
                        @yield('apply')
                    </div>
                </mj-raw>
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
                        <mj-text>
                            <a href="https://www.facebook.com/MississippiStateUniversityOnline/" target="_blank">
                            <img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/facebook.svg" /></a>
                        </mj-text>
                    </mj-column>
                    <mj-column>
                        <mj-text>
                            <a href="https://twitter.com/msstateonline" target="_blank">
			                <img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/twitter.svg" /></a>
                        </mj-text>
                    </mj-column>
                    <mj-column>
                        <mj-text>
                            <a href="https://www.instagram.com/mississippistateonline/" target="_blank">
			                <img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/instagram.svg" /></a>
                        </mj-text>
                    </mj-column>
                    <mj-column>
                        <mj-text>
                            <a href="https://www.linkedin.com/company/mississippi-state-university-center-for-distance-education/" target="_blank">
			                <img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/linkedin.svg" /></a>
                        </mj-text>
                    </mj-column>
                </mj-section>
            </mj-column>

            <mj-column>
                <mj-text align="right" css-class="divider_footer logo"><img src="http://devel.distance.msstate.edu/images/msstate_flipped.png" width="170px" /></mj-text>
            </mj-column>
        </mj-section>
    </mj-body>
</mjml>
