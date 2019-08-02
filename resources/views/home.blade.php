@extends('layouts.mjml')

@section('content')
<h2>List of Communication Plans:</h2>

<ul>
    <li><a href=" {{ url('dev/bba') }}">BBA</a></li>
	<li><a href=" {{ url('dev/bsis') }}">BSIS</a></li>
	<li><a href=" {{ url('dev/elem') }}">ELEMED</a></li>
	<li><a href=" {{ url('dev/geosciences/bomp') }}">BOMP</a></li>
	<li><a href=" {{ url('dev/bsindt') }}">BSINDT</a></li>
	<li><a href=" {{ url('dev/psychology') }}">Psychology</a></li>
	<li><a href=" {{ url('dev/wellness') }}">Wellness Coaching Certificate</a></li>
	<li><a href=" {{ url('dev/agriculture') }}">Agriculture - ADS</a></li>
	<li><a href=" {{ url('dev/geosciences/amp') }}">MS Geoscience - Applied Meteorology</a></li>
	<li><a href=" {{ url('dev/geosciences/engs') }}">MS Geosciences - Environmental</a></li>
	<li><a href=" {{ url('dev/health') }}">MS Food Science, Nutrition, & Health Promotion</a></li>
	<li><a href=" {{ url('dev/forestry') }}">MS Forestry</a></li>
	<li><a href=" {{ url('dev/mabm') }}">Master's in Agribusiness Management</a></li>
	<li><a href=" {{ url('dev/msei') }}">MS Early Intervention</a></li>
	<li><a href=" {{ url('dev/msgb') }}">MS General Biology</a></li>
	<li><a href=" {{ url('dev/geosciences/tig') }}">MS Geosciences - ENGS / TIG</a></li>
	<li><a href=" {{ url('dev/mba') }}">Masters in Business Admin</a></li>
	<li><a href=" {{ url('dev/mbapm') }}">MBA - Project Management</a></li>
	<li><a href=" {{ url('dev/msis') }}">MS Information Systems</a></li>
	<li><a href=" {{ url('dev/edld') }}">MS Educational Leadership</a></li>
	<li><a href=" {{ url('dev/matced') }}">Master of Arts Teaching - Comm College Ed</a></li>
	<li><a href=" {{ url('dev/mats') }}">Master of Arts Teaching - Secondary</a></li>
	<li><a href=" {{ url('dev/matx') }}">Master of Arts Teaching - Special</a></li>
	<li><a href=" {{ url('dev/msit') }}">MS Instructional Tech</a></li>
	<li><a href=" {{ url('dev/phcl') }}">PhD. Community College Leadership</a></li>
	<li><a href=" {{ url('dev/seed') }}">MS Secondary Education</a></li>
	<li><a href=" {{ url('dev/wel') }}">MS Workforce Education Leadership</a></li>
	<li><a href=" {{ url('dev/veterans') }}">Veterans Certificate Program</a></li>
	<li><a href=" {{ url('dev/history') }}">BA History</a></li>
</ul>
@endsection
