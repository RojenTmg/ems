 function addGeneral()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addGeneral',true);
          var data = new FormData();
          var firstname =document.getElementById('firstname').value;
          var surname=document.getElementById('surname').value
          var password= firstname.toLowerCase().substring(0,2)+surname.toLowerCase().substring(0,2)+'123';

          data.append('title',document.getElementById('title').value);
          data.append('firstname',firstname);
          data.append('middlename',document.getElementById('middlename').value);
          data.append('surname',surname);
          data.append('password',password);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('general-form',status,'Employee Added Successfully');
               document.getElementById("general-form").reset();
              }
          }
  }
