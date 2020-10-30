// Function to set coordinator data-text
function setCoordinator(netID) {
    var $coordinator_field = $("[data-export='coordinator_email']").find(".form_responses").find("select");
    $coordinator_field.children('[data-text="' + netID + '"]').prop("selected", true);
    console.log(netID);
}

function setProgram(program) {
    // Set Distance Academic Program to specified data-text
    var $program_field = $("#program").parent().parent().find(".form_responses").find("select");
    $program_field.children('[data-text="' + program + '"]').prop("selected", true);
    console.log(program);
}

// Program logic handler.
$("#program").parent().parent().find(".form_responses").find("select").change(function() {

    // Grab value.
    var $select_value = $("#program").parent().parent().find(".form_responses").find("select").find(":selected").attr("data-text");

    // Dict to store program:coordinator relationships
    var dict = {
        "Aeronautical Meteorology Forecaster Certificate": "mwb6",
        "Applied Behavior Analysis Certificate": "vdt1",
        "Applied Science (BAS)": "kmd160",
        "Broadcast & Operational Meteorology Certificate": "mwb6",
        "BS Educational Psychology": "jnh102",
        "Business Administration (BBA)": "mj359",
        "Companion Animal Management Certificate": "dc716",
        "Elementary Education (BS)": "vdt1",
        "General Biology Certificate": "mwb6",
        "Geoscience / Broadcast & Operational Met (BS)": "mwb6",
        "GIS Certificate": "mwb6",
        "History (BA)": "mwb6",
        "Industrial Technology (BS)": "vdt1",
        "Interdisciplinary Studies (BS)": "jnh102",
        "MA Foreign Languages": "mwb6",
        "MA Teaching - Community College Education": "vdt1",
        "MA Teaching - Secondary Education": "vdt1",
        "MA Teaching - Special Education": "vdt1",
        "Master of Agribusiness Management": "dc716",
        "Master of Agriculture": "dc716",
        "Master of Business Administration (MBA)": "mj359",
        "Master of Engineering": "dc716",
        "MBA - Project Management": "mj359",
        "MS Aerospace Engineering:": "dc716",
        "MS Civil Engineering": "dc716",
        "MS Computational Engineering": "dc716",
        "MS Computer Science": "dc716",
        "MS Conservation Education": "dc716",
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
        "MS Information Systems": "mj359",
        "MS Instructional Technology": "vdt1",
        "MS Mechanical Engineering": "dc716",
        "MS Secondary Education": "vdt1",
        "MS Sustainable Bioproducts": "dc716",
        "MS Workforce Education Leadership": "vdt1",
        "No Degree / Unclassified-Grad": "dc716",
        "PhD Aerospace Engineering": "dc716",
        "PhD Chemical Engineering": "dc716",
        "PhD Civil Engineering": "dc716",
        "PhD Community College Leadership": "vdt1",
        "PhD Computational Engineering": "dc716",
        "PhD Electrical & Computer Engineering": "dc716",
        "PhD Engineering / Engineering Education": "dc716",
        "PhD Industrial and Systems Engineering": "dc716",
        "PhD Mechanical Engineering": "dc716",
        "Psychology (BS)": "jnh102",
        "Special Non-Degree (No Degree)": "mwb6",
        "Undeclared": "mwb6",
        "Veterans' Certificate": "vdt1",
        "Vision Specialist Certificate": "vdt1",
        "Wellness Coaching Certificate": "dc716"
    }

    setCoordinator(dict[$select_value]);
});

// Remove embedded CSS.
$('link[rel=stylesheet][href~="https://slate-technolutions-net.cdn.technolutions.net/register/embed.css?v=636705271805221515"]').remove();

// Add necessary HTML for Stephanie's formatting.
$(".form_question").wrap("<div class='col-md'></div>");

// Fix font size.
$("legend").css("font-size", "1rem");
$(".action").addClass("form_action");