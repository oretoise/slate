@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Engineering program!</h3>

<img src="https://goto.msstate.edu/www/images/Distance/programs/meng/meng_1.png" class="img-right" />

<p>Dear @@{{First}},</p>
<p>Thank you for checking out MSU's online Master of Engineering (MENG) degree.</p>
<p>Flexibility and individuality are the highlights of this 30-credit hour degree which has both thesis and non-thesis options.  Students choose courses based on their educational and professional goals.  While there are two required courses (Engineering Stats and Project Management), students who completed equivalent courses during their undergraduate studies may substitute other options.</p>
<p>Students also choose between two different concentrations - General Engineering and Military Engineering.</p>

<p>See how you can get started by:</p>
<ul>
    <li>Reviewing our <a href="https://www.bagley.msstate.edu/wp-content/uploads/MENG-Program-Guide-June-2019.pdf">Program Guide</a></li>
    <li>Requesting information about your desired area of study</li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>

<p>Fall Admission Deadline:  <b>August 1</b><br/>
Spring Admission Deadline:  <b>December 1</b><br/>
Summer Admission Deadline:  <b>May 15</b></p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc.(ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/engineering#admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann_meng')
@endsection

@section('apply')
	@include('common.apply')
@endsection