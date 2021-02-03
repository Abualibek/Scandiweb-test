
// var optionSize = document.getElementById("optionSize");
// var optionWeight = document.getElementById("optionWeight");
// var optionDimensions = document.getElementById("optionDimensions");

// document.getElementById("size").style.display = "block";
// var height = document.getElementById("height");
// var width = document.getElementById("width");
// var length = document.getElementById("length");
// var weight = document.getElementById("weight");

function myFunction() {
    var types = document.getElementById("typeSwitcher").value;
    switch (types) {
        case "optionMovie":
            document.getElementById("size").style.display = "block";
            document.getElementById("height").style.display = "none";
            document.getElementById("dimensionHeight").value = '';
            document.getElementById("width").style.display = "none";
            document.getElementById("dimensionWidth").value = '';
            document.getElementById("length").style.display = "none";
            document.getElementById("dimensionLength").value = '';
            document.getElementById("weight").style.display = "none";
            document.getElementById("weightKG").value = '';
            break;
        case "optionBook":
            document.getElementById("size").style.display = "none";
            document.getElementById("sizeMB").value = '';
            document.getElementById("height").style.display = "none";
            document.getElementById("dimensionHeight").value = '';
            document.getElementById("width").style.display = "none";
            document.getElementById("dimensionWidth").value = '';
            document.getElementById("length").style.display = "none";
            document.getElementById("dimensionLength").value = '';
            document.getElementById("weight").style.display = "block";
            break;
        case "optionFurniture":
            document.getElementById("size").style.display = "none";
            document.getElementById("sizeMB").value = '';
            document.getElementById("height").style.display = "block";
            document.getElementById("dimensionHeight").value = '';
            document.getElementById("width").style.display = "block";
            document.getElementById("dimensionWidth").value = '';
            document.getElementById("length").style.display = "block";
            document.getElementById("dimensionLength").value = '';
            document.getElementById("weight").style.display = "none";
            document.getElementById("weightKG").value = '';
            break;
        default:
            
    }
}

function numbersOnly(input){
    var regex = /[^0-9]/g;
    input.value = input.value.replace(regex, "");
}
