<mjml>
    <mj-head>
        <mj-attributes>
            <mj-all padding="0" />
        </mj-attributes>

        <mj-style>
            .apply {
                text-align: left;
                padding-left: 20px;
            }
            .img-center {
                display: none;
            }
            .img-right {
                display: block;
                max-width: 350px;
                height: auto;
                margin: auto;
                padding-right: 10px;
            }

            @media only screen and (min-width: 575px) {
                .apply {
                    text-align: right;
                    padding-right: 10px;
                    padding-bottom: 20px;
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
                    padding-left: 10px;
                }
            }
        </mj-style>
        <mj-title>@yield('title')</mj-title>
    </mj-head>
    <mj-body background-color="#CCCCCC" width="750px">

        <mj-section background-color="#660000">
            <mj-column>
                <mj-image padding-top="20px" alt="Mississippi State University"src="https://goto.msstate.edu/www/images/Distance/headers/{{$program}}_header.png"/>
            </mj-column>
        </mj-section>

        <mj-section background-color="#FFFFFF">
            <mj-column>
                <mj-text padding="0px 10px 10px 20px" font-family="Helvetica" line-height="17px">
                    @yield('content')
                </mj-text>
            </mj-column>
        </mj-section>

        <mj-section background-color="#FFFFFF">
            <mj-column>
                <mj-text padding="0px 20px 20px 20px" font-family="Helvetica">
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

        <mj-section background-color="#000000">
            <mj-column>
                <mj-text color="#FFFFFF" padding="10px 10px 10px 10px" font-family="Helvetica">
                    <b>Center for Distance Education</b><br/>P.O Box 5247<br/>365 Barr Avenue<br/>Mississippi State, MS 39762
                </mj-text>
            </mj-column>

            <mj-column>
                <mj-table padding="10px 10px 10px 10px">
                  <tr align="center">
                    <td width="25%">
                        <a href="https://www.facebook.com/MississippiStateUniversityOnline/" target="_blank">
						<img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/facebook.svg" /></a>
                    </td>
                    <td width="25%">
                        <a href="https://twitter.com/msstateonline" target="_blank">
						<img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/twitter.svg" /></a>
                    </td>
                    <td width="25%">
                        <a href="https://www.instagram.com/mississippistateonline/" target="_blank">
						<img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/instagram.svg" /></a>
                    </td>
                    <td width="25%">
                        <a href="https://www.linkedin.com/company/mississippi-state-university-center-for-distance-education/" target="_blank">
						<img class="icon" src="https://cdn01.its.msstate.edu/i/social-icons/icons/linkedin.svg" /></a>
                    </td>
                  </tr>
                </mj-table>
            </mj-column>

            <mj-column>
                <mj-image src="http://devel.distance.msstate.edu/images/msstate_flipped.png" width="170" align="right" padding="10px 10px 10px 0" />
            </mj-column>
        </mj-section>
    </mj-body>
</mjml>
