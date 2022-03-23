@extends('layouts.mjml')

@section('content')
<h3>Day 47 - Subject: Let's get social!</h3>
<p>
    Be part of the Bulldog Family!  Choose your favorite social media platform to connect with us so you can keep up with important deadlines and other topics and essential announcements.
</p>

<table style="width: 550px; margin: auto;">
    <tr>
        <td class="divider social">
            <a href="https://www.facebook.com/OnlineMABM/">
                <img src="https://goto.msstate.edu/www/images/Distance/social/facebook_100.png"/>
            </a>
        </td>
        <td class="divider social">
            <a href="https://twitter.com/online_mabm">
                <img src="https://goto.msstate.edu/www/images/Distance/social/twitter_100.png" />
            </a>
        </td>
        <td class="divider social">
            <a href="https://www.instagram.com/mississippistateonline/">
                <img src="https://goto.msstate.edu/www/images/Distance/social/instagram_100.png" />
            </a>
        </td>
        <td class="divider social">
            <a href="https://www.linkedin.com/company/mississippi-state-university-center-for-distance-education/?trk=company_name">
                <img src="https://goto.msstate.edu/www/images/Distance/social/linkedin_100.png" />
            </a>
        </td>
        <td class="divider social">
            <a href="https://www.youtube.com/channel/UC_rYsq0IfHHR5ysJfLFe9bQ">
                <img src="https://goto.msstate.edu/www/images/Distance/social/youtube_100.png" />
            </a>
        </td>
    </tr>
</table>
<p>Happy following!</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection