@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thanks for your interest in the MSGB program!</h3>
<p>Dear @{{First}},</p>

<p>Thank you for your interest in the online Master of Science in General Biology (MSGB) program at Mississippi State University. Although designed for high school teachers, this program is not limited to teachers, but will also provide students with a better background and understanding of biological sciences.</p>

<p>Courses are taught completely online, with the exception of a final capstone class, which is held on our Starkville, MS campus.</p>

<p>After successful completion of the entire two-year program, students will earn an MS in General Biology. This degree will enable teachers from most states to obtain a higher certification or pay scale and/or an endorsement. Please note that all states have their own criteria for advancement and certification and that there are no educational components to these classes. This degree will not provide students with an initial teaching license. You will need to contact the Department of Education in your state to see how this program relates to state requirements.</p>

<p>The MSGB degree can be earned by completing 33 credit hours of graduate level courses. The program consists of ten (10) content courses that span the different disciplines within biology, including ecology, microbiology, evolutionary biology, and biotechnology, and one (1) on-campus capstone course.</p>

<p>Within the capstone course, students work closely with biologist and their fellow classmates in intensive laboratory and field exercises. While on campus for this course, students will also take a proctored, written comprehensive exam.</p>

<p>If you are interested in enrolling or would like more information regarding admissions, see our <a href="http://distance.msstate.edu/msgb/admissions">admissions guide</a>.</p>

<p>I hope you will find that the MSGB program meets your needs and you start the online application for admission.  The admission deadline for the fall is <b>1 August</b>.</p>

<p>If you have any questions or concerns, contact me, and I will be glad to assist you!</p>

<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection