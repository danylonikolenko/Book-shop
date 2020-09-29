function ValidateOrder() {
    var checkNameOrder = false;
    var checkNumberOrder = false;
    var checkEmailOrder = false;

        if($(".orderName").val() == ''){
            $(".orderName").css("border-bottom","2px solid red");
            checkNameOrder = false;
        }else {
            $(".orderName").css("border-bottom","1px solid rgba(102,157,255,0.95)");
            checkNameOrder = true;
        }
        if($(".orderNumber").val().length < 8){
            $(".orderNumber").css("border-bottom","2px solid red");
            checkNumberOrder = false;
        }else {
            $(".orderNumber").css("border-bottom","1px solid rgba(102,157,255,0.95)");
            checkNumberOrder = true;
        }
        if($(".orderEmail").val() == ''){
            $(".orderEmail").css("border-bottom","2px solid red");
            checkEmailOrder = false;
        }else {
            $(".orderEmail").css("border-bottom","1px solid rgba(102,157,255,0.95)");
            checkEmailOrder = true;
        }
    if(checkEmailOrder&&checkNumberOrder&&checkNameOrder){
        alert("Thanks for your order!");
        $("#makeOrderForm").submit();
    }
}
function registrationFun(){

    var username = false;
    var password = false;
    var password2 = false;
    var emailReg = false;
    var num = false;


    if (document.getElementById('username').value == '') {
        document.getElementById('username').style.borderBottom = '2px red solid';
        // document.getElementById('usernameError').innerHTML="";
        document.getElementById('usernameError').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your login!!!</div>";
        username = false;
    }
    if(document.getElementById('username').value != ''){

//REGEX
        var letters = /^[A-Za-z]+$/;
        if(document.getElementById('username').value.match(letters)){
            document.getElementById('username').style.borderBottom = "1px black solid";
            document.getElementById('usernameError').innerHTML="";
            username = true;

        }else {
            username = false;
            // if(!document.getElementById('username').value.match(letters)){
            //     document.getElementById('username').style.borderBottom = '2px solid red';
            //     document.getElementById('usernameError').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Only english letters in name!!!</div>";
            //     username = false;
            //
            // }
        }


        // document.getElementById('username').style.borderBottom = '2px black solid';
        // document.getElementById('usernameError').innerHTML="";

    }
    //email
    if (document.getElementById('email').value == '') {
        document.getElementById('email').style.borderBottom = '2px red solid';
        //document.getElementById('emailError').innerHTML="";
        document.getElementById('emailError').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your email!!!</div>";
        emailReg = false;
    }
    if(document.getElementById('email').value != '')
    {
        document.getElementById('email').style.borderBottom = '2px black solid';
        document.getElementById('emailError').innerHTML="";
        emailReg = true;

    }
    //numer



    if (document.getElementById('numerTelef').value.length < 8 ) {
        document.getElementById('numerTelef').style.borderBottom = '2px red solid';
        //document.getElementById('numerError').innerHTML="";
        document.getElementById('numerError').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write  your number, more than 8!!!</div>";
        num = false;
    }
    if(document.getElementById('numerTelef').value.length > 8)
    {
        document.getElementById('numerTelef').style.borderBottom = '2px black solid';
        document.getElementById('numerError').innerHTML="";
        num = true;
    }
    //password1

    if(document.getElementById('pass1').value.length<8){
        document.getElementById('pass1').style.borderBottom = '2px red solid';
        document.getElementById('pass1Error').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Password must have 8 symbols or more!!!</div>";
        password = false;
    }
    if(document.getElementById('pass1').value != '' && document.getElementById('pass1').value.length>8 )
    {
        document.getElementById('pass1').style.borderBottom = '2px black solid';
        document.getElementById('pass1Error').innerHTML="";
        password = true;

    }
    if(document.getElementById('pass2').value == '' )
    {
        document.getElementById('pass2').style.borderBottom = '2px black solid';
        document.getElementById('pass2Error').innerHTML="Passwords must be the same";
        password2 = false;

    }
    //pass2
    if (document.getElementById('pass2').value != document.getElementById('pass1').value) {
        document.getElementById('pass2').style.borderBottom = '2px red solid';
        //document.getElementById('pass2Error').innerHTML="";
        document.getElementById('pass2Error').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Incorrect password!!!!</div>";
        password2 = false;
    }
    if(document.getElementById('pass2').value == document.getElementById('pass1').value)
    {
        document.getElementById('pass2').style.borderBottom = '2px black solid';
        document.getElementById('pass2Error').innerHTML="";
        password2 = true;
    }
     alert(password);
    alert(password2);
    alert(username);
    alert(num);
    alert(emailReg);
    if(password==true&&password2==true&&username==true&&num==true&&emailReg==true){
        document.getElementById('regFormId').submit();
    }

}
function ValidateBook() {

    var checkValidateArticleTitle = 1;
    var checkValidateArticleAuthor = 1;
    var checkValidateTxt = 1;

    var checkPrice = parseFloat($("#priceBook").val());
    $("#priceBook").val(checkPrice);

    if (document.getElementById('newArticleTxt').value=='')
    {

        document.getElementById('newArticleTxt').style.borderBottom = '2px solid red';
        document.getElementById('txtErrors').innerHTML="";
        document.getElementById('txtErrors').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write text!!!</div>";
        checkValidateTxt = 0;

    }
    if(document.getElementById('newArticleTxt').value != '')
    {
        document.getElementById('newArticleTxt').style.borderBottom = "1px black solid";
        document.getElementById('txtErrors').innerHTML="";
        checkValidateTxt = 1;

    }

    if (document.getElementById('title').value == '') {
        document.getElementById('title').style.borderBottom = '2px solid red';
        document.getElementById('titleErrors').innerHTML="";
        document.getElementById('titleErrors').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your title!!!</div>";
        checkValidateArticleTitle = 0;

    }
    if(document.getElementById('title').value != '')
    {
        document.getElementById('title').style.borderBottom = "1px black solid";
        document.getElementById('titleErrors').innerHTML="";
        checkValidateArticleTitle = 1;

    }



    if(checkValidateArticleTitle == 1&&checkValidateTxt==1){

        document.getElementById('addArticleModalId').submit();

    }
}
function ValidateLog() {

    var checkName = false;
    var checkPass = false;


    if (document.getElementById('logIn').value == '') {
        document.getElementById('logIn').style.borderBottom = '2px solid red';
        document.getElementById('errorsInp').innerHTML="";
        document.getElementById('errorsInp').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your login!!!</div>";
        checkName = false;
    }
    if($('#logIn').val() != '')
    {
        document.getElementById('logIn').style.borderBottom = '2px black solid';
        document.getElementById('errorsInp').innerHTML="";
        checkName = true;
    }

    if (document.getElementById('passLog').value == '') {
        document.getElementById('passLog').style.borderBottom = '2px red solid';
        document.getElementById('errorsInpPass').innerHTML="";
        document.getElementById('errorsInpPass').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your password!!!</div>";
        checkPass = false;
    }else if(document.getElementById('passLog').value.length<8){
        document.getElementById('errorsInpPass').innerHTML="";
        document.getElementById('errorsInpPass').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Password must have 8 symbols or more!!!</div>";
        checkPass = false;

    }else
    {
        document.getElementById('errorsInpPass').innerHTML="";
        document.getElementById('passLog').style.borderBottom = '2px black solid';
        checkPass = true;

    }

    if(checkName && checkPass){
        document.getElementById('loginFormId').submit();
    }

}


var modalAccount = document.getElementById('account');
var closeAccount = document.getElementsByClassName("closeAccount")[0];
$('#myAccount').click(function(){

    modalAccount.style.display = "block"
});
closeAccount.onclick = function () {
    modalAccount.style.display = "none";
};

var modal = document.getElementById('myModal');
var span = document.getElementsByClassName("close")[0];

$('#writearticle').click(function(){

    modal.style.display = "block"
});
span.onclick = function () {
    modal.style.display = "none";
};
window.onclick = function (event) {
    if(event.target == modal){
        modal.style.display = "none";
    }
};

var modalLog = document.getElementById("myLog");
var closeLog = document.getElementsByClassName("closeLog")[0];

$('.logIn').click(function(){

    modalLog.style.display = "block";

});
closeLog.onclick = function () {
    modalLog.style.display = "none";

};
window.onclick = function (event) {
    if(event.target == modalLog){
        modalLog.style.display = "none";
    }
};

var modalReg =document.getElementById("myReg");
var closeReg = document.getElementsByClassName("closeReg")[0];

$('.goReg').click(function(){

    modalReg.style.display = "block";



});
closeReg.onclick = function () {
    modalReg.style.display = "none";

};
window.onclick = function (event) {
    if(event.target == modalReg){
        modalReg.style.display = "none";

    }
};


