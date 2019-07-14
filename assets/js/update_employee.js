  // delete/archive employee
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


    // restore/ unarchive employee
   function unArchiveEmployee(id)
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','unArchiveEmployee',true);
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
    console.log(status);

  var check=false;
  var JSONObject;
  JSONObject=JSON.parse(status);
  var elements= document.getElementById(formname).elements;
  for(var k in elements)
  {
     if(elements[k].type=="text"||elements[k].type=="number"||elements[k].type=="date"||elements[k].type=="email"||elements[k].nodeName=="select")
     {
       document.getElementById(elements[k].id).style.borderColor="#ced4da";
        for(var l in JSONObject)
        { 
          if(l=="0")
          {
            // mesg div displays updated or added
             $('#message').css('background','#ffefea !important');
            $('#message').css('color','green');
            $('#message').css('display','block');
            $('#message').html(msg); 
            // $('.message').bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function(e) { $(this).remove(); });
            check=true;
            break;
           
          }
           if(elements[k].id==l && l!="true")
           {
            document.getElementById(l).style.borderColor="#dc3545";
           }
        }
// once the data is inserted, the red border disappears
        if(check)
        { 
         for(var m in elements)
         {
          if(elements[m].type=="text"||elements[m].type=="number"||elements[m].type=="date"||elements[m].type=="email"||elements[m].nodeName=="select")
          {
           document.getElementById(elements[m].id).style.borderColor="#ced4da";
         }}
           break;
       }      
      }
  }
    //updating progress bar
  showprogress();
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
                // console.log(status);
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
          data.append('nationality',getSelectedValue('nationality'));
          data.append('visa_permission',getSelectedValue('visa_permission'));
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
          data.append('allergies',getSelectedValue('allergies'));
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
    var email=document.getElementById('email').value;
    var dob= document.getElementById('birth_year').value+'-'+document.getElementById('birth_month').value+'-'+document.getElementById('birth_day').value;
    if (!vaildateEmail(email)) {
         document.getElementById('email').style.borderColor="red";
      }
    else{
        var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addPersonalInformation',true);
          var data = new FormData();
          data.append('gender',document.getElementById('gender').value);
          data.append('dob',dob);
          data.append('email',email);

          xmlHttp.send(data);

         xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
                console.log(status);
               showresponse('personal-form',status,'Updated Successfully');
              }
          } 
        }
}

 // to make enter button submit form 
   $(document).ready(function() {
    $(window).keydown(function(event){
        if((event.keyCode == 13) && ($(event.target)[0]!=$("textarea")[0])) {
            event.preventDefault();
            return false;
        }
    });
  });

// for progresss bar

function showprogress(){
  var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','progressBar',true);
          var data = new FormData();
        xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status=xmlHttp.responseText;
                var  json = JSON.parse(status);
                for(var k in json){

                    if(k=="percentage"){
                     document.getElementById('progress-bar-body').style.display="block";
                    document.getElementById('completedPercent').innerHTML=json[k]+'% Completed';
                    var percent=json[k]+'%';
                    document.getElementById('bar').style.width=percent;

                  }
                    if(k=="color")
                    document.getElementById('bar').style.backgroundColor=json[k];
                    
                }
              }
          }
}


// employee work experience
var count=0;
function addExperience() 
{
  count++;
  var experienceForm="form"+count;
  var tag='#'+experienceForm;
  console.log(tag);

$('#add_doc_title').html('Adding Work Experience');
$('#work-experience').append('<div id="'+experienceForm+'">  </div>');

$(tag).append('<div class="row" id="cross"><i class="col-md-12 text-right fa fa-times fa-2x" onclick="removeWorkExperience(this)" class="form-group col-md-2 "></i></div>');
$(tag).append('<div class="form-div"><input type="text" id="organization" name="organization" placeholder="Organization"></div>');
$(tag).append('<div class="form-div"><input type="text"  name="responsibility" id="responsibility" placeholder="Responsibility"></div>');
$(tag).append('<div class="form-div"><input type="text" id="contact_person_name" name="contact_person_name" placeholder="Contact Person Name"></div>');
$(tag).append('<div class="form-div"><input type="text" id="contact_person_phone" name="contact_person_phone" placeholder="Contact No."></div>');
$(tag).append('<div class="form-div"><input type="text" id="address" name="contact_address" placeholder="Contact Address"></div>');
$(tag).append('<div class="row"><label class="col-md-2 ">From</label>');
$(tag).append('<input class="col-md-3  form-control" type="date" name="from_date" id="from_date" value="">');
$(tag).append(' <label class="col-md-2 ">To</label>');
$(tag).append('<input class="col-md-3   form-control" type="date" name="to_date" id="to_date"></div>');
$(tag).append('<div class="mb-4" style="height:1%; background:#fff;"> <hr  style="background:#000;"> </div>');
 }

// to remove form from the work experience form
function removeWorkExperience(exp)
{
  
    var node= exp.parentNode.parentNode;
    while (node.firstChild) {
        node.removeChild(node.firstChild);   }
}

// submit employee work experience to the table
function submitWork(){

  var responsibility = document.getElementsByName('responsibility');
  var organization = document.getElementsByName('organization');
  var from_date = document.getElementsByName('from_date');
  var to_date= document.getElementsByName('to_date');
  var count=0;
  
  for( i = 0; i < responsibility.length; i++ )
     {
     if(responsibility[i].value==''||organization[i].value==''){
        var msg="Enter Responsibility and Orgranization name";
            $('.message-div').append('<div id="message" class="message text-danger">'+msg+'</div>');  
      return false;
     }
  }
    for( i = 0; i < responsibility.length; i++ )
     {
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.open('POST','addWork',true);
      var data = new FormData();
      data.append('responsibility',responsibility[i].value);
      data.append('organization',organization[i].value);
      data.append('from_date',from_date[i].value);
      data.append('to_date',to_date[i].value);
      xmlHttp.send(data);
      xmlHttp.onreadystatechange = function()
      {
          if(xmlHttp.readyState==4)
          {
           var status = xmlHttp.responseText;
           if(status=='true')
           {
             msg="Updated";
             $('.message-div').append('<div id="message" class="message">'+msg+'</div>');  
           }
          else{
            count++;
             msg="Enter information";

            $('.message-div').append('<div id="message" class="message text-danger">'+msg+'</div>');  
          }
          }
      }
      
    }
}

// check email id 
function vaildateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.match(mailformat))
{
return true;
}
else
{
return false;
}
}
