$(document).ready((function ($) {

  $(".menu-icon").on("click", function() {
    $("nav ul").toggleClass("showing");
  });
  $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
      $(this)
      .parent()
      .hasClass("active")
      ) {
      $(".sidebar-dropdown").removeClass("active");
    $(this)
    .parent()
    .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
    .next(".sidebar-submenu")
    .slideDown(200);
    $(this)
    .parent()
    .addClass("active");
  }
});

  $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
  });
  $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
  });

}));


$(window).on("scroll", function() {
  if($(window).scrollTop()) {
    $('nav').addClass('black');
  }

  else {
    $('nav').removeClass('black');
  }
})


//####### delete
// var count = 0;

// function slide(form){

//   var count = form.value;
//   var btn = form.childNodes;

//   if (count === "1") {
//     form.nextElementSibling.style.display = 'none';
//     btn[3].innerHTML = '<i class="fa fa-angle-down" aria-hidden="true"></i>';   
//     form.value="0";
//   }
//   else{
//     btn[3].innerHTML = '<i class="fa fa-angle-up" aria-hidden="true"></i>'; 
//     form.nextElementSibling.style.display = 'block';
//     form.value="1";

//   }
// }
  

////////////////////  Drop-down Menu - When Clicking Profile Bar /////////////////////
var temp = 0;
function displayFunctionType() {
  var staff = document.getElementsByClassName('drop-down')[0];

  if (temp % 2 == 0) {
    staff.style.display = 'block';
    temp++; 
  }
  else {
    staff.style.display = 'none';
    temp++;         
  }
}







////////////////////  Add Employee through different Tabs /////////////////////

 function addGeneral()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addGeneral',true);
          var data = new FormData();
          var first_name =document.getElementById('first_name').value;
          var last_name=document.getElementById('last_name').value;
          var middle_name= document.getElementById('middle_name').value;
          var join_date=document.getElementById('year').value+'-'+document.getElementById('month').value+'-'+document.getElementById('day').value;
          var password= first_name.toLowerCase().substring(0,2)+last_name.toLowerCase().substring(0,2)+'123';
          data.append('title',document.getElementById('title').value);
          data.append('first_name',first_name);
          data.append('middle_name',middle_name);
          data.append('last_name',last_name);
          data.append('join_date',join_date);
          data.append('password',password);
          xmlHttp.send(data);


          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('general-form',status,'Employee Added Successfully');
               displayName(first_name,middle_name,last_name);
              }
          }
  }



 function updateGeneral()
  {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','updateGeneral',true);
          var data = new FormData();
          var first_name =document.getElementById('first_name').value;
          var last_name=document.getElementById('last_name').value;
          var middle_name= document.getElementById('middle_name').value;
          var join_date=document.getElementById('year').value+'-'+document.getElementById('month').value+'-'+document.getElementById('day').value;
          data.append('title',document.getElementById('title').value);
          data.append('first_name',first_name);
          data.append('middle_name',middle_name);
          data.append('last_name',last_name);
          data.append('join_date',join_date);
          xmlHttp.send(data);


          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('general-form',status,'Updated Successfully');
               displayName(first_name,middle_name,last_name);
              }
          }
  }


  // display current entering employee's name
  function displayName(fname,mname="",lname)
  {
    $('#current_employee_name').text(fname+" "+mname+" "+lname);
  }


function addDocument(){
$('#document').append('<div class="form-group">');
$('#document').append('<input type="text" name="doc_title" class=" col-md-2" placeholder="Enter the title">');
$('#document').append('<input type="file" id="doc_file" name="userfile"  class=" col-md-3">');
$('#document').append('<i class="fa fa-times fa-2x" onclick="removeDocument(this)" class="form-group col-md-2 "></i>');
$('#document').append('<hr>');
$('#document').append('</div>');
}

function removeDocument(doc){
  doc.nextSibling.remove();
  doc.previousSibling.remove();
  doc.previousSibling.remove();
  doc.remove();
}

// add document to table
function submitDocument(){

  var doc_title = document.getElementsByName('doc_title');
  var doc_file = document.getElementsByName('userfile');
  var count=0;
  
  for( i = 0; i < doc_title.length; i++ )
     {
     if(doc_file[i].files.length==0){
        var msg="Select a file first.";
        $('#message').css('background-color','#ffefea !important');
              $('#message').css('color','red');
           $('#message').css('display','block');
            $('#message').html(msg); 
      return false;
     }
     if( doc_file[i].files[0]['type']=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"||doc_file[i].files[0]['type']=="application/msword"||doc_file[i].files[0]['type']=="application/pdf" ) {

     }
     else{
             var msg="Select a doc or pdf file only";
        $('#message').css('background-color','#ffefea !important');
        $('#message').css('color','red');
          $('#message').css('display','block');
            $('#message').html(msg); 
      return false;
     }
  }
    for( i = 0; i < doc_title.length; i++ )
     {
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.open('POST','addDocuments',true);
      var data = new FormData();
      data.append('doc_title',doc_title[i].value);
      data.append('doc_file',doc_file[i].value);
      data.append('document',doc_file[i].files[0])
      xmlHttp.send(data);
      xmlHttp.onreadystatechange = function()
      {
          if(xmlHttp.readyState==4)
          {
           var status = xmlHttp.responseText;
           if(status=='true')
           {
             msg="Files Uploaded";
             $('.message-div').append('<div id="message" class="message">'+msg+'</div>');  
           }
          else{
            count++;
             msg="Choose file";

            $('.message-div').append('<div id="message" class="message text-danger">'+msg+'</div>');  
          }
          }
      }
      
    }
}


//show hide visa info
function showHideVisa(visa){
  if(visa.value=='Nepalese')
    document.getElementById('non_nepali').style.display='none';
  else
  document.getElementById('non_nepali').style.display='block';

}

// show the allergy description textbox if the user selects yes
function showHideAllergy(allergy)
{
     if(allergy.value=='Yes')
    document.getElementById('allergy').style.display='block';
  else
  document.getElementById('allergy').style.display='none';
}





////////////////////  Update Employee through different Tabs /////////////////////
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
            $('#message').css('display','block');
            $('#message').css('background','#ffefea !important');
            $('#message').css('color','green');
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

  // change tab icon
  check_complete();
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

$('#add_doc_title').html('Adding Work Experience');
$('#work-experience').append('<div id="'+experienceForm+'">  </div>');

$(tag).append('<div class="row" id="cross"><i class="col-md-12 text-right fa fa-times fa-2x" onclick="removeWorkExperience(this)" class="form-group col-md-2 "></i></div>');
$(tag).append('<div class="form-div"><input type="text" id="organization" name="organization" placeholder="Organization"></div>');
$(tag).append('<div class="form-div"><input type="text"  name="responsibility" id="responsibility" placeholder="Responsibility"></div>');
$(tag).append('<div class="form-div"><input type="text" id="contact_person_name" name="contact_person_name" placeholder="Contact Person Name"></div>');
$(tag).append('<div class="form-div"><input type="text" id="contact_person_phone" name="contact_person_phone" placeholder="Contact No."></div>');
$(tag).append('<div class="form-div"><input type="text" id="contact_address" name="contact_address" placeholder="Contact Address"></div>');
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
   var contact_person_name = document.getElementsByName('contact_person_name');
   var contact_person_phone = document.getElementsByName('contact_person_phone');
   var contact_person_address = document.getElementsByName('contact_address');
  var from_date = document.getElementsByName('from_date');
  var to_date= document.getElementsByName('to_date');
  var count=0;
  
  for( i = 0; i < responsibility.length; i++ )
     {
     if(responsibility[i].value==''||organization[i].value==''){
        var msg="Enter complete information";
            $('#message').css('background','red');
              $('#message').css('color','red');
              $('#message').css('display','block');
              $('#message').html(msg); 
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
        data.append('contact_person_name',contact_person_name[i].value);
          data.append('contact_person_phone',contact_person_phone[i].value);
            data.append('contact_address',contact_person_address[i].value);
      xmlHttp.send(data);
      xmlHttp.onreadystatechange = function()
      {
          if(xmlHttp.readyState==4)
          {
           var status = xmlHttp.responseText;
           if(status=='true')
           {
             msg="Updated";
              $('#message').css('background','#ffefea !important');
              $('#message').css('color','green');
              $('#message').css('display','block');
              $('#message').html(msg); 
           }
          else{
            count++;
             msg="Enter information";

              $('#message').css('background','red');
              $('#message').css('color','red');
              $('#message').css('display','block');
              $('#message').html(msg); 
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






// for the icon status on each tab

function check_complete(){
  //general tab
  var first_name =document.getElementById('first_name').value;
  var last_name=document.getElementById('last_name').value;
  //personal details
  var email=document.getElementById('email').value;
  var dob= document.getElementById('birth_year').value+'-'+document.getElementById('birth_month').value+'-'+document.getElementById('birth_day').value;
  //address
  var current_street=document.getElementById('currentaddress_street').value;
  var current_municipality=document.getElementById('currentaddress_municipality').value;
  var current_district=document.getElementById('currentaddress_district').value;
  var current_state=document.getElementById('currentaddress_state').value;
  var current_country= document.getElementById('currentaddress_country').value;
  //contact
  var mobile_phone=document.getElementById('mobile_phone').value;
  //nationality
  var passport_no=document.getElementById('passport_no').value;
  var issue_place=document.getElementById('passport_issue_place').value;
  //emergency contact
  var e_name=document.getElementById('e_name').value;
  var e_relation=document.getElementById('e_relation').value;
  var e_phone=document.getElementById('e_phone').value;
  //Education
  var institute=document.getElementById('institute').value;
  //PAN
  var pan=document.getElementById('pan').value;



    if(first_name!=''&&last_name!='') completeIcon('nav-general-tab'); else inCompleteIcon('nav-general-tab');
    if(email!=''&&dob!='') completeIcon('nav-personal-tab'); else inCompleteIcon('nav-personal-tab');
    if(current_street!=''&&current_municipality!=''&&current_district!=''&&current_state!=''&&current_country!='') completeIcon('nav-address-tab'); else inCompleteIcon('nav-address-tab');
    if(mobile_phone!='') completeIcon('nav-contact-tab'); else inCompleteIcon('nav-contact-tab');
    if(passport_no!=''&&issue_place!='') completeIcon('nav-nationality-tab'); else inCompleteIcon('nav-nationality-tab');
    if(e_name!=''&&e_relation!=''&&e_phone!='') completeIcon('nav-eContact-tab'); else inCompleteIcon('nav-eContact-tab');
    if(institute!='') completeIcon('nav-education-tab'); else inCompleteIcon('nav-education-tab');
    if(pan!='') completeIcon('nav-pan-tab'); else inCompleteIcon('nav-pan-tab');


}

function completeIcon(tabId){
  document.getElementById(tabId).childNodes[1].className="fa fa-check-circle prog-com";

}

function inCompleteIcon(tabId){
    document.getElementById(tabId).childNodes[1].className="fa fa-info-circle prog-incom";
}