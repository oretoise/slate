@extends('layouts.responsive')

@section('content')
<h3>Day 35 - Subject: Be a Bulldog -- MSU Traditions</h3>
<p>Dear *|FNAME|*,</p>

<p>
    <img class="img-right" src="https://goto.msstate.edu/www/images/Distance/bba/Cowbelll_Drill_Field_M3B0011.png"/>
    We want you to become a Bulldog! Join us in the traditions of MSU!
</p>

<p>
    <span style="color: #660000; text-decoration: underline;"><b>BULLDOG</b></span><br/>
    MSU athletic teams are called Bulldogs, a name earned and maintained over the decades by the tough, tenacious play by student-athletes wearing the maroon and white. The official school mascot is an American Kennel Club-registered English bulldog given the inherited title of "Bully."  The current mascot is named "Jak" or Bully XXI and is the son of "Champ," Bully XX.
</p>

<p>
    <span style="color: #660000; text-decoration: underline;"><b>COWBELL</b></span><br/>
    The cowbell is the longstanding visual and auditory symbol of Mississippi State pride.  Legend has it a wandering Jersey cow became a good luck charm in the mid-20th century after having strolled onto the field during an ultimately victorious home football game. Over time, students began ringing cowbells for continued luck at outdoor athletic events, starting a tradition that continues in the modern era.
</p>

<p>
    <span style="color: #660000; text-decoration: underline;"><b>MAROON & WHITE</b></span><br/>
    Maroon and white are MSU’s colors dating back to November 16, 1895. <span style="color: #660000; text-decoration: underline;"><b>MAROON FRIDAY</b></span> became a tradition as Bulldogs around the world began expressing their pride and passion for MSU by wearing at least one piece of maroon clothing each Friday.
</p>

<p>I look forward to your becoming an MSU Bulldog, and I am always here to help!</p>
<p>All the best,</p>
@endsection

@section('signature')
    @include('signatures.mjimerson')
@endsection

@section('apply')
    @include('programs.bba.apply')
@endsection
