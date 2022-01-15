function validate(formObj) {
  
    if (formObj.projectName.value === '') {
      alert('Please enter a project name');
      formObj.firstNames.focus();
      return false;
    }
      
    return true;
  }
  
  
  $(document).ready(function() {
    
    // focus the name field on first load of the page
    $('#projectName').focus();
       
    $('.deleteProject').click(function() {
      if(confirm('Remove project? (This action cannot be undone.)')) {
        var curId = $(this).closest('tr').attr('id');
        var projectId = curId.substr(curId.indexOf('-')+1);
        var postData = 'id=' + projectId;
        
        $.ajax({
          type: 'post',
          url: 'project-delete.php',
          dataType: 'json',
          data: postData,
          success: function(responseData, status){
            if (responseData.errors) {
              alert(responseData.errno + ' ' + responseData.error);
            } else {
              $('#' + curId).closest('tr').remove();
              
              
              $('.messages').hide();
              
              
              $('#jsMessages').html('<h4>Project deleted</h4>').show();
              
              
              $('#projectTable tr').each(function(i){
                if (i % 2 === 0) {
                  
                  $(this).addClass('odd'); 
                } else {
                  $(this).removeClass('odd');
                }
              });
            }
          },
          error: function(msg) {
            
            alert(msg.status + ' ' + msg.statusText);
          }
        }); 
      }
    });
  });