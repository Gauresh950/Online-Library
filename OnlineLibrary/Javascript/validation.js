function seterror(id, error){
 element = document.getElementById(id);
 element.getElementsByClassName('Error')[0].innerHTML= error;
}


function validate(){
    var returnval = true;

    var name = document.forms['Signin']["name"].value;
    seterror("input1","");
    if (name.length<4){
        seterror("input1","*Name too Short");
        returnval=false;
    }

    var email = document.forms['Signin']["email"].value;
    seterror("input2","");
    if (email.length>25){
        seterror("input2","*Email too Long");
        returnval=false;
    }

    var mobile = document.forms['Signin']["mobile"].value;
    seterror("input3","");
    if (mobile.length!=10){
        seterror("input3","*Invalid Mobile Number");
        returnval=false;
    }

    var dep = document.forms['Signin']["dep"].value;
    seterror("input4","");
    if (dep == '0'){
        seterror("input4","*Select Department");
        returnval=false;
    }

    var sem = document.forms['Signin']["sem"].value;
    seterror("input5","");
    if (sem == 0){
        seterror("input5","*Select Semester");
        returnval=false;
    }

    var pass = document.forms['Signin']["password"].value;
    seterror("input6","");
    if (pass.length<4){
        seterror("input6","*Password Too Short");
        returnval=false;
    }

    var cpass = document.forms['Signin']["cpassword"].value;
    seterror("input7","");
    if (cpass != pass){
        seterror("input7","*Password Dose not Match");
        returnval=false;
    }
    

    return returnval;
    
}

