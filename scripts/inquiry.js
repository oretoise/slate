// Function to pull cookie data.
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

// Function to grab our UTM cookie.
function grabUTM() {
	var params = getCookie("distance_utm");
	if (params != "") {
		
		// Build JS object with each parameter.
		var param_array = params.split(",");
		var param_obj = {};
		var i;
		for (i = 0; i < (param_array.length - 1); i++) {
			var param_parts = param_array[i].split("=");
			param_obj[param_parts[0]] = param_parts[1];
		}

		return param_obj;
	}
}

function setMasterStudentType(level) {
    // Set Master Student Type to $level
    var $master_student_type_field = $("[data-export='sys:field:master_student_type']").find(".form_responses").find("select");
    $master_student_type_field.children('[data-text="' + level + '"]').prop('selected', true);

    // Set {level}_entry_term to other entry_term field value.
    $key = "";
    $other = "";
    if (level == "Graduate") {
        $key = "ug_entry_term";
        $other = "gr_entry_term";
    } else {
        $key = "gr_entry_term";
        $other = "ug_entry_term";
    }

    // Grab currently selected value.
    var $current_select = $("[data-export='sys:field:" + $key + "']").find(".form_responses").find("select");
    var $select_value = $current_select.find(":selected").attr("data-text");
    
    // Set other one to that value.
    var $other_select = $("[data-export='sys:field:" + $other + "']").find('.form_responses').find('select');
    $other_select.children('[data-text="' + $select_value + '"]').prop("selected", true);

    // Clear old one.
    $current_select.find(":selected").prop("selected", false);

    // Hide old one.
    $("#" + $key).parent().parent().parent().hide();

    // Show new one.
    $("#" + $other).parent().parent().parent().show();
}

function setProgram(level, program) {
    // Set UG Academic Interest or GR Academic Interest to specified data-text

    // Determine which field.
    var $key = "";
    if (level == "Graduate") { $key = "gr_aca_int"; } else { $key = "ug_aca_int"; }

    // Grab field.
    var $program_field = $("[data-export='sys:field:" + $key + "']").find(".form_responses").find("select");

    // Set value.
    $program_field.children('[data-text="' + program + '"]').prop("selected", true);
}

function setCoordinator(netID) {
    var $coordinator_field = $("[data-export='coordinator_email']").find(".form_responses").find("select");

    $coordinator_field.children('[data-text="' + netID + '"]').prop("selected", true);
    console.log("Set coordinator to " + $coordinator_field.find(":selected").attr("data-text"));
}

// Check if UTM parameters exist.
var utm_params = grabUTM();
if (utm_params != null) {

	// Set hidden fields to cookie values.
	if ('utm_campaign' in utm_params) {
		$("[data-export='sys:field:distance_utm_campaign']").find(".form_responses").find("input").val(utm_params.utm_campaign);
	}
	
	if ('utm_content' in utm_params) {
		$("[data-export='sys:field:distance_utm_content']").find(".form_responses").find("input").val(utm_params.utm_content);
	}
	
	if ('utm_medium' in utm_params) {
		$("[data-export='sys:field:distance_utm_medium']").find(".form_responses").find("input").val(utm_params.utm_medium);
	}
	
	if ('utm_source' in utm_params) {
		$("[data-export='sys:field:distance_utm_source']").find(".form_responses").find("input").val(utm_params.utm_source);
	}

	if ('utm_term' in utm_params) {
		$("[data-export='sys:field:distance_utm_term']").find(".form_responses").find("input").val(utm_params.utm_term);
	}
}

// Certificate Logic Handler
$("[data-export='sys:field:distance_certificate']").find(".form_responses").find("select").change(function() {

    var $select_value = $("[data-export='sys:field:distance_certificate']").find(".form_responses").find("select").find(":selected").attr("data-text");

    switch ($select_value) {
        case "Aeronautical Meteorology Forecaster":
            // Set UG
            setMasterStudentType("Undergraduate");
            // Set BS Geoscience
            setProgram("Undergrad", "Geoscience / Broadcast & Operational Met (BS)");
            $("#level").parent().parent().parent().hide();
            setCoordinator("mwb6");
            break;
        case "Broadcast & Operational Meteorology":
            // Set UG
            setMasterStudentType("Undergraduate");
            // Set BS Geoscience
            setProgram("Undergrad", "Geoscience / Broadcast & Operational Met (BS)");
            $("#level").parent().parent().parent().hide();
            setCoordinator("mwb6");
            break;
        case "Veterans' Certificate":
            // Show "What level?"
            $("#level").parent().parent().parent().show();
            setCoordinator("vdt1");
            break;
        case "Vision Specialist":
            // Set GR
            setMasterStudentType("Graduate");
            // Set program to Unclassified
            setProgram("Graduate", "No Degree / Unclassified-Grad");
            $("#level").parent().parent().parent().hide();
            setCoordinator("vdt1");
            break;
        case "Wellness Coaching Certificate":
            // Set GR
            setMasterStudentType("Graduate");
            // Set program to FNH-HP
            setProgram("Graduate", "Master of Science / Food Sc Nutr. Health Prom (GR) / Health Promotion");
            // Hide "What Level?"
            $("#level").parent().parent().parent().hide();
            setCoordinator("dc716");
    }
});

// Grad program logic handler.
$("[data-export='sys:field:gr_aca_int']").find(".form_responses").find("select").change(function() {

    // Grab value.
    var $select_value = $("[data-export='sys:field:gr_aca_int']").find(".form_responses").find("select").find(":selected").attr("data-text");

    switch ($select_value) {
        case "Doctor of Philosophy / PhD in Community Co Leadership":
            setCoordinator("vdt1");
            break;
        case "Doctor of Philosophy / Computational Engineering":
            setCoordinator("dc716");
            break;
        case "Doctor of Philosophy / Electrical & Computer Eng":
            setCoordinator("dc716");
            break;
        case "Doctor of Philosophy / Engineering / Aerospace Engineering":
            setCoordinator("dc716");
            break;
        case "Doctor of Philosophy / Engineering / Civil Engineering":
            setCoordinator("dc716");
            break;
        case "Doctor of Philosophy / Engineering / Mechanical Engineering":
            setCoordinator("dc716");
            break;
        case "Doctor of Philosophy / Industrial and Systems Eng":
            setCoordinator("dc716");
            break;
        case "Master of Agribusiness Mgt / Agribusiness Mgt":
            setCoordinator("dc716");
            break;
        case "Master of Agriculture / Agriculture / Animal and Dairy Science":
            setCoordinator("dc716");
            break;
        case "Master of Arts in Teaching / Community College Education":
            setCoordinator("vdt1");
            break;
        case "Master of Arts Teach Secondary / Secondary Teacher Alt Route":
            setCoordinator("vdt1");
            break;
        case "Master of Arts Teach Special / Special Ed Alternate Route":
            setCoordinator("vdt1");
            break;
        case "Master of Business Adm / Business Admin.":
            setCoordinator("mj359");
            break;
        case "Master of Business Adm / MBA - Project Management":
            setCoordinator("mj359");
            break;
        case "Master of Engineering / Engineering / General Engineering":
            setCoordinator("dc716");
            break;
        case "Master of Science / Aerospace Engineering":
            setCoordinator("dc716");
            break;
        case "Master of Science / Civil Engineering":
            setCoordinator("dc716");
            break;
        case "Master of Science / Computational Engineering":
            setCoordinator("dc716");
            break;
        case "Master of Science / Early Intervention":
            setCoordinator("dc716");
            break;
        case "Master of Science / Educational Leadership / School Administration":
            setCoordinator("vdt1");
            break;
        case "Master of Science / Electrical & Computer Eng":
            setCoordinator("dc716");
            break;
        case "Master of Science / Food Sc Nutr. Health Prom (GR) / Health Promotion":
            setCoordinator("dc716");
            break;
        case "Master of Science / Forestry":
            setCoordinator("dc716");
            break;
        case "Master of Science / General Biology":
            setCoordinator("mwb6");
            break;
        case "Master of Science / Geoscience / Applied Meteorology":
            setCoordinator("mwb6");
            break;
        case "Master of Science / Geoscience / Environmental Geoscience":
            setCoordinator("mwb6");
            break;
        case "Master of Science / Geoscience / Teachers in Geoscience":
            setCoordinator("mwb6");
            break;
        case "Master of Science / Industrial Engineering / Human Factors & Ergonomics":
            setCoordinator("dc716");
            break;
        case "Master of Science / Industrial Engineering / Industrial Systems":
            setCoordinator("dc716");
            break;
        case "Master of Science / Industrial Engineering / Management Systems":
            setCoordinator("dc716");
            break;
        case "Master of Science / Industrial Engineering / Manufacturing Systems":
            setCoordinator("dc716");
            break;
        case "Master of Science / Industrial Engineering / Operations Research":
            setCoordinator("dc716");
            break;
        case "Master of Science Info Sys / Information Systems":
            setCoordinator("mj359");
            break;
        case "Master of Sci Instr Tech / Instructional Technology / IT Distance Education":
            setCoordinator("vdt1");
            break;
        case "Master of Sci Instr Tech / Instructional Technology / IT Instructional Design":
            setCoordinator("vdt1");
            break;
        case "Master of Sci Instr Tech / Instructional Technology / IT Multimedia":
            setCoordinator("vdt1");
            break;
        case "Master of Science / Mechanical Engineering":
            setCoordinator("dc716");
            break;
        case "Master of Science / Secondary Education":
            setCoordinator("vdt1");
            break;
        case "Master of Science / Workforce Education Leadership":
            setCoordinator("vdt1");
            break;
        case "No Degree / Unclassified-Grad":
            setCoordinator("jdm273");
            break;
    }
});

// Undergrad program logic handler.
$("[data-export='sys:field:ug_aca_int']").find(".form_responses").find("select").change(function() {

    // Grab value.
    var $select_value = $("[data-export='sys:field:ug_aca_int']").find(".form_responses").find("select").find(":selected").attr("data-text");

    switch ($select_value) {
        case "Geoscience / Broadcast & Operational Met (BS)":
            setCoordinator("mwb6");
            break;
        case "Business Administration (BBA)":
            setCoordinator("mj359");
            break;
        case "Elementary Education / Early Childhood (BS)":
            setCoordinator("vdt1");
            break;
        case "Elementary Education / Middle School (BS)":
            setCoordinator("vdt1");
            break;
        case "Industrial Technology (BS)":
            setCoordinator("vdt1");
            break;
        case "Interdisciplinary Studies (BS)":
            setCoordinator("jnh102");
            break;
        case "Psychology (BS)":
            setCoordinator("jnh102");
            break;
        case "Undeclared":
            setCoordinator("jdm273");
            break;
        case "Special Non-Degree (No Degree)":
            setCoordinator("jdm273");
            break;
    }
});

// Logic for "What are you interested in?"
$("#interest").parent().parent().find(".form_responses").find("select").change(function() {
    var $select_value = $("#interest").parent().parent().find(".form_responses").find("select").val();
	
	switch ($select_value) {
        case "Certificate":
            $(".program_option").parent().parent().parent().hide();
            // Show "Certificate"
            $("#certificate").parent().parent().parent().show();
            break;
        case "Graduate Program":
            setMasterStudentType("Graduate");
            $(".program_option").parent().parent().parent().hide();
            // Show "Grad" program list.
            $("#grad_prog").parent().parent().parent().show();
            break;
        case "Undergraduate Program":
            setMasterStudentType("Undergraduate");
            $(".program_option").parent().parent().parent().hide();
            // Show "Undergrad" program list.
            $("#undergrad_prog").parent().parent().parent().show();
            $("#undergrad_prog").parent().parent().find(".form_responses").find("select").prop("disabled", false);
            break;
        case "Unsure":
            $(".program_option").parent().parent().parent().hide();
            // Show "What level?"
            $("#level").parent().parent().parent().show();
            break;
    }
});

// Logic for "What level?"
$("#level").parent().parent().find(".form_responses").find("select").change(function() {
    var $select_value = $("#level").parent().parent().find(".form_responses").find("select").val();

    switch ($select_value) {
        case "Graduate":
            // Set ST
            setMasterStudentType("Graduate");

            // Check for Unsure, if so, set to "Unclassified-Grad"
            var $interest_prompt = $("#interest").parent().parent().find(".form_responses").find("select").val();
            if ($interest_prompt == "Unsure") {
                setProgram("Graduate", "No Degree / Unclassified-Grad");
            }
            // Check for Veterans'
            var $certificate = $("[data-export='sys:field:distance_certificate']").find(".form_responses").find("select").find(":selected").attr("data-text");
            if ($certificate == "Veterans' Certificate") {
                setProgram("Graduate", "No Degree / Unclassified-Grad");
            }
            break;
        case "Undergraduate":
            // Set ST
            setMasterStudentType("Undergraduate");

            // Check for Unsure, if so, set to "Special Non-Degree?"
            var $interest_prompt = $("#interest").parent().parent().find(".form_responses").find("select").val();
            if ($interest_prompt == "Unsure") {
                setProgram("Undergraduate", "Special Non-Degree (No Degree)");
            }
            // Check for Veterans'
            var $certificate = $("[data-export='sys:field:distance_certificate']").find(".form_responses").find("select").find(":selected").attr("data-text");
            if ($certificate == "Veterans' Certificate") {
                setProgram("Undergraduate", "Special Non-Degree (No Degree)");
            }
            break;
    }
});

// Logic for "How did they hear about us?"
$("#how").parent().parent().find(".form_responses").find("select").change(function() {
    var $select_value = $("#how").parent().parent().find(".form_responses").find("select").find(":selected").attr("data-text");
	
	switch ($select_value) {

        case "Event Booth":
            // Hide others.
            $(".how_option").parent().parent().parent().hide();
            // Show "Event Booth"
            $("#event").parent().parent().parent().show();
            break;

        case "Magazine":
            // Hide others.
            $(".how_option").parent().parent().parent().hide();
            // Show "Magazine"
            $("#magazine").parent().parent().parent().show();
            break;
        
        case "Radio":
            // Hide others.
            $(".how_option").parent().parent().parent().hide();
            // Show "Radio"
            $("#radio").parent().parent().parent().show();
            break;
        
        case "Web Search":
            // Hide others.
            $(".how_option").parent().parent().parent().hide();
            // Show "web search"
            $("#web").parent().parent().parent().show();
            break;

        case "Television":
            // Hide others.
            $(".how_option").parent().parent().parent().hide();
            // Show "channel"
            $("#channel").parent().parent().parent().show();
            break;

        case "Social Media":
            // Hide others.
            $(".how_option").parent().parent().parent().hide();
            // Show "social media"
            $("#social_media").parent().parent().parent().show();
            break;
        
        case "Word of Mouth":
            // Hide others.
            $(".how_option").parent().parent().parent().hide();
            // Show "Word of Mouth"
            $("#word_of_mouth").parent().parent().parent().show();
            break;
        
        case "Other":
            // Hide others.
            $(".how_option").parent().parent().parent().hide();
            // Show "Other"
            $("#other").parent().parent().parent().show();
            break;
        
        case "Newspaper":
            // Hide others.
            $(".how_option").parent().parent().parent().hide();
            // Show "Other"
            $("#newspaper").parent().parent().parent().show();
            break;
    }
});

// Remove embedded CSS.
$('link[rel=stylesheet][href~="https://slate-technolutions-net.cdn.technolutions.net/register/embed.css?v=636705271805221515"]').remove();

// Add necessary HTML for Stephanie's formatting.
$(".form_question").wrap("<div class='col-md'></div>");

// Hide program option fields.
$(".program_option").parent().parent().parent().hide();

// Show and disable the undergrad program field.
$("#undergrad_prog").parent().parent().parent().show();
$("#undergrad_prog").parent().parent().find(".form_responses").find("select").prop("disabled", true);

// Hide "How did you hear about us?" fields.
$(".how_option").parent().parent().parent().hide();

// Hide gr_entry_term.
$("#gr_entry_term").parent().parent().parent().hide();

// Show placeholder for "Where did they hear about us?"
$("#placeholder").parent().parent().parent().show();

$(".hideme").parent().parent().parent().hide();