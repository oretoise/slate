<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class mjml extends Controller
{
    public function dev_view($program, $day = Null) {

        # Determine whether requesting list or specific email.
        if ($day) {
            # TODO: Eventually this will be '/programs/' . $program . '/' . $day | '/home'
            $view = $program . "/" . $day;
        } else {
            $view = $program . "/home";
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
            $view = '_compiled/' . $program . '/' . $day;
        } else {
            $view = '_compiled/' . $program . '/home';
        }

        return view($view)->with('program', $program);
    }

    public function compile_view($program, $day = Null) {
        # TODO: Update this to /programs/...
        # Use for /tests/test right now
        if ($day) {
            $view = "/programs/" . $program . "/" . $day;
        } else {
            $view = "/programs/" . $program . "/home";
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
	$directory = "../resources/views/_compiled/" . $program;
	if (!file_exists($directory)) {
		mkdir($directory, 0755, true);
	}
	$filename = "../resources/views/_compiled/" . $program . "/" . $day . ".blade.php";
        $myfile = fopen($filename, "w") or die("Unable to open file!");
        fwrite($myfile, $mjml_output);
        fclose($myfile);

        #echo "done";
    }

    public function compile_plan($program) {
        # Array of filenames.
        $files = scandir("../resources/views/programs/" . $program);
        $file_stems = array();

        # Get just the first part.
        for($x = 0; $x < count($files); $x++) {
            $file_stems[$x] = explode(".", $files[$x])[0];
        }
	array_splice($file_stems, 0, 2);
	print_r($file_stems);

        # Run each through the compiler.
        for($y = 0; $y < count($file_stems); $y++) {
            $this->compile_view($program, $file_stems[$y]);
        }

        echo "Compiled plan. Visit at /comp/" . $program . "/ .";
    }
}
