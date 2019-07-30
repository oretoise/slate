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
        <mj-section>
            <mj-column>
                <mj-text align="center" color="#777777" font-size="11px" padding="10px 10px 10px 10px" font-family="Helvetica">
                </mj-text>
            </mj-column>
        </mj-section>

        <mj-section background-url="https://cdn01.its.msstate.edu/i/basedrupal/1.0.5/img/background/bg_header.jpg">
            <mj-column>
                <mj-image src="https://gallery.mailchimp.com/08645bc06c5353fea3c46c46c/images/ff0d6375-2b7e-462c-908d-a77f62d6cb0b.png"/>
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
                    <b>*|USER:COMPANY|*</b><br>
                    *|USER:ADDRESS|*
                </mj-text>
            </mj-column>

            <mj-column>
                <mj-table padding="10px 10px 10px 10px">
                  <tr align="center">
                    <td width="20%">
                        <a href="https://www.facebook.com/Distance.Education.MSU" target="_blank" style="color:#fff;">
                            <img src="http://distance.msstate.edu/images/global/social/facebook.png" /></a>
                    </td>
                    <td width="20%">
                        <a href="https://twitter.com/MSStateDistance" target="_blank" style="color:#fff;">
                            <img src="http://distance.msstate.edu/images/global/social/twitter.png" /></a>
                    </td>
                    <td width="20%">
                        <a href="https://instagram.com/msstatedistance/" target="_blank" style="color:#fff;">
                            <img src="http://distance.msstate.edu/images/global/social/instagram.png" /></a>
                    </td>
                    <td width="20%">
                        <a href="http://www.linkedin.com/company/mississippi-state-university-center-for-distance-education?trk=company_name" target="_blank" style="color:#fff;">
                            <img src="http://distance.msstate.edu/images/global/social/linkedIn.png" /></a>
                    </td>
                    <td width="20%">
                        <a href="https://www.pinterest.com/msstatedistance/" target="_blank" style="color:#fff;">
                            <img src="http://distance.msstate.edu/images/global/social/pinterest.png" /></a>
                    </td>
                  </tr>
                </mj-table>
            </mj-column>

            <mj-column>
                <mj-image src="http://distance.msstate.edu/images/distance/distance@StateStacked.png" width="125" align="right" padding="10px 10px 10px 0" />
            </mj-column>
        </mj-section>

        <mj-section>
            <mj-column>
                <mj-text align="center" color="#777777" font-size="11px" padding="10px 10px 10px 10px" font-family="Helvetica">
                    You are receiving this because you signed up at <a href="http://msstate.edu/" style="color: #660000">msstate.edu</a> or with one of our education partners.<br/><br/>
                    Not interested anymore? <a href="*|UNSUB|*" target="_blank" style="color: #660000">Unsubscribe</a>.
                </mj-text>
            </mj-column>
        </mj-section>
    </mj-body>
</mjml>
