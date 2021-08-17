console.log("yes");

function addTeacherCheck()
{
    let name = document.getElementById('t_name').value;
    let email = document.getElementById('t_email').value;
    let mobile = document.getElementById('t_phone').value;
    
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
        // document.getElementById('mobileHint').innerHTML = "";
    }

    var formData = new FormData();
    formData.append('name', name);
    formData.append('email', email);
    formData.append('mobile', mobile);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
        {
            document.getElementById('submitHint').innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "../controller/addteachercheck.php", true);
    // xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(formData);

    return false;
}