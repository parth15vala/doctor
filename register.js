function data()
    {

    
        var a=document.getElementById("n1").value;
        var b=document.getElementById("n2").value;
        var c=document.getElementById("n3").value;
        var d=document.getElementById("n4").value;

        if(a==""||b==""||c==""||d=="")
        {
            alert("All Fields are mendatory");
            return false;
         } 
         else if(c!=d)
         {
            alert("please enter same password");
         }
         else
        {
                true;
        }


        
    }