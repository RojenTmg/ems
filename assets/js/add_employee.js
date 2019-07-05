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
function addDocument(){
$('#document').append('<div class="form-group">');
$('#document').append('<input type="text" name="document_title" class=" col-md-2" placeholder="Enter the title">');
$('#document').append('<input type="file" id="doc_file" name="doc_file"  class=" col-md-3">');
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

function showHideVisa(visa){
  if(visa.value=='nepalese')
    document.getElementById('non_nepali').style.display='none';
  else
  document.getElementById('non_nepali').style.display='block';

}