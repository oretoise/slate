<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class mjml extends Controller
{
    public function dev_view($program, $day = Null) {

        # Determine whether requesting list or specific email.
        if ($day) {
            $view = "/programs//" . $program . "/" . $day;
        } else {
            $view = "/programs//" . $program . "/home";
        }
		
		if ($program == Null) {
			$view = "home";
			$program = "home";
		}

        # Call Blade to render the requested view.
        $blade = view($view)->with('program', $program)->render();

        # Create an MJML instance.
        $process = new Process("../node_modules/.bin/mjml --stdin --stdout");

        # Set its STDIN to the result from Blade.
        $process->setInput($blade);

        # Run MJML.
        $process->mustRun();

        # Store its output in a variable.
        $mjml_output = $process->getOutput();

        # Return HTML output.
        return $mjml_output;
    }

    public function geo_dev_view($program, $day = Null) {

        # Determine whether requesting list or specific email.
        if ($day) {
            $view = "/programs/geosciences/" . $program . "/" . $day;
        } else {
            $view = "/programs/geosciences/" . $program . "/home";
        }

        # Call Blade to render the requested view.
        $blade = view($view)->with('program', $program)->render();

        # Create an MJML instance.
        $process = new Process("../node_modules/.bin/mjml --stdin --stdout");

        # Set its STDIN to the result from Blade.
        $process->setInput($blade);

        # Run MJML.
        $process->mustRun();

        # Store its output in a variable.
        $mjml_output = $process->getOutput();

        # Return HTML output.
        return $mjml_output;
    }

    public function compiled($program, $day = Null) {
        # Return compiled view of requested program and day.

        if ($day) {
            $view = '/compiled/' . $program . '/' . $day;
        } else {
            $view = '/compiled/' . $program . '/home';
        }
        return view($view)->with('program', $program);
    }

    public function geo_compiled($program, $day = Null) {
        $program = "geosciences/" . $program;
		$output = $this->compiled($program, $day);
		echo $output;
    }

    public function compile_view($program, $day = Null) {

        # Determine view file. (Homepages are included, so no need to exclude).
        $view = "/programs/" . $program . "/" . $day;

        # Call Blade to render the requested view.
        $blade = view($view)->with('program', $program)->render();

        # Create an MJML instance.
        $process = new Process("../node_modules/.bin/mjml --stdin --stdout");

        # Set its STDIN to the result from Blade.
        $process->setInput($blade);

        # Run MJML.
        $process->mustRun();

        # Store its output in a variable.
        $mjml_output = $process->getOutput();

        # Make output directory if it doesn't exist.
	    $directory = "../resources/views/compiled/" . $program;
	    if (!file_exists($directory)) {
		    mkdir($directory, 0755, true);
        }
        
        # Write MJML's output to the new blade file.
	    $filename = "../resources/views/compiled/" . $program . "/" . $day . ".blade.php";
        $myfile = fopen($filename, "w") or die("Unable to open file!");
        fwrite($myfile, $mjml_output);
        fclose($myfile);
    }

    public function compile_plan($program) {
        # Array of filenames.
        $files = scandir("../resources/views/programs/" . $program);
        $file_stems = array();

        # Get just the first part.
        for($x = 0; $x < count($files); $x++) {
            $file_stems[$x] = explode(".", $files[$x])[0];
        }
        
        # Remove . and .. from scandir() output array.
        array_splice($file_stems, 0, 2);
        
        # Run each through the compiler.
        for($y = 0; $y < count($file_stems); $y++) {
            $this->compile_view($program, $file_stems[$y]);
        }

        # TODO: Return JSON for AJAX.
        echo "Compiled plan. Visit at /" . $program . "/ .";
    }

    public function geo_compile_plan($program) {
        $program = "/geosciences/" . $program;
        $this->compile_plan($program);
    }

    public function listing() {
        $plans = scandir("../resources/views/programs");
        array_splice($plans, 0, 2);

        return view('listing', compact('plans'));
    }
}
