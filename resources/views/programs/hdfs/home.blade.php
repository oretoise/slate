@extends('layouts.mjml')

@section('content')
<h3>HDFS Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('hdfs/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('hdfs/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('hdfs/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('hdfs/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('hdfs/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('hdfs/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('hdfs/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('hdfs/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('hdfs/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('hdfs/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection