@extends('layouts.mjml')
@section('title', 'CDE Communication Plans')
@section('content')
<h2>List of Communication Plans:</h2>

<h3>Other Mailings</h3>

<ul>
	<li><a href=" {{ url('gmat_purchase') }}">GMAT Purchase</a></li>
	<li><a href=" {{ url('info_sessions') }}">Info Sessions</a></li>
	<li><a href=" {{ url('incomplete_apps') }}">Incomplete Apps</a></li>
	<li><a href=" {{ url('bullybundles') }}">BullyBundles</a></li>	
</ul>

<h3>Programs</h3>
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
	<li><a href=" {{ url('vision') }}">Vision Specialist Certificate</a></li>
	<li><a href=" {{ url('engineering') }}">Master of Engineering</a></li>
	<li><a href=" {{ url('ise') }}">Industrial Engineering - MS & PhD</a></li>
	<li><a href=" {{ url('camc') }}">Companion Animal Management Certificate</a></li>
	<li><a href=" {{ url('cme') }}">Computation Engineering - MS & PhD</a></li>
	<li><a href=" {{ url('engineeringed') }}">PhD Engineering Education</a></li>
	<li><a href=" {{ url('cee') }}">Civil Engineering - MS & PhD</a></li>
	<li><a href=" {{ url('conservation') }}">MS Conservation Education</a></li>
	<li><a href=" {{ url('sbp') }}">MS Sustainable Bioproducts</a></li>
	<li><a href=" {{ url('caba') }}">Certificate Applied Behavior Analysis</a></li>
	<li><a href=" {{ url('epy') }}">BS Educational Psychology</a></li>
	<li><a href=" {{ url('me') }}">Mechanical Engineering MS/PhD</a></li>
	<li><a href=" {{ url('cse') }}">MS / PhD Computer Science</a></li>
	<li><a href=" {{ url('ece') }}">MS / PhD Electrical Engineering</a></li>
	<li><a href=" {{ url('chemeng') }}">MS / PhD Chemical Engineering</a></li>
	<li><a href=" {{ url('gis') }}">GIS Certificate</a></li>
	<li><a href=" {{ url('cmll') }}">MA Foreign Languages</a></li>
	<li><a href=" {{ url('snd') }}">Special Non-Degree / Undeclared</a></li>
	<li><a href=" {{ url('comm') }}">BA Communication, PR</a></li>
	<li><a href=" {{ url('mscyso') }}">MS Cybersecurity Operations</a></li>
	<li><a href=" {{ url('ase') }}">MS / PhD Aerospace Engineering</a></li>
	<li><a href=" {{ url('mtpa') }}">Master of Taxation / Professional Accountancy</a></li>
	<li><a href=" {{ url('hdfs') }}">BS Human Development & Family Systems</a></li>
	<li><a href=" {{ url('iswd') }}">PhD Industrial Systems & Workforce Development</a></li>
	<li><a href=" {{ url('ensc') }}">Environmental & Sustainability Certificate</a></li>
	<li><a href=" {{ url('mscse') }}">MS Computer Science</a></li>
	<li><a href=" {{ url('phcse') }}">PhD Computer Science</a></li>
	<li><a href=" {{ url('phcee') }}">PhD Civil & Environmental Engineering</a></li>
	<li><a href=" {{ url('mscee') }}">MS Civil & Environmental Engineering</a></li>
	<li><a href=" {{ url('mscme') }}">MS Computational Engineering</a></li>
	<li><a href=" {{ url('phcme') }}">PhD Computational Engineering</a></li>
	<li><a href=" {{ url('msme') }}">MS Mechanical Engineering</a></li>
	<li><a href=" {{ url('phme') }}">PhD Mechanical Engineering</a></li>
	<li><a href=" {{ url('msece') }}">MS Electrical & Computer Engineering</a></li>
	<li><a href=" {{ url('phece') }}">PhD Electrical & Computer Engineering</a></li>
</ul>
@endsection
