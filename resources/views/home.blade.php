@extends('layouts.mjml')

@section('content')
<h2>List of Communication Plans:</h2>

<ul>
    <li><a href=" {{ url('bba') }}">BBA</a></li>
	<li><a href=" {{ url('bsis') }}">BSIS</a></li>
	<li><a href=" {{ url('elem') }}">ELEMED</a></li>
	<li><a href=" {{ url('geosciences/bomp') }}">BOMP</a></li>
	<li><a href=" {{ url('bsindt') }}">BSINDT</a></li>
	<li><a href=" {{ url('psychology') }}">Psychology</a></li>
	<li><a href=" {{ url('wellness') }}">Wellness Coaching Certificate</a></li>
	<li><a href=" {{ url('agriculture') }}">Agriculture - ADS</a></li>
	<li><a href=" {{ url('geosciences/amp') }}">MS Geoscience - Applied Meteorology</a></li>
	<li><a href=" {{ url('geosciences/engs') }}">MS Geosciences - Environmental</a></li>
	<li><a href=" {{ url('health') }}">MS Food Science, Nutrition, & Health Promotion</a></li>
	<li><a href=" {{ url('forestry') }}">MS Forestry</a></li>
	<li><a href=" {{ url('mabm') }}">Master's in Agribusiness Management</a></li>
	<li><a href=" {{ url('msei') }}">MS Early Intervention</a></li>
	<li><a href=" {{ url('msgb') }}">MS General Biology</a></li>
	<li><a href=" {{ url('geosciences/tig') }}">MS Geosciences - ENGS / TIG</a></li>
	<li><a href=" {{ url('mba') }}">Masters in Business Admin</a></li>
	<li><a href=" {{ url('mba-pm') }}">MBA - Project Management</a></li>
	<li><a href=" {{ url('msis') }}">MS Information Systems</a></li>
	<li><a href=" {{ url('edld') }}">MS Educational Leadership</a></li>
	<li><a href=" {{ url('matced') }}">Master of Arts Teaching - Comm College Ed</a></li>
	<li><a href=" {{ url('mats') }}">Master of Arts Teaching - Secondary</a></li>
	<li><a href=" {{ url('matx') }}">Master of Arts Teaching - Special</a></li>
	<li><a href=" {{ url('msit') }}">MS Instructional Tech</a></li>
	<li><a href=" {{ url('phcl') }}">PhD. Community College Leadership</a></li>
	<li><a href=" {{ url('seed') }}">MS Secondary Education</a></li>
	<li><a href=" {{ url('wel') }}">MS Workforce Education Leadership</a></li>
	<li><a href=" {{ url('veterans') }}">Veterans Certificate Program</a></li>
	<li><a href=" {{ url('history') }}">BA History</a></li>
	<li><a href=" {{ url('geosciences/amf') }}">Aeronautical Meteorological Forecaster Certficiate</a></li>
	<li><a href=" {{ url('biology') }}">General Biology Certificate</a></li>
	<li><a href=" {{ url('bas') }}">Bachelor of Applied Science</a></li>
</ul>
@endsection
