// Grab all links to the request form.
// https://stackoverflow.com/questions/10572735/javascript-getelement-by-href
var els = document.querySelectorAll("a[href^='/bas/request-info']");

// Check for UTM parameters.
const getUTMValue = (inputParameter) => {
    for (i = 0; i < utmVariables.length; i++) {
        ParameterName = utmVariables[i].split('=');
        if (ParameterName[0] === inputParameter) {
        return ParameterName[1] === null ? null : ParameterName[1];
        }
    }
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

const valueExists = (value) => {
    return (value != null && value != '' && value != undefined)
}

const utmParams = [
    'utm_source',
    'utm_medium',
    'utm_campaign',
    'utm_content',
    'utm_term'
];

let utmQuery = decodeURIComponent(window.location.search.substring(1)),
    utmVariables = utmQuery.split('&'),
    ParameterName,
    i;

// Check if there's a UTM paramter.
let utmSet = false;

// Store each UTM parameter.
var utmData = {};

utmParams.forEach(param => {

    // Check for existance.
    var pValue = getUTMValue(param);

    if (valueExists(pValue)) {
        utmSet = true;
        utmData[param] = pValue;
        //break;
    };
});

// Build up UTM URL addition.
let utmURLString = "?";
let first_param = True;
for (var key in utmData) {
    var value = utmData[key];

    // Add each to utmURLString.
    if (first_param) {
        utmURLString = utmURLString + key + "=" + value;
    } else {
        utmURLString = utmURLString + "&" + key + "=" + value;
    }
}

// Set all request links to include the utm string.
for (var i = 0, l = els.length; i < l; i++) {
    var el = els[i];
    el.href = el.href + utmURLString;
}