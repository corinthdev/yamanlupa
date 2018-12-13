//for update JS
       	$(document).ready(function(){
		  $(document).on('click','a[data-role=update]',function(){
		      var id = $(this).data('id');
		      var urea = $('#'+id).children('td[data-target=urea]').text();
		      var phosphorous1 = $('#'+id).children('td[data-target=phosphorous1]').text();
		      var total_k = $('#'+id).children('td[data-target=total_k]').text();
		      var total_s = $('#'+id).children('td[data-target=total_s]').text();
		      var total_zn = $('#'+id).children('td[data-target=total_zn]').text();

		      $('#urea').val(urea);
		      $('#phosphorous1').val(phosphorous1);
		      $('#total_k').val(total_k);
		      $('#total_s').val(total_s);
		      $('#total_zn').val(total_zn);
     		  $('#farmerId').val(id);
		      $('#myModal').modal('toggle');
		  });

		  //creating event to get data from fields

		  $('#save').click(function(){
		      var id = $('#farmerId').val();
		      var urea = $('#urea').val();
		      var phosphorous1 = $('#phosphorous1').val();
		      var total_k = $('#total_k').val();
		      var total_s = $('#total_s').val();
		      var total_zn = $('#total_zn').val();
		      $.ajax({
		          url     : 'fertilizer_update.php',
		          method  : 'post',
		          data    : {urea : urea, phosphorous1 : phosphorous1, total_k : total_k, total_s : total_s, total_zn : total_zn, id : id},
		          success : function(data){
		                        alert("Successfully Edited!");
		                        location.href= "fertilizer.php";
		                    }
		      });
		  });
		})