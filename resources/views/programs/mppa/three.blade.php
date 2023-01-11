@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
	<li>
		<span style="color: #5D1725;"><b>Do you accept transfer credit?</b></span><br/>
		Yes, you may transfer up to 12 hours from an accredited university. Transfer credit must be approved by the Graduate Coordinator.
	</li>
	<li>
		<span style="color: #5D1725;"><b>Can the entire program be completed online?</b></span><br/>
		Yes, the coursework can be completed 100% online. Courses will be offered in a synchronous format, and students will have set days and times that they must log in to attend class. 
	</li>
	<li>
		<span style="color: #5D1725;"><b>•	Is this program accredited? </b></span><br/>
		Yes, the MPPA program is accredited by the Network of Schools of Public Policy, Affairs, and Administration (NASPAA). As our Mission states, the Master of Public Policy and Administration program strives to professionalize and diversify state and local government in Mississippi and the region. The program prepares persons to serve effectively as public administrators at the national, state, and local levels of government.
	</li>
</ul>

<p>If you have other questions or if we can assist you in any way, please contact us.  We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.lhudson')
@endsection

@section('apply')
	@include('common.apply')
@endsection