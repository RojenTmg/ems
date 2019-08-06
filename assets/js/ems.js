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



////////////////////  Trim days /////////////////////

function trim_day(dec_day) {
  
  var day;
  if (dec_day <= 1) 
    day = ' day ';
  else 
    day = ' days ';

  if (dec_day % 1 == 0) 
    return Math.round(dec_day) + day;
  else {
    if (dec_day < 1) {
      return '1/2 ' + day;
    }
    else {
      return Math.floor(dec_day) + ' and 1/2 ' + day;
    }
  }
}

////////////////////  Validating 'from-to' date in Employee Leave Request Form /////////////////////

  $('#leave_name').change(function() {
      if ($('#leave_name').find("option:selected").text().indexOf('Casual') !== -1) {     // if selected value is 'Casual'
        $('#multiple-days').attr('disabled', true);
        $('#half-day').prop('checked', true);
        $('#to_date').attr('disabled', true);
        $('#duration').val('1/2');
        $('#to_date').val($('#from_date').val());
      }
      else {
        $('#multiple-days').attr('disabled', false);        
      }
      $('#remDuration').text(trim_day($('#leave_name').find("option:selected").attr('id')));
  });

  $('#half-day').click(function() {
    $('#to_date').attr('disabled', true);
    $('#duration').val('1/2');
    $('#to_date').val($('#from_date').val());
    document.getElementById("from_date").setAttribute("max", false);      // remove max-date when selected
  });

  $('#full-day').click(function() {
    $('#to_date').attr('disabled', true);
    $('#duration').val('1');
    $('#to_date').val($('#from_date').val());
    document.getElementById("from_date").setAttribute("max", false);      // remove max-date when selected
  });

  $('#multiple-days').click(function() {
    $('#duration').val('1');
    $('#to_date').attr('disabled', false);
    document.getElementById("from_date").setAttribute("max", $('#to_date').val());      // from_date validation
  });

  $('#from_date').change(function() {
    document.getElementById("to_date").setAttribute("min", $(this).val());
    if (document.getElementById('multiple-days').checked) {
      $('#duration').val(((Date.parse($('#to_date').val()) - Date.parse($('#from_date').val())) / 86400000)+1);
    } else {
      $('#to_date').val($(this).val());
    }
  });

  $('#to_date').change(function() {
      document.getElementById("from_date").setAttribute("max", $('#to_date').val());      // from_date validation
      $('#duration').val(((Date.parse($('#to_date').val()) - Date.parse($('#from_date').val())) / 86400000)+1);
  });





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


////////////////////  Notification Messages /////////////////////
$(document).ready(function(){
    $('.arch-msg').bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function(e) { $('.arch-msg-div .arch-msg').remove(); });
});







////////////////////  Add Employee through different Tabs /////////////////////

// changes in add 
 function addGeneral()
  {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('POST','addGeneral',true);
    var data = new FormData();
    var first_name =document.getElementById('first_name').value;
    var last_name=document.getElementById('last_name').value;
    var middle_name= document.getElementById('middle_name').value;
    var join_date=document.getElementById('join_date').value;
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
            var id=JSON.parse(status);

            if(id=="error"){
              msg="Invalid Title Selected";
               $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
              $('#messagediv').css('display','block');
               $('#showmessage').html(msg); 
               return ;
            }
           if(isNaN(id))
            showresponse('general-form',status,'Added Successfully');
          else  {
            location.href='employee_manage/'+id;
          }
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
          var join_date=document.getElementById('join_date').value;
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
                console.log(status);  
                 var id=JSON.parse(status);
                 console.log(id);

                if(id=="error"){
                msg="Invalid Title Selected";
                $('#messagediv').removeClass('alert-success');
                $('#messagediv').addClass('alert-danger');
                $('#messagediv').css('display','block');
                $('#showmessage').html(msg); 
               return ;
            }
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
$('#document').append('<input type="text" name="doc_title" class=" col-md-2" placeholder="Enter the title">');
$('#document').append('<input type="file" id="doc_file" name="userfile"  class=" col-md-3">');
$('#document').append('<i class="fa fa-times fa-2x" onclick="removeDocument(this)" class="form-group col-md-2 "></i>');
$('#document').append('<hr>');
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
       $('#messagediv').removeClass('alert-success');
       $('#messagediv').addClass('alert-danger');
       $('#messagediv').css('display','block');
       $('#showmessage').html(msg); 
      return false;
     }
     if( doc_file[i].files[0]['type']=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"||doc_file[i].files[0]['type']=="application/msword"||doc_file[i].files[0]['type']=="application/pdf"||doc_file[i].files[0]['type']=="application/PDF" ) {

     }
     else{
             var msg="Select a doc or pdf file only";
           $('#messagediv').removeClass('alert-success');
           $('#messagediv').addClass('alert-danger');
       $('#messagediv').css('display','block');
       $('#showmessage').html(msg); 
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
               $('#messagediv').addClass('alert-success');
              $('#messagediv').css('display','block');
              $('#showmessage').html(msg); 
           }
          else{
            count++;
             msg="Choose file";

               $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
               $('#messagediv').css('display','block');
              $('#showmessage').html(msg); 
        }

            location.reload();
                 
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
                // $('#datatable').ajax.reload();

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
            if($('#messagediv').hasClass('alert-danger')){

            $('#messagediv').removeClass('alert-danger');
            $('#messagediv').addClass('alert-success');
            }
            
           $('#messagediv').css('display','block');
            $('#messagediv').css('background','#ffadad !important');
            $('#showmessage').html(msg); 

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
          var radioValue = $("input[name='nationality']:checked").val();
          data.append('nationality',getSelectedValue('nationality'));
          data.append('visa_permission',getSelectedValue('visa_permission'));
          data.append('visa_type',document.getElementById('visa_type').value);
          data.append('visa_expiry_date',document.getElementById('visa_expiry_date').value);
          data.append('passport_no',document.getElementById('passport_no').value);
          data.append('passport_issue_place',document.getElementById('passport_issue_place').value);
          xmlHttp.send(data);
        if(!radioValue)
        {
           msg="Select nationality";

              $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
              $('#messagediv').css('display','block');
               $('#showmessage').html(msg); 
        }

     // if(checkCurrentDate('visa_expiry_date'))
     //  {
     //     msg="Invalid Visa Expiry date";

     //          $('#messagediv').removeClass('alert-success');
     //           $('#messagediv').addClass('alert-danger');
     //           $('#messagediv').css('color','red');
     //          $('#messagediv').css('display','block');
     //           $('#showmessage').html(msg); 
     //  }
     //  else{

      xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                var status = xmlHttp.responseText;
               showresponse('nationality-form',status,'Updated Successfully');
              }
          }
  // }
  
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
          var id=JSON.parse(status);
          if(id=="error")
          {
            msg=" Enter valid Highest Degree";
            $('#messagediv').removeClass('alert-success');
            $('#messagediv').addClass('alert-danger');
            $('#messagediv').css('display','block');
            $('#showmessage').html(msg); 
            return ;
           }
         showresponse('education-form',status,'Updated Successfully');
        }
    }
  }

  // add health information
  function addHealth()
  {
      var blood_group=document.getElementById('blood_group').value;
      if(blood_group==''){
           msg="Select a blood group.";

              $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
              $('#messagediv').css('display','block');
               $('#showmessage').html(msg); 
               return 0;  
      }

          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','addHealth',true);
          var data = new FormData();
          data.append('blood_group',blood_group);
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
                 var id=JSON.parse(status);
            if(id=="error"){
              msg="Invalid Blood group Selected";
               $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
              $('#messagediv').css('display','block');
               $('#showmessage').html(msg); 
               return ;
            }

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

    if(document.getElementById('birth_month').value == 2 && document.getElementById('birth_day').value> 29 )
    {
       msg="Select appropriate date.";

              $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
              $('#messagediv').css('display','block');
               $('#showmessage').html(msg); 

    }

    else if((document.getElementById('birth_month').value == 4 || document.getElementById('birth_month').value == 6 || document.getElementById('birth_month').value == 9 || document.getElementById('birth_month').value == 11 ) && document.getElementById('birth_day').value> 30 )
    {
       msg="Select appropriate date.";

              $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
              $('#messagediv').css('display','block');
               $('#showmessage').html(msg); 

    }

    else if(new Date(dob)> new Date())
      {
         msg="Invalid Date of Birth";

              $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
              $('#messagediv').css('display','block');
               $('#showmessage').html(msg); 
      }

     else  if(getAge(dob)<18){
         msg="Age cannot be less than 18.";

              $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
              $('#messagediv').css('display','block');
               $('#showmessage').html(msg); 
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
                var id=JSON.parse(status);
                if(id=="error"){
                msg="Invalid Gender Selected";
               $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
              $('#messagediv').css('display','block');
               $('#showmessage').html(msg); 
               return ;
            }
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
                console.log(status);
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
$(tag).append('<div class="form-div"><label class="col-md-2 ">From</label><input class="col-md-3  form-control" type="date" name="from_date" id="from_date" value=""> </div>');
$(tag).append('<div class="form-div"> <label class="col-md-2 ">To</label><input class="col-md-3   form-control" type="date" name="to_date" id="to_date"></div>');
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

// update employee work experience to the table
function updateWork(){

  var exp_id = document.getElementsByName('exp_id');
  var responsibility = document.getElementsByName('responsibility');
  var organization = document.getElementsByName('organization');
   var contact_person_name = document.getElementsByName('contact_person_name');
   var contact_person_phone = document.getElementsByName('contact_person_phone');
   var contact_address = document.getElementsByName('contact_address');
  var from_date = document.getElementsByName('from_date');
  var to_date= document.getElementsByName('to_date');

  var count=0;
  
  for( i = 0; i < responsibility.length; i++ )
     {
     if(responsibility[i].value==''||organization[i].value==''){
        var msg="Enter complete information";

          $('#messagediv').removeClass('alert-success');
          $('#messagediv').addClass('alert-danger');
          $('#messagediv').css('display','block');
          $('#showmessage').html(msg); 
      return false;
     }
  }
    for( i = 0; i < responsibility.length; i++ )
     {
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.open('POST','updateWork',true);
      var data = new FormData();
      if(exp_id[i])
      data.append('exp_id',exp_id[i].value);
      else
       data.append('exp_id','');

      data.append('responsibility',responsibility[i].value);
      data.append('organization',organization[i].value);
      data.append('from_date',from_date[i].value);
      data.append('to_date',to_date[i].value);
      data.append('contact_person_name',contact_person_name[i].value);
      data.append('contact_person_phone',contact_person_phone[i].value);
      data.append('contact_address',contact_address[i].value);
      xmlHttp.send(data);
      if(DateCheck() && checkCurrentDate('from_date')  )
      {
        xmlHttp.onreadystatechange = function()
      {
          if(xmlHttp.readyState==4)
          {
           var status = xmlHttp.responseText;
           if(status=='true')
           {
             msg="Updated";
              $('#messagediv').addClass('alert-success');
               $('#messagediv').css('background','#ffadad !important');
               $('#messagediv').css('display','block');
                $('#showmessage').html(msg); 
           }
          else{
            count++;
             msg="Enter information";

              $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
              $('#messagediv').css('display','block');
               $('#showmessage').html(msg); 
          }
          
          location.reload();
          }

      }
      
    }
    else
    {
      msg= "From date and To date Error!";
       $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-danger');
             $('#messagediv').css('display','block');
              $('#showmessage').html(msg); 
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
  // var current_country= document.getElementById('currentaddress_country').value;
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
  //Health
  var blood_group = document.getElementById('blood_group').value;
  //PAN
  var pan=document.getElementById('pan').value;
  //assign
  var recommender= document.getElementById('recommender').value;
  var approver = document.getElementById('approver').value;
  //work experience
  var exp = document.getElementById('list-experience');
  //documents
  var documents =document.getElementById('document-list');





    if(first_name!=''&&last_name!='') completeIcon('nav-general-tab'); else inCompleteIcon('nav-general-tab');
    if(email!=''&&dob!='') completeIcon('nav-personal-tab'); else inCompleteIcon('nav-personal-tab');
    if(current_street!=''&&current_municipality!=''&&current_district!=''&&current_state!='') completeIcon('nav-address-tab'); else inCompleteIcon('nav-address-tab');
    if(mobile_phone!='') completeIcon('nav-contact-tab'); else inCompleteIcon('nav-contact-tab');
    if(passport_no!=''&&issue_place!='') completeIcon('nav-nationality-tab'); else inCompleteIcon('nav-nationality-tab');
    if(e_name!=''&& e_relation!=''&& e_phone!='') completeIcon('nav-eContact-tab'); else inCompleteIcon('nav-eContact-tab');
    if(institute!='') completeIcon('nav-education-tab'); else inCompleteIcon('nav-education-tab');
    if(blood_group!='') completeIcon('nav-health-tab'); else inCompleteIcon('nav-health-tab');
    if(pan!='') completeIcon('nav-pan-tab'); else inCompleteIcon('nav-pan-tab');
    if(recommender!=''&&approver!='') completeIcon('nav-assign-tab'); else inCompleteIcon('nav-assign-tab');
    //changes icon if at least one document is added
    if(typeof(documents) != 'undefined' && documents != null) 
      completeIcon('nav-document-tab');
    else inCompleteIcon('nav-document-tab');
    // changes icon if at least one work experience is added
    if(typeof(exp) != 'undefined' && exp != null) 
      completeIcon('nav-work-tab');
    else inCompleteIcon('nav-work-tab');
    
    

}

function completeIcon(tabId){
  document.getElementById(tabId).childNodes[1].className="fa fa-check-circle prog-com";
}

function toggleNav(status=''){
  if(status=="show"){
    document.getElementById('nav-personal-tab').style.display="block";
    document.getElementById('nav-address-tab').style.display="block";
    document.getElementById('nav-contact-tab').style.display="block";
    document.getElementById('nav-nationality-tab').style.display="block";
    document.getElementById('nav-eContact-tab').style.display="block";
    document.getElementById('nav-health-tab').style.display="block";
    document.getElementById('nav-education-tab').style.display="block";
    document.getElementById('nav-pan-tab').style.display="block";
    document.getElementById('nav-work-tab').style.display="block";
    document.getElementById('nav-document-tab').style.display="block";
    document.getElementById('nav-assign-tab').style.display="block";
  
  }
  if(status=="hide"){
        document.getElementById('nav-personal-tab').style.display="none";
        document.getElementById('nav-address-tab').style.display="none";
        document.getElementById('nav-contact-tab').style.display="none";
        document.getElementById('nav-nationality-tab').style.display="none";
        document.getElementById('nav-eContact-tab').style.display="none";
        document.getElementById('nav-health-tab').style.display="none";
        document.getElementById('nav-education-tab').style.display="none";
        document.getElementById('nav-pan-tab').style.display="none";
        document.getElementById('nav-work-tab').style.display="none";
        document.getElementById('nav-document-tab').style.display="none";
        document.getElementById('nav-assign-tab').style.display="none";

  }
}


function inCompleteIcon(tabId){
    document.getElementById(tabId).childNodes[1].className="fa fa-info-circle prog-incom";
}



// delete files permanently from the edit option
 function removeFile(id)
  {       
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','deleteFile',true);
          var data = new FormData();
          data.append('doc_id', id);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
             msg="Deleted Successfully.";

               // $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-success');
               $('#messagediv').css('display','block');
              $('#showmessage').html(msg); 
              location.reload();

              }

          }
  }


  // delete work experience data from edit form
  function deleteWorkExperience(id)
  {

    var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','deleteWorkExperience',true);
          var data = new FormData();
          data.append('id', id);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {

                msg="Deleted Successfully.";

               // $('#messagediv').removeClass('alert-success');
               $('#messagediv').addClass('alert-success');
               $('#messagediv').css('display','block');
              $('#showmessage').html(msg); }
              location.reload();
          }
  }


  // start and end date validation
  function DateCheck()
  {
    var StartDate= document.getElementById('from_date').value;
    var EndDate= document.getElementById('to_date').value;
    var eDate = new Date(EndDate);
    var sDate = new Date(StartDate);
    if(StartDate!= '' && EndDate!= '' && sDate> eDate) {  return false; }
    else return true;

  }


  // check date is not more than current date 
function checkCurrentDate($date)
{
  var date = document.getElementById($date).value;
  var curDate = new Date();
  var enterDate= new Date(date);
  if(enterDate> curDate )
    return false;
  else
    return true;
}

// function to assign employee
function assign()
{
  var package_id = document.getElementById('package_id').value;
  var recommender=document.getElementById('recommender').value;
  var approver= document.getElementById('approver').value;


  if(recommender==''||approver==''){
                    msg="Assign an Employee";

               $('#messagediv').addClass('alert-danger');
               $('#messagediv').css('display','block');
              $('#showmessage').html(msg); 
              return 0;
            }
  var xmlHttp = new XMLHttpRequest();
          xmlHttp.open('POST','assignEmployee',true);
          var data = new FormData();
          data.append('recommender_id',recommender);
          data.append('approver_id',approver);
          data.append('package_id',package_id);
          xmlHttp.send(data);

          xmlHttp.onreadystatechange = function()
          {
              if(xmlHttp.readyState==4)
              {
                msg="Assigned Successfully.";

               $('#messagediv').removeClass('alert-danger');
               $('#messagediv').addClass('alert-success');
               $('#messagediv').css('display','block');
              $('#showmessage').html(msg); }
              check_complete();
              showprogress();

          }
 }


 // add leave
  function saveLeave()
  {
  var leave_name=document.getElementById('leave_name').value;
  var leave_id=document.getElementById('leave_id').value;
  if(leave_name=='')
  {
     msg="Enter leave name";
     $('#messagediv').addClass('alert-danger');
     $('#messagediv').css('display','block');
    $('#showmessage').html(msg); 
    return 0;
  }
  else
  {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('POST','saveLeave',true);
    var data = new FormData();
    data.append('leave_name',leave_name);
    data.append('leave_id',leave_id);
    xmlHttp.send(data);

    xmlHttp.onreadystatechange = function()
    {
        if(xmlHttp.readyState==4)
        {

          var msg='';
         $('#messagediv').removeClass('alert-danger');
          $('#messagediv').removeClass('alert-warning');

          var reply= xmlHttp.responseText;
          console.log(reply);
          if(reply=="inserted"){
           msg="Leave Added Successfully";
           $('#messagediv').addClass('alert-success');
           
          }
          if(reply=="updated"){
             msg="Leave Updated Successfully";
             $('#messagediv').addClass('alert-success');
         }
         if(reply=="already"){
             msg="Leave Already Exists";
             $('#messagediv').addClass('alert-warning');
           
         }
        $('#messagediv').css('display','block');
        $('#showmessage').html(msg); 
        $( "#leavetable" ).load(window.location.href + " #leave" );
        $( "#formdiv" ).load(window.location.href + " #package-form" );
        $( "#packagetable" ).load(window.location.href + " #package" );


        $('#leave_id').val('');
        $('#leave_name').val('');

        }
 }
}
}

 // delete Leave
 function deleteLeave(id)
 {
   var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('POST','deleteLeave',true);
    var data = new FormData();
    data.append('leave_id', id);
    xmlHttp.send(data);

    xmlHttp.onreadystatechange = function()
    {
        if(xmlHttp.readyState==4)
        {
          reply=xmlHttp.responseText;

         if(reply=="assigned") msg="Leave has been assigned to package. Unable to Delete";
         else msg="Deleted Successfully.";

         $('#messagediv').addClass('alert-danger');
         $('#messagediv').css('display','block');
        $('#showmessage').html(msg); 
         dismissModal();
        $( "#leavetable" ).load(window.location.href + " #leave" );
        $( "#formdiv" ).load(window.location.href + " #package-form" );


        }

    }
 }

// for delete button to dismiss the modal
function dismissModal()
{
      $('#leaveModal').css('display','none');
        $('#leaveModal').attr('aria-hidden', 'true');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
} 

function dismissDenyModal()
{
      $('.modal').css('display','none');
        $('#exampleModalCenter').attr('aria-hidden', 'true');
        $('body').removeClass('modal-open');
        $('.modal').removeClass('show');
        $('.modal-backdrop').remove();
} 

// delete Package
 function deletePackage(id)
 {
   var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('POST','deletePackage',true);
    var data = new FormData();
    data.append('package_id', id);
    xmlHttp.send(data);

    xmlHttp.onreadystatechange = function()
    {
        if(xmlHttp.readyState==4)
        {
        var reply=xmlHttp.responseText;
         if(reply=="assigned") msg="Package has been assigned to employee. Unable to Delete";
         else msg="Deleted Successfully.";
        // $('#messagediv').removeClass('alert-success');
         $('#messagediv1').addClass('alert-danger');
         $('#messagediv1').css('display','block');
        $('#showmessage1').html(msg); 
          dismissModal();
          $( "#packagetable" ).load(window.location.href + " #package" );

          $( "#formdiv" ).load(window.location.href + " #package-form" );

        }

    }
 }

 // add package
  function savePackage(){
  var package_name=document.getElementById('package_name').value;
  var package_id=document.getElementById('package_id').value;
  var leave_list= document.getElementsByName('leave-list');
  var duration= document.getElementsByName('duration');
      // getting all the leaves and their durations
      var leave = document.getElementsByName('leave-list');
  var msg;
  var leaveArr=[];
  var durationArr=[];
      for( i = 0; i < leave.length; i++ ) {
          if( leave[i].checked ) {
             var duration=leave[i].nextElementSibling.nextElementSibling.value;
             var leaveID=leave[i].value;
             leaveArr.push(leaveID);
             durationArr.push(duration);
          }
      }


   if(package_name==''||leaveArr.length==0||durationArr.length==0)
   {
     msg="Enter package name and select leave type";
     $('#messagediv1').addClass('alert-danger');
     $('#messagediv1').css('display','block');
     $('#showmessage1').html(msg); 

    return 0;
  }
 
   var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('POST','savePackage',true);
    var data = new FormData();
    data.append('package_name',package_name);
    data.append('package_id',package_id);
      data.append('leaveArr',JSON.stringify(leaveArr));
      data.append('durationArr',JSON.stringify(durationArr));

    xmlHttp.send(data);

    xmlHttp.onreadystatechange = function()
    {
        if(xmlHttp.readyState==4)
        {
        
         $('#messagediv1').removeClass('alert-danger');
         $('#messagediv1').removeClass('alert-warning');

          var reply= xmlHttp.responseText
          if(reply=="inserted"){
           msg="Package Added Successfully";
           $('#messagediv1').addClass('alert-success');
          }
          if(reply=="updated"){
             msg="Package Updated Successfully";
             $('#messagediv1').addClass('alert-success');
         }
         if(reply=="already"){
             msg="Package Already Exists";
             $('#messagediv1').addClass('alert-warning');
           
         }
          if(reply=="invalidDuration"){
             msg="Invalid leave duration";
             $('#messagediv1').addClass('alert-warning');
           
         }

        $('#messagediv1').css('display','block');
        $('#showmessage1').html(msg); 
      var form= document.getElementById('package-form');
      clearForm(form);
        $( "#packagetable" ).load(window.location.href + " #package" );







    }
 }
}


function editLeave(id){
  console.log(id);
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('POST','leaveManage',true);
    var data = new FormData();
    data.append('id',id);
    xmlHttp.send(data);
    xmlHttp.onreadystatechange=function(){
      if(xmlHttp.readyState==4){
       document.open();
       document.write(xmlHttp.responseText);
       document.close();
      }
    }
} 
function editPackage(id){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('POST','leaveManage',true);
    var data = new FormData();
    data.append('pkgId',id);
    xmlHttp.send(data);
    xmlHttp.onreadystatechange=function(){
      if(xmlHttp.readyState==4){
       document.open();
       document.write(xmlHttp.responseText);
       document.close();
      }
    }
} 




// check age
 function getAge(dateString) 
{
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
    return age;
}


 function toggleLeave(box){
      if(box.checked==true){
      box.nextElementSibling.nextElementSibling.disabled=false;
      box.nextElementSibling.nextElementSibling.value=1;
    }
     else{  
      box.nextElementSibling.nextElementSibling.disabled=true;
      box.nextElementSibling.nextElementSibling.value='';

    }
  }

  function clearForm(oForm) {
    
  var elements = oForm.elements; 
    
  oForm.reset();

  var duration = document.getElementsByName('duration');
  for(i=0;i<duration.length;i++){
    duration[i].value='';
    duration[i].disabled=true;
  }

  for(i=0; i<elements.length; i++) {
      
  field_type = elements[i].type.toLowerCase();
  
  switch(field_type) {
  
    case "text": 
    case "password": 
    case "textarea":
          case "hidden":  
      
      elements[i].value = ""; 
      break;
        
    case "radio":
    case "checkbox":
        if (elements[i].checked) {
          elements[i].checked = false; 
      }
      break;

    case "select-one":
    case "select-multi":
                elements[i].selectedIndex = -1;
      break;

    default: 
      break;
  }
    }
}


// recommend leaves to approver
function recommendLeave(btn,l_id)
{
  var parent = btn.parentElement;
  var gparent = parent.parentElement;
  gparent.innerHTML='';


  gparent.className="spinner-border spinner-border-sm";
  parent.onclick="#";

  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open('POST','recommendLeave',true);
  var data = new FormData();
  data.append('l_id',l_id);
  xmlHttp.send(data);

  xmlHttp.onreadystatechange=function(){
  if(xmlHttp.readyState==4)
  {
   location.reload();
  }
}
}

//deny leave by recommender
function denyLeaveFromRecommender(id)
{
  var reason = document.getElementById('denial_reason'+id).value;
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open('POST','denyLeaveFromRecommender',true);
  var data = new FormData();
  data.append('denial_reason',reason);
  data.append('id',id);
  xmlHttp.send(data);
  xmlHttp.onreadystatechange=function(){
  if(xmlHttp.readyState==4)
  {
    location.reload();
  }
}
}

// approve leave by approver

function leaveApprove(btn,d_type, id, e_id, leave_id, no_of_days = '0')

{
  var parent = btn.parentElement;
  var gparent = parent.parentElement;
  gparent.innerHTML='';
  gparent.className="spinner-border spinner-border-sm";
  parent.onclick="#";


  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open('POST','leaveApprove',true);
  var data = new FormData();
  data.append('d_type', d_type);
  data.append('id',id);
  data.append('e_id',e_id);
  data.append('leave_id',leave_id);
  data.append('no_of_days',no_of_days);
  // alert(d_type + ' ' + id + ' ' + e_id + ' ' + leave_id + ' ' + no_of_days);
  xmlHttp.send(data);
  xmlHttp.onreadystatechange=function(){
  if(xmlHttp.readyState==4)
  {
   location.reload();
  }
}
}

//deny leave by approver
function denyLeaveFromApprover(id)
{
  var reason = document.getElementById('denial_reason_approver'+id).value;
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open('POST','denyLeaveFromApprover',true);
  var data = new FormData();
  data.append('denial_reason',reason);
  data.append('id',id);
  xmlHttp.send(data);
  xmlHttp.onreadystatechange=function(){
  if(xmlHttp.readyState==4)
  {
    location.reload();
  }
}
}

// archive approval requests
function archiveApprovalRecord(id)
{
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open('POST','archiveApprovalRecord',true);
  var data = new FormData();
  data.append('id',id);
  xmlHttp.send(data);
  xmlHttp.onreadystatechange=function(){
  if(xmlHttp.readyState==4)
  {
    location.reload();
  }
}
}

// archive approval requests
function archiveRecommendRecord(id)
{
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open('POST','archiveRecommendRecord',true);
  var data = new FormData();
  data.append('id',id);
  xmlHttp.send(data);
  xmlHttp.onreadystatechange=function(){
  if(xmlHttp.readyState==4)
  {
    location.reload();
  }
}
}

// unarchive archived recommended leaves
function unArchiveRecommendedLeave(id) {
  var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('POST','unArchiveRecommendedLeave',true);
    var data = new FormData();
    data.append('id',id);
    xmlHttp.send(data);
    xmlHttp.onreadystatechange=function(){
      if(xmlHttp.readyState==4){
       location.reload();
      }
    }
}

// unarchive archived approved leaves
function unArchiveApprovedLeave(id) {
  var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('POST','unArchiveApprovedLeave',true);
    var data = new FormData();
    data.append('id',id);
    xmlHttp.send(data);
    xmlHttp.onreadystatechange=function(){
      if(xmlHttp.readyState==4){
       location.reload();
      }
    }
}

// reload entire page
function cancel(){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open('POST','leaveManage',true);
    var data = new FormData();
    xmlHttp.send(data);
    xmlHttp.onreadystatechange=function(){
      if(xmlHttp.readyState==4){
       document.open();
       document.write(xmlHttp.responseText);
       document.close();
      }
    }
} 
