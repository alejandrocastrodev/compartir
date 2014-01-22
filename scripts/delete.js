
function deleteFile(unId){
  document.getElementById("delete_file_id").value = unId;
  var formTo = document.getElementById("hidden_delete");
  formTo.submit();
}


function deleteFileLink(unId){
  document.getElementById("delete_file_id").value = unId;
  var formTo = document.getElementById("hidden_delete");
  formTo.submit();
}
