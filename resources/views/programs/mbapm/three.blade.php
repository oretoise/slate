@extends('layouts.responsive')

@section('content')
<h3>Day 3 - Subject: MBA-PM FAQs!</h3>

<p>Dear @{{First}},</p>

<p>After reviewing the online Master of Business Administration in Project Management (MBA-PM) program website and brochure, you may have looming questions that you are unsure how to ask.  I am including some of the frequently asked questions that I receive from prospective students.</p>

<ul>
    <li>
        <b><span style="color: #660000;">Is the GMAT or GRE required?  Can it be waived?</span></b><br/>
        The academic department requires that you take either the GMAT or the GRE.  This requirement cannot be waived.  There is no preference for which test you take, so choose the one you feel most suits your abilities.
    </li><br/>
    <li>
        <b><span style="color: #660000;">Are there additional fees outside of the graduate tuition rate?</span></b><br/>
        In addition to the graduate tuition, program students will be charged a $25 per credit hour instructional support fee along with a $249 per credit hour distance fee.

        <br/><br/>
        The breakdown below is for College of Business courses only.
        <br/><br/>
        
        <table>
            <tbody>
                <tr>
                    <td class="divider staff">Current graduate tuition rate</td>
                    <td class="divider staff">($474.50 per credit hour)</td>
                </tr>
                <tr>
                    <td class="divider staff">Instructional Support Fee</td>
                    <td class="divider staff">($25 per credit hour)</td>
                </tr>
                <tr>
                    <td class="divider staff">College of Business Distance Fee</td>
                    <td class="divider staff">($249 per credit hour)</td>
                </tr>
                <tr>
                    <td class="divider staff">Total</td>
                    <td class="divider staff">approximately $748.50 per credit hour</td>
                </tr>
            </tbody>
        </table>

        <br/><br/>
        The breakdown below is for the three Industrial Engineering courses that are apart of the MBA-PM curriculum.
        <br/><br/>

        <table>
            <tbody>
                <tr>
                    <td class="divider staff">Current graduate tuition rate</td>
                    <td class="divider staff">($474.50 per credit hour)</td>
                </tr>
                <tr>
                    <td class="divider staff">Instructional Support Fee</td>
                    <td class="divider staff">($25 per credit hour)</td>
                </tr>
                <tr>
                    <td class="divider staff">College of Engineering Distance Fee</td>
                    <td class="divider staff">($200 per credit hour)</td>
                </tr>
                <tr>
                    <td class="divider staff">Total</td>
                    <td class="divider staff">approximately $699.50 per credit hour</td>
                </tr>
            </tbody>
        </table>

        <br/>* Tuition and fees are subject to change.<br/><br/>
    </li><br/>
    <li>
        <b><span style="color: #660000;">Are there any prerequisites? Do I have to have the prerequisites completed prior to admission?</span></b><br/>
        Yes, there are prerequisite courses for the online MBA-PM program, which can be completed online through Mississippi State University. These courses do not have to be completed prior to admission.<br/>
        However, prerequisites must be taken before enrolling in the core program courses.

        <p>Special Note:  To determine if you lack any of the prerequisite courses, please email me an unofficial copy of your transcript(s) for evaluation.</p>
    </li>
</ul>

<p>If you have other questions or if I can assist you in any way, please contact me.  I'm ready to help.</p>
@endsection

@section('signature')
	@include('signatures.mjimerson')
@endsection

@section('apply')
	@include('common.apply')
@endsection