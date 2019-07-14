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
       console.log(doc_file[i].files[0]['type']);
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

