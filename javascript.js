
function open_sign_up()
{
    document.getElementById("container_sign_up").style.display = "block";
    document.getElementById("container_sign_in").style.display = "none";
}

function open_sign_in()
{
    document.getElementById("container_sign_up").style.display = "none";
    document.getElementById("container_sign_in").style.display = "block";
}

function open_form()
{
    document.getElementById("form_back").style.display = "block";
    document.getElementById("form_back_").style.display = "block";
}

function close_form()
{
    document.getElementById("form_back").style.display = "none";
    document.getElementById("form_back_").style.display = "none";
}

function exit()
{
    document.getElementById("email_login").style.border = "3px solid red";
}

function check_()
{
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let c_password = document.getElementById("c_password").value; 
    
    if(name == "")
    {
        document.getElementById("name").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Enter name";
        return false;
    }
    else
    if(!email.includes("@") || !email.includes("."))
    {   
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("email").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Enter a valid email address";
        return false;
    }
    else
    if(password == "")
    {
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("email").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("password").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Enter password";
        return false;
    }
    if(c_password == "")
    {
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("email").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("password").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("c_password").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Confirm password";
        return false;
    }
    if(password != c_password)
    {
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("email").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("password").style.border = "0.17vw solid red";
        document.getElementById("c_password").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Password does not match";
        return false;
    }
    else
    {
        return true;
    }    
}

function check_student_data()
{
    let name = document.getElementById("inp_name").value;
    let email = document.getElementById("inp_email").value;
    let phone = document.getElementById("inp_phone").value;
    let enrol = document.getElementById("inp_enroll").value;
    let date = document.getElementById("inp_date").value;
    
    if(name == "")
    {
        document.getElementById("inp_name").style.border = "0.17vw solid red";
        return false;
    }
    else
    if(!email.includes("@") || !email.includes("."))
    {   
        document.getElementById("inp_name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("inp_email").style.border = "0.17vw solid red";
        return false;
    }
    else
    if(phone == "")
    {
        document.getElementById("inp_name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("inp_email").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("inp_phone").style.border = "0.17vw solid red";
        return false;
    }
    if(enrol == "")
    {
        document.getElementById("inp_name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("inp_email").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("inp_phone").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("inp_enroll").style.border = "0.17vw solid red";
        return false;
    }
    if(date == "")
    {
        document.getElementById("inp_name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("inp_email").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("inp_phone").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("inp_enroll").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("inp_date").style.border = "0.17vw solid red";
        return false;
    }
    else
    {
        return true;
    }
}