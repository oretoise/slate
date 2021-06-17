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

// Check if UTM parameters exist.
var utm_params = grabUTM();
if (utm_params != null) {
    var params = ["utm_campaign", "utm_content", "utm_medium", "utm_source", "utm_term"];

    params.forEach(function(value) {
        if (value in utm_params) {
            $("[data-export='sys:field:distance_" + value + "']").find(".form_responses").find("input").val(utm_params[value]);
            console.log(utm_params[value])
        }
    });
}

// Function to set coordinator data-text
function setCoordinator(netID) {
    var $coordinator_field = $("[data-export='coordinator_email']").find(".form_responses").find("select");
    $coordinator_field.children('[data-text="' + netID + '"]').prop("selected", true);
    console.log(netID);
}

function setProgram(level, program) {
    // Set UG Academic Interest or GR Academic Interest to specified data-text

    // Determine which field.
    if (level == "Graduate") {
        var $program_field = $("#grad_prog").parent().parent().find(".form_responses").find("select");
        var $other = $("#undergrad_prog").parent().parent().find(".form_responses").find("select");
    } else {
        var $program_field = $("#undergrad_prog").parent().parent().find(".form_responses").find("select");
        var $other = $("#grad_prog").parent().parent().find(".form_responses").find("select");
    }

    // Grab field.
    console.log($program_field);
    $other.prop("selectedIndex", 0);
    // Set value.
    $program_field.children('[data-text="' + program + '"]').prop("selected", true);
    console.log(program);
}

// Logic for "What are you interested in?"
$("#interest").parent().parent().find(".form_responses").find("select").change(function() {
    $(".concentration").parent().parent().parent().hide();
    $("#undergrad_prog").parent().parent().find(".form_responses").find("select").prop("selectedIndex", 0);
    $("#grad_prog").parent().parent().find(".form_responses").find("select").prop("selectedIndex", 0);
    $("#certificate").parent().parent().find(".form_responses").find("select").prop("selectedIndex", 0);
    
    var $select_value = $("#interest").parent().parent().find(".form_responses").find("select").val();

    var dict = {
        "Certificate": "#certificate",
        "Graduate Program": "#grad_prog",
        "Undergraduate Program": "#undergrad_prog",
        "General Education Question": ""
    };

    // If they select general question, set the coordinator to dc716 and hide program fields.
    if ($select_value == "General Education Question") {
        setCoordinator('acw338');

        // Hide program fields.
        $(".program_option").parent().parent().parent().hide();
    } else {
        // Hide Others
        $(".program_option").parent().parent().parent().hide();
        $(dict[$select_value]).parent().parent().parent().show();

        // Enable undergraduate field if that's what they picked.
        if (dict[$select_value] == "#undergrad_prog") {
            $("#undergrad_prog").parent().parent().find(".form_responses").find("select").prop("disabled", false);
        }
    }
});

// Grad program logic handler.
$("#grad_prog").parent().parent().find(".form_responses").find("select").change(function() {
    $(".concentration").parent().parent().parent().hide();
    $("#undergrad_prog").parent().parent().find(".form_responses").find("select").prop("selectedIndex", 0);
    $("#certificate").parent().parent().find(".form_responses").find("select").prop("selectedIndex", 0);

    // Grab value.
    var $select_value = $("#grad_prog").parent().parent().find(".form_responses").find("select").find(":selected").attr("data-text");

    // Dict to store program:coordinator relationships
    var dict = {
        "MA Foreign Languages": "mwb6",
        "MA Teaching - Community College Education": "vdt1",
        "MA Teaching - Secondary Education": "vdt1",
        "MA Teaching - Special Education": "vdt1",
        "Master of Agribusiness Management": "dc716",
        "Master of Agriculture": "dc716",
        "Master of Business Administration (MBA)": "sam103",
        "Master of Engineering": "dc716",
        "Master of Professional Accountancy": "sam103",
        "Master of Taxation": "sam103",
        "MBA - Project Management": "sam103",
        "MS Aerospace Engineering:": "dc716",
        "MS Chemical Engineering": "dc716",
        "MS Civil Engineering": "dc716",
        "MS Computational Engineering": "dc716",
        "MS Computer Science": "dc716",
        "MS Conservation Education": "dc716",
		"MS Cyber Security and Operations": "dc716",
        "MS Early Intervention": "dc716",
        "MS Electrical & Computer Engineering": "dc716",
        "MS Food Science, Nutrition, Health Promotion": "dc716",
        "MS Forestry": "dc716",
        "MS General Biology": "mwb6",
        "MS Geoscience - Applied Meteorology": "mwb6",
        "MS Geosciences - Environmental Geoscience": "mwb6",
        "MS Geosciences - Teachers in Geoscience": "mwb6",
        "MS in Educational Leadership - School Administration": "vdt1",
        "MS in Industrial & Systems Engineering": "dc716",
        "MS Information Systems": "sam103",
        "MS Instructional Technology": "vdt1",
        "MS Mechanical Engineering": "dc716",
        "MS Secondary Education": "vdt1",
        "MS Sustainable Bioproducts": "dc716",
        "MS Workforce Education Leadership": "vdt1",
        "No Degree / Unclassified-Grad": "dc716",
        "PhD Aerospace Engineering": "dc716",
        "PhD Civil Engineering": "dc716",
        "PhD Community College Leadership": "vdt1",
        "PhD Computational Engineering": "dc716",
		"PhD Computer Science": "dc716",
        "PhD Electrical & Computer Engineering": "dc716",
        "PhD Engineering / Engineering Education": "dc716",
        "PhD Industrial and Systems Engineering": "dc716",
        "PhD Instructional Systems & Workforce Development": "vdt1",
        "PhD Mechanical Engineering": "dc716"
    }

    setCoordinator(dict[$select_value]);

    // If MS Industrial, show indust_concentration field
    if ($select_value == "MS Industrial Engineering") {
        $("#indust_concentration").parent().parent().parent().show();
    }

    // If MS Instructional, show instruct_concentration field
    if ($select_value == "MS Instructional Technology") {
        $("#instruct_concentration").parent().parent().parent().show();
    }
});

// Undergrad program logic handler.
$("#undergrad_prog").parent().parent().find(".form_responses").find("select").change(function() {
    $(".concentration").parent().parent().parent().hide();
    $("#grad_prog").parent().parent().find(".form_responses").find("select").prop("selectedIndex", 0);
    $("#certificate").parent().parent().find(".form_responses").find("select").prop("selectedIndex", 0);

    // Grab value.
    var $select_value = $("#undergrad_prog").parent().parent().find(".form_responses").find("select").find(":selected").attr("data-text");

    var dict = {
        "Applied Science (BAS)": "kmd160",
        "BA in Communication - Public Relations": "mhm49",
        "BS Educational Psychology": "vdt1",
        "BS Human Development and Family Science": "dc716",
        "Business Administration (BBA)": "sam103",
        "Elementary Education (BS)": "vdt1",
        "Geoscience / Broadcast & Operational Met (BS)": "mwb6",
        "History (BA)": "mwb6",
        "Industrial Technology (BS)": "vdt1",
        "Interdisciplinary Studies (BS)": "jnh102",
        "Psychology (BS)": "jnh102",
        "Special Non-Degree (No Degree)": "mwb6",
        "Undeclared": "mwb6"
    }

    setCoordinator(dict[$select_value]);
    // If ElemEd, show elemed_concentration field
    if ($select_value == "Elementary Education (BS)") {
        $("#elemed_concentration").parent().parent().parent().show();
    }
});

// Certificate Logic Handler
$("#certificate").parent().parent().find(".form_responses").find("select").change(function() {
    $(".concentration").parent().parent().parent().hide();

    var $select_value = $("#certificate").parent().parent().find(".form_responses").find("select").find(":selected").attr("data-text");

    // Hide level by default.
    $("#level").parent().parent().parent().hide();

    switch ($select_value) {
        case "Aeronautical Meteorology Forecaster Certificate":
            setProgram("Undergrad", "Geoscience / Broadcast & Operational Met (BS)");
            setCoordinator("mwb6");
            break;
        
        case "Applied Behavior Analysis Certificate":
            setCoordinator("vdt1");
            break;
        
        case "Broadcast & Operational Meteorology Certificate":
            setProgram("Undergrad", "Geoscience / Broadcast & Operational Met (BS)");
            setCoordinator("mwb6");
            $("#bomp_concentration").parent().parent().parent().show();
            break;
        case "Companion Animal Management Certificate":
            $("#level").parent().parent().parent().show();
            setCoordinator("dc716");
            break;
        
        case "General Biology Certificate":
            setCoordinator("mwb6");
            break;
        
        case "GIS Certificate":
            setCoordinator("mwb6");
            break;
        
        case "Veterans' Certificate":
            $("#level").parent().parent().parent().show();
            setCoordinator("vdt1");
            break;
        case "Vision Specialist Certificate":
            setProgram("Graduate", "No Degree / Unclassified-Grad");
            setCoordinator("vdt1");
            break;
        case "Wellness Coaching Certificate":
            setProgram("Graduate", "MS Food Science, Nutrition, Health Promotion");
            setCoordinator("dc716");
    }
});

// Logic for "How did they hear about us?"
$("#how").parent().parent().find(".form_responses").find("select").change(function() {
    var $select_value = $("#how").parent().parent().find(".form_responses").find("select").find(":selected").attr("data-text");

    var dict = {
        "Event Booth": "#event",
        "Magazine": "#magazine",
        "Radio": "#radio",
        "Web Search": "#web",
        "Television": "#channel",
        "Social Media": "#social_media",
        "Word of Mouth": "#word_of_mouth",
        "Other": "#other",
        "Newspaper": "#newspaper"
    };

    // Hide Others
    $(".how_option").parent().parent().parent().hide();
    $(dict[$select_value]).parent().parent().parent().show();
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

// Show placeholder for "Where did they hear about us?"
$("#placeholder").parent().parent().parent().show();

$(".hideme").parent().parent().parent().hide();

// Fix font size.
$("legend").css("font-size", "1rem");

// Fix submit button CSS.
$(".action").addClass("form_action");