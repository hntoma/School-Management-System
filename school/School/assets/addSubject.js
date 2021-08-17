console.log("yes");

function addSubjectCheck()
{
    let name = document.getElementById('su_name').value;
    let classes = document.getElementById('su_class').value;
    let div = document.getElementById('su_div').value;
    
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
    if(classes=="")
    {
        document.getElementById('classHint').innerHTML = "Please enter a class name";
        return false;
    }
    if(classes!="")
    {
        document.getElementById('classHint').innerHTML = "";
    }
    if(div=="")
    {
        document.getElementById('divHint').innerHTML = "Please enter Div name";
    }
    if(div!="")
    {
        // if(/^[0-9]+$/.test(div))
        {
            document.getElementById('divHint').innerHTML = "";
        }
        
        // document.getElementById('divHint').innerHTML = "";
    }

    var formData = new FormData();
    formData.append('name', name);
    formData.append('class', classes);
    formData.append('div', div);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
        {
            document.getElementById('submitHint').innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "../controller/addsubjectcheck.php", true);
    // xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(formData);

    return false;
}