console.log("yes");

function addStudentCheck()
{
    let name = document.getElementById('s_name').value;
    let email = document.getElementById('s_email').value;
    let mobile = document.getElementById('s_phone').value;
    let classes = document.getElementById('s_classes').value;
    
    if(name=="")
    {
        document.getElementById('nameHint').innerHTML = "Please enter a name";
        return false;
    }
    if(name!="")
    {
        if(/^[a-z A-Z]+$/.test(name))
        {
            document.getElementById('nameHint').innerHTML = "";
        }
        else
        {
            document.getElementById('nameHint').innerHTML = "Name can only be alphabetical";
            return false;
        }
        // document.getElementById('nameHint').innerHTML = "";
    }
    if(email=="")
    {
        document.getElementById('emailHint').innerHTML = "Please enter an email address";
        return false;
    }
    if(email!="")
    {
        document.getElementById('emailHint').innerHTML = "";
    }
    if(mobile=="")
    {
        document.getElementById('mobileHint').innerHTML = "Please enter a mobile number";
    }
    if(mobile!="")
    {
        if(/^[0-9]+$/.test(mobile))
        {
            document.getElementById('mobileHint').innerHTML = "";
        }
        else
        {
            document.getElementById('mobileHint').innerHTML = "Mobile can only be numeric";
            return false;
        }
        if(classes=="")
    {
        document.getElementById('classesHint').innerHTML = "Please enter class";
        return false;
    }
    if(classes!="")
    {
        document.getElementById('classesHint').innerHTML = "";
    }
        
        // document.getElementById('mobileHint').innerHTML = "";
    }

    var formData = new FormData();
    formData.append('name', name);
    formData.append('email', email);
    formData.append('mobile', mobile);
    formData.append('class', classes);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
        {
            document.getElementById('submitHint').innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "../controller/addstudentcheck.php", true);
    // xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(formData);

    return false;
}