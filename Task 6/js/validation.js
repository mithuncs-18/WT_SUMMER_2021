function validateForm() {
    var fname = document.getElementById("fname").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var cmt = document.getElementById("cmt").value;
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var other = document.getElementById("other");
    var hobby1 = document.getElementById("hobby1");
    var hobby2 = document.getElementById("hobby2");
    var hobby3 = document.getElementById("hobby3");
    var file = document.getElementById("filetoupload").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    if (fname == "") {
     document.getElementById("err-fname").innerHTML="you must enter name";
      return false;
    }else if(fname.length < 5){
        document.getElementById("err-fname").innerHTML="Must input 5 character ";
    }
    if(email == ""){
        document.getElementById("err-email").innerHTML="you must enter email";
        return false;
    }else if(!res){

      document.getElementById("err-email").innerHTML="Please input correct format";
      return false; 
    }
    if (pass == "") {
     document.getElementById("err-pass").innerHTML="Enter a password";
      return false;
    }else if(pass.length < 4){
        document.getElementById("err-pass").innerHTML="Must enter long password";
    }
    
    if (cmt == "") {
        document.getElementById("err-cmt").innerHTML="Enter comment here";
        return false;
    }else if(cmt.length < 6){
        document.getElementById("err-cmt").innerHTML="Please type some longer comment";
    }
    if (!male.checked && !female.checked && !other.checked) {
        document.getElementById("err-gender").innerHTML="Choose your gender";
        return false;
    }
    if (!hobby1.checked && !hobby2.checked&& !hobby3.checked) {
    document.getElementById("err-chkbox").innerHTML="Select anyone";
        return false;
    }
    if (file == "") {
        document.getElementById("err-file").innerHTML="Please upload a file";
        return false;
    }
    
}