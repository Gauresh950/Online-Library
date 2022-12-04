
function validation(){
    var returnval = true;

    var name = document.getElementById("input1").value;
    document.getElementsByClassName('Error1')[0].innerHTML = ""
    if (name.length<4){
        document.getElementsByClassName('Error1')[0].innerHTML = "*Name too Short"
        returnval=false;
    }

    var email = document.getElementById("input2").value;
    document.getElementsByClassName('Error2')[0].innerHTML = ""
    if (email.length>25){
        document.getElementsByClassName('Error2')[0].innerHTML = "*Email too Long"
        returnval=false;
    }

    var mobile = document.getElementById("input3").value;
    document.getElementsByClassName('Error3')[0].innerHTML = ""
    if (mobile.length!=10){
        document.getElementsByClassName('Error3')[0].innerHTML = "*Invalid Number"
        returnval=false;
    }

    var dep = document.getElementById("input4").value;
    document.getElementsByClassName('Error4')[0].innerHTML = ""
    if (dep.length>20){
        document.getElementsByClassName('Error4')[0].innerHTML = "*Invalid Department"
        returnval=false;
    }

    var sem = document.getElementById("input5").value;
    document.getElementsByClassName('Error5')[0].innerHTML = ""
    if (sem >8){
        document.getElementsByClassName('Error5')[0].innerHTML = "*Invalid Semester"
        returnval=false;
    }

    var pass = document.getElementById("input6").value;
    document.getElementsByClassName('Error6')[0].innerHTML = ""
    if (pass.length<4){
        document.getElementsByClassName('Error6')[0].innerHTML = "*Password too short"
        returnval=false;
    }

    var cpass = document.getElementById("input7").value;
    document.getElementsByClassName('Error7')[0].innerHTML = ""
    if (cpass != pass){
        document.getElementsByClassName('Error7')[0].innerHTML = "*Password MissMatch"
        returnval=false;
    }

    if(returnval==true){
        window.location.assign("login.html");
    }
    return;
    
}
