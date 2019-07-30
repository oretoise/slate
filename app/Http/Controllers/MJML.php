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
}
