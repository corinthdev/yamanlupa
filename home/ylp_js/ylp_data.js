		    	
		//for datatable
    	$(document).ready(function() {
			$('#ylp_datatable').DataTable();
		} );

		// for delete js
   		function deleteme(delid) {
   			if(confirm("Do you want to delete this data?")){
   				window.location.href='delete_ylp.php?del_id=' +delid+'';
   				return true;
   			}
   		}
   		//for update JS
       	$(document).ready(function(){
		  $(document).on('click','a[data-role=update]',function(){
		      var id = $(this).data('id');
		      var ylp_code = $('#'+id).children('td[data-target=ylp_code]').text();
		      var ylp_farmer = $('#'+id).children('td[data-target=ylp_farmer]').text();
		      var ylp_bayan = $('#'+id).children('td[data-target=ylp_bayan]').text();
		      var ylp_lalawigan = $('#'+id).children('td[data-target=ylp_lalawigan]').text();
		      var ylp_lalim = $('#'+id).children('td[data-target=ylp_lalim]').text();
		      var taon = $('#'+id).children('td[data-target=taon]').text();
		      var ylp_crop = $('#'+id).children('td[data-target=ylp_crop]').text();
		      var description = $('#'+id).children('td[data-target=description]').text();
		      var ylp_exchange = $('#'+id).children('td[data-target=ylp_exchange]').text();
		      var ylp_ph = $('#'+id).children('td[data-target=ylp_ph]').text();
		      var ylp_ec = $('#'+id).children('td[data-target=ylp_ec]').text();
		      var ylp_oc = $('#'+id).children('td[data-target=ylp_oc]').text();
		      var ylp_total_n = $('#'+id).children('td[data-target=ylp_total_n]').text();
		      var ylp_avail_p = $('#'+id).children('td[data-target=ylp_avail_p]').text();
		      var ylp_avail_k = $('#'+id).children('td[data-target=ylp_avail_k]').text();
		      var ylp_avail_s = $('#'+id).children('td[data-target=ylp_avail_s]').text();
		      var ylp_avail_zn = $('#'+id).children('td[data-target=ylp_avail_zn]').text();
		      var ylp_avail_b = $('#'+id).children('td[data-target=ylp_avail_b]').text();
		      var ylp_avail_fe = $('#'+id).children('td[data-target=ylp_avail_fe]').text();
		      var ylp_avail_cu = $('#'+id).children('td[data-target=ylp_avail_cu]').text();
		      var ylp_avail_mn = $('#'+id).children('td[data-target=ylp_avail_mn]').text();

		      $('#ylp_code').val(ylp_code);
		      $('#ylp_farmer').val(ylp_farmer);
		      $('#ylp_bayan').val(ylp_bayan);
		      $('#ylp_lalawigan').val(ylp_lalawigan);
		      $('#ylp_lalim').val(ylp_lalim);
		      $('#taon').val(taon);
		      $('#ylp_crop').val(ylp_crop);
		      $('#description').val(description);
		      $('#ylp_exchange').val(ylp_exchange);
		      $('#ylp_ph').val(ylp_ph);
		      $('#ylp_ec').val(ylp_ec);
		      $('#ylp_oc').val(ylp_oc);
		      $('#ylp_total_n').val(ylp_total_n);
		      $('#ylp_avail_p').val(ylp_avail_p);
		      $('#ylp_avail_k').val(ylp_avail_k);
		      $('#ylp_avail_s').val(ylp_avail_s);
		      $('#ylp_avail_zn').val(ylp_avail_zn);
		      $('#ylp_avail_b').val(ylp_avail_b);
		      $('#ylp_avail_fe').val(ylp_avail_fe);
		      $('#ylp_avail_cu').val(ylp_avail_cu);
		      $('#ylp_avail_mn').val(ylp_avail_mn);
     		  $('#farmerId').val(id);
		      $('#myModal').modal('toggle');
		  });

		  //creating event to get data from fields

		  $('#save').click(function(){
		      var id = $('#farmerId').val();
		      var ylp_code = $('#ylp_code').val();
		      var ylp_farmer = $('#ylp_farmer').val();
		      var ylp_bayan = $('#ylp_bayan').val();
		      var ylp_lalawigan = $('#ylp_lalawigan').val();
		      var ylp_lalim = $('#ylp_lalim').val();
		      var taon = $('#taon').val();
		      var ylp_crop = $('#ylp_crop').val();
		      var description = $('#description').val();
		      var ylp_exchange = $('#ylp_exchange').val();
		      var ylp_ph = $('#ylp_ph').val();
		      var ylp_ec = $('#ylp_ec').val();
		      var ylp_oc = $('#ylp_oc').val();
		      var ylp_total_n = $('#ylp_total_n').val();
		      var ylp_avail_p = $('#ylp_avail_p').val();
		      var ylp_avail_k = $('#ylp_avail_k').val();
		      var ylp_avail_s = $('#ylp_avail_s').val();
		      var ylp_avail_zn = $('#ylp_avail_zn').val();
		      var ylp_avail_b = $('#ylp_avail_b').val();
		      var ylp_avail_fe = $('#ylp_avail_fe').val();
		      var ylp_avail_cu = $('#ylp_avail_cu').val();
		      var ylp_avail_mn = $('#ylp_avail_mn').val();
		      $.ajax({
		          url     : 'update_ylp.php',
		          method  : 'post',
		          data    : {ylp_code : ylp_code, ylp_farmer : ylp_farmer, ylp_bayan : ylp_bayan, ylp_lalawigan : ylp_lalawigan, ylp_lalim : ylp_lalim, taon : taon, ylp_crop : ylp_crop, description : description, ylp_exchange : ylp_exchange, ylp_ph : ylp_ph, 
		            ylp_ec : ylp_ec, ylp_oc : ylp_oc , ylp_total_n : ylp_total_n, ylp_avail_p : ylp_avail_p , ylp_avail_k : ylp_avail_k , ylp_avail_s : ylp_avail_s, 
		            ylp_avail_zn : ylp_avail_zn, ylp_avail_b : ylp_avail_b, ylp_avail_fe : ylp_avail_fe, ylp_avail_cu : ylp_avail_cu, ylp_avail_mn : ylp_avail_mn, id : id},
		          success : function(data){
		                        alert("Successfully Edited!");
		                        location.href= "ylp_data.php";
		                    }
		      });
		  });
		})