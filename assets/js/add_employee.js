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
               var success='';
               if(status=="true") success="success";
               var JSONObject = JSON.parse(status);
                var elements= document.getElementById('general-form').elements;
                      for(var k in elements){
                         if(elements[k].type=="text"||elements[k].nodeName=="select"){
                           document.getElementById(elements[k].id).style.borderColor="#ced4da";
                            for(var l in JSONObject){
                              if(l=="0") {
                                document.getElementById('message').innerHTML="success";
                                 document.getElementById('message').className="alert alert-success message";
                                $('.message').bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function(e) { $(this).remove(); });
                                break;
                              }
                               if(elements[k].id==l&&l!="true"){
                                document.getElementById(l).style.borderColor="#dc3545";
                               }
                            }
                         }
                      }
              }
          }
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
  function addEmergency()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addEmergency',true);
          var data = new FormData();
          data.append('cpname',document.getElementById('cpname').value);
          data.append('cpaddress',document.getElementById('cpaddress').value);
          data.append('cpcontact',document.getElementById('cpcontact').value);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
                 document.getElementById('responseEC').style.display="block";
                       if(status=='true')
                       {
                          document.getElementById('responseEC').className="alert alert-success";
                          document.getElementById('responseEC').innerHTML="<p>Successfully Updated</p>";
                       }
                    else
                    {
                      document.getElementById('responseEC').className="alert alert-danger";
                      document.getElementById('responseEC').innerHTML=status;
                    }
              }
          }
  }
  function addEducation()
  {

          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addEducation',true);
          var data = new FormData();
          data.append('highestdegree',document.getElementById('highestdegree').value);
          data.append('previousemployer',document.getElementById('previousemployer').value);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
                 document.getElementById('responseE').style.display="block";
                       if(status=='true')
                       {
                          document.getElementById('responseE').className="alert alert-success";
                          document.getElementById('responseE').innerHTML="<p>Successfully Updated</p>";
                       }
                    else
                    {
                      document.getElementById('responseE').className="alert alert-danger";
                      document.getElementById('responseE').innerHTML=status;
                    }
              }
          }
  }
  function addHealth()
  {

          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addHealth',true);
          var data = new FormData();
          data.append('bloodgroup',document.getElementById('bloodgroup').value);
          data.append('medicalcomplications',document.getElementById('medicalcomplications').value);
          data.append('regularmedication',document.getElementById('regularmedication').value);
          data.append('others',document.getElementById('others').value);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
                 document.getElementById('responseH').style.display="block";
                       if(status=='true')
                       {
                          document.getElementById('responseH').className="alert alert-success";
                          document.getElementById('responseH').innerHTML="<p>Successfully Updated</p>";
                       }
                    else
                    {
                      document.getElementById('responseH').className="alert alert-danger";
                      document.getElementById('responseH').innerHTML=status;
                    }
              }
          }
  }
  function addPan()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addPan',true);
          var data = new FormData();
          data.append('pan',document.getElementById('pan').value);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
                 document.getElementById('responseP').style.display="block";
                       if(status=='true')
                       {
                          document.getElementById('responseP').className="alert alert-success";
                          document.getElementById('responseP').innerHTML="<p>Successfully Updated</p>";
                       }
                    else
                    {
                      document.getElementById('responseP').className="alert alert-danger";
                      document.getElementById('responseP').innerHTML=status;
                    }
              }
          }
  }