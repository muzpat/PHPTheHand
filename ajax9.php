    <script type="text/javascript">        
$.ajax({
                 type: "POST",
                 cache: false,
                url: 'GetAllAppointments.php',
                data: $(this).serialize(),
          
                 success: function (response) {
                     var items = JSON.parse(response);
                    // var len = items.count;
                     debugger;
                     alert(items.data[0][2]);
                 //   for (var i = 0; i < items.length; i++) {
                 //       var name = items.data[i].name;
                 //       alert(name);
                 //   }

                  //  alert(one);
                 //   var data1 = JSON.stringify(response);
                 //   alrert("2:  " +data1[0]);
               
                },
                 error: function (jqXHR, exception) {
                     var msg = '';
                     if (jqXHR.status === 0) {
                         msg = 'Not connect.\n Verify Network.';
                     } else if (jqXHR.status == 404) {
                         msg = 'Requested page not found. [404]';
                     } else if (jqXHR.status == 500) {
                         msg = 'Internal Server Error [500].';
                     } else if (exception === 'parsererror') {
                         msg = 'Requested JSON parse failed.';
                     } else if (exception === 'timeout') {
                         msg = 'Time out error.';
                     } else if (exception === 'abort') {
                         msg = 'Ajax request aborted.';
                     } else {
                         msg = 'Uncaught Error.\n' + jqXHR.responseText;
                     }
                     alert(msg);
                 },
});
                </script">