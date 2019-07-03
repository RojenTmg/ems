
function addcontact()
{
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST','addContact',true);
        var data = new FormData();
        data.append('permanentaddress',document.getElementById('permanentaddress').value);
        data.append('currentaddress',document.getElementById('currentaddress').value);
        data.append('dob',document.getElementById('dob').value);
        data.append('contact',document.getElementById('contact').value);
        data.append('email',document.getElementById('email').value);
        xmlHttp.send(data);

        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState==4)
            {
              var status = xmlHttp.responseText;
               document.getElementById('responseC').style.display="block";
                     if(status=='true')
                     {
                        document.getElementById('responseC').className="alert alert-success";
                        document.getElementById('responseC').innerHTML="<p>Successfully Updated</p>";
                     }
                  else
                  {
                    document.getElementById('responseC').className="alert alert-danger";
                    document.getElementById('responseC').innerHTML=status;
                  }
            }
        }
}

function general()
{
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST','addGeneral',true);
        var data = new FormData();
        data.append('title',document.getElementById('title').value);
        data.append('firstname',document.getElementById('firstname').value);
        data.append('middlename',document.getElementById('middlename').value);
        data.append('surname',document.getElementById('surname').value);
        xmlHttp.send(data);

        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState==4)
            {
              var status = xmlHttp.responseText;
               document.getElementById('responseG').style.display="block";
                     if(status=='true')
                     {
                        document.getElementById('responseG').className="alert alert-success";
                        document.getElementById('responseG').innerHTML="<p>Successfully Updated</p>";
                     }
                  else
                  {
                    document.getElementById('responseG').className="alert alert-danger";
                    document.getElementById('responseG').innerHTML=status;
                  }
            }
        }
}