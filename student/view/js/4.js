
function isValid(){
      var Search=document.forms["mForm"]["Search"].value;
     
      
      if(Search==="")
      {
        document.getElementById("searchErr").innerHTML="Field Empty";

        return false;
      }
    }
 
     