@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
	<li>
		<span style="color: #5D1725;"><b>What can I do with a master's degree in sustainable bioproducts?</b></span><br/>
		Graduates of our master's program have gone on to careers at forest products companies, research labs, trade associations, the U.S. Forest Service, and institutions of higher learning.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>My bachelor's degree is not in sustainable bioproducts.  Can I still apply?</b></span><br/>
		Yes! Our students come from a variety of backgrounds including science, engineering, business, forestry, and agriculture.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Can the entire program be completed online?</b></span><br/>
		Yes, the Master of Science in Sustainable Bioproducts coursework can be completed 100% online.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>How long does it take to earn a master's degree?</b></span><br/>
		Full-time students take 1.5 to 2 years on average to complete the program requirements. The program length may vary depending on several factors including transferred credit and course load.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Do you accept transfer credit?</b></span><br/>
		Yes, you may transfer up to 12 hours from an accredited university. A formal <a href="https://www.grad.msstate.edu/students/forms">transfer approval form</a> must be submitted to receive credit.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Do I have to write a thesis?</b></span><br/>
		No, our online master's program does not require a thesis; however, students will complete a graduate capstone course online which further develops their oral and written communication skills. 
	</li>
</ul>

<p>If you have other questions or if I can assist you in any way, please contact me. I am ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection