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
function showresponse(formname,status){
               var success='';
               var check=false;
               if(status=="true") success="success";
               var JSONObject = JSON.parse(status);
                var elements= document.getElementById(formname).elements;

                      for(var k in elements){
                         if(elements[k].type=="text"||elements[k].type=="number"||elements[k].type=="email"||elements[k].nodeName=="select"){
                           document.getElementById(elements[k].id).style.borderColor="#ced4da";
                            for(var l in JSONObject){
                              if(l=="0") {
                              $('.message-div').append('<div id="message" class="message">Updated Successfully</div>');  
                         $('.message').bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function(e) { $(this).remove(); });
                                check=true;
                                break;
                              }
                               if(elements[k].id==l&&l!="true"){
                                document.getElementById(l).style.borderColor="#dc3545";
                               }
                            }
                            if(check) break;
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
               showresponse('general-form',status);
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
               showresponse('contact-form',status);
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
               showresponse('nationality-form',status);
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
               showresponse('emergency-form',status);
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
               showresponse('education-form',status);
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
               showresponse('health-form',status);
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
               showresponse('pan-form',status);
              }
          }
  }