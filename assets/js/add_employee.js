// this function returns the value of radio button of same group
function getSelectedValue(groupName) {
    var radios = document.getElementsByName(groupName);
    for( i = 0; i < radios.length; i++ ) {
        if( radios[i].checked ) {
            return radios[i].value;
        }
    }
    return null;
}

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


function addNationality()
{
    var nationality=getSelectedValue('nationality');
    var permission=getSelectedValue('permission');
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST','addNationality',true);
        var data = new FormData();
        data.append('nationality',nationality);
        data.append('permission',permission);
        data.append('visatype',document.getElementById('visatype').value);
        data.append('passport',document.getElementById('passport').value);
        xmlHttp.send(data);

        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState==4)
            {
              var status = xmlHttp.responseText;
               document.getElementById('responseN').style.display="block";
                     if(status=='true')
                     {
                        document.getElementById('responseN').className="alert alert-success";
                        document.getElementById('responseN').innerHTML="<p>Successfully Updated</p>";
                     }
                  else
                  {
                    document.getElementById('responseN').className="alert alert-danger";
                    document.getElementById('responseN').innerHTML=status;
                  }
            }
        }
}