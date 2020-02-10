function deleteRecord(record) {
    $.ajax({
        url: 'server/delete.php',
        method: "POST",
        data: { postrecord:record },
    
        success: function (data) {
            window.location.href = 'index.php';
        },
        
        error: function(data) {
          alert("ERROR")
        }
      });
   }