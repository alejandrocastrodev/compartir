
function goToDownload(unId){
  document.getElementById("download_id").value = unId;
  var formTo = document.getElementById("hidden_id");
  formTo.submit();
}

function downFile(unId){
  document.getElementById("download_file_id").value = unId;
  var formTo = document.getElementById("hidden_form");
  formTo.submit();
}

