  // archive employee
   function archiveEmployee(id)
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','archiveEmployee',true);
          var data = new FormData();
          data.append('emp_id', id);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
              }
          }
  }


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

  // display message if added successfully and red textbox if the required fields are empty
function showresponse(formname,status,msg)
{
  var check=false;
  var JSONObject;
  JSONObject=JSON.parse(status);
  var elements= document.getElementById(formname).elements;
  for(var k in elements)
  {
     if(elements[k].type=="text"||elements[k].type=="number"||elements[k].type=="date"||elements[k].type=="email"||elements[k].nodeName=="select"){
       document.getElementById(elements[k].id).style.borderColor="#ced4da";
        for(var l in JSONObject){
          if(l=="0") {
     $('.message-div').append('<div id="message" class="message">'+msg+'</div>');  
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
          xmlHttp.open('POST','updateGeneral',true);
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
               showresponse('general-form',status,'Updated Successfully');
              }
          }
  }

/**
* address form
*/
  function addAddress()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addAddress',true);
          var data = new FormData();
          data.append('permanentaddress_street',document.getElementById('permanentaddress_street').value);
          data.append('permanentaddress_municipality',document.getElementById('permanentaddress_municipality').value);
          data.append('permanentaddress_district',document.getElementById('permanentaddress_district').value);
          data.append('permanentaddress_state',document.getElementById('permanentaddress_state').value);
          data.append('permanentaddress_country',document.getElementById('permanentaddress_country').value);
          
          data.append('currentaddress_street',document.getElementById('currentaddress_street').value);
          data.append('currentaddress_municipality',document.getElementById('currentaddress_municipality').value);
          data.append('currentaddress_district',document.getElementById('currentaddress_district').value);
          data.append('currentaddress_state',document.getElementById('currentaddress_state').value);
          data.append('currentaddress_country',document.getElementById('currentaddress_country').value);
     
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('address-form',status,'Updated Successfully');
              }
          }
  }

// contact form
  function addContact()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addContact',true);
          var data = new FormData();
          data.append('home_phone',document.getElementById('home_phone').value);
          data.append('mobile_phone',document.getElementById('mobile_phone').value);
          data.append('other_phone1',document.getElementById('other_phone1').value);
          data.append('other_phone2',document.getElementById('other_phone2').value);
          data.append('other_phone3',document.getElementById('other_phone3').value);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('contact-form',status,'Updated Successfully');
              }
          }
  }

// nationality info
  function addNationality()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addNationality',true);
          var data = new FormData();
          data.append('nationality',document.getElementById('nationality').value);
          data.append('visa_permission',document.getElementById('visa_permission').value);
          data.append('visa_type',document.getElementById('visa_type').value);
          data.append('visa_expiry_date',document.getElementById('visa_expiry_date').value);
          data.append('passport_no',document.getElementById('passport_no').value);
          data.append('passport_issue_place',document.getElementById('passport_issue_place').value);
          xmlHttp.send(data);
xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('nationality-form',status,'Updated Successfully');
              }
          }
  }

  // Emergency contact
  function addEmergency()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addEmergency',true);
          var data = new FormData();
      
          data.append('e_name',document.getElementById('e_name').value);
          data.append('e_relation',document.getElementById('e_relation').value);
          data.append('e_address',document.getElementById('e_address').value);
          data.append('e_phone',document.getElementById('e_phone').value);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('emergency-form',status,'Updated Successfully');
              }
          }
  }

  //Education info to table 
  function addEducation()
  {

          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addEducation',true);
          var data = new FormData();
          data.append('highest_degree',document.getElementById('highest_degree').value);
          data.append('degree_title',document.getElementById('degree_title').value);
          data.append('university',document.getElementById('university').value);
          data.append('institute',document.getElementById('institute').value);
          xmlHttp.send(data);
xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('education-form',status,'Updated Successfully');
              }
          }
  }

  // add health information
  function addHealth()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addHealth',true);
          var data = new FormData();
          data.append('blood_group',document.getElementById('blood_group').value);
          data.append('medical_complications',document.getElementById('medical_complications').value);
          data.append('regular_medication',document.getElementById('regular_medication').value);
          data.append('allergies',document.getElementById('allergies').value);
          data.append('allergy_description',document.getElementById('allergy_description').value);
          xmlHttp.send(data);
xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('health-form',status,'Updated Successfully');
              }
          }
  }

  // add PAN
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
               showresponse('pan-form',status,'Updated Successfully');
              }
          }
  }

  //to add personal details
    function addPersonalInformation()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addPersonalInformation',true);
          var data = new FormData();
          data.append('gender',document.getElementById('gender').value);
          data.append('dob',document.getElementById('dob').value);
          data.append('email',document.getElementById('email').value);

          xmlHttp.send(data);

         xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('personal-form',status,'Updated Successfully');
              }
          }
  }



// for work experience
 function addWork()
 {
  var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addWork',true);
          var data = new FormData();
          data.append('previous_employer',document.getElementById('previous_employer').value);
          xmlHttp.send(data);

         xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('work-form',status,'Updated Successfully');
              }
          }
 }