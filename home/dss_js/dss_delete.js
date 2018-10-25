
            //for datatable
            $(document).ready(function() {
                $('#dss_datatable').DataTable();
            } );

            //for datatable
            $(document).ready(function() {
                $('#dss_datatable1').DataTable();
            } );

            //for datatable
            $(document).ready(function() {
                $('#dss_datatable2').DataTable();
            } );

            // for delete js
            function delete2014(delid2014) {
                if(confirm("Do you want to delete this data?")){
                    window.location.href='delete_dss2014.php?del_id=' +delid2014+'';
                    return true;
                }
            }
            // for delete js
            function delete2016(delid2016) {
                if(confirm("Do you want to delete this data?")){
                    window.location.href='delete_dss2016.php?del_id=' +delid2016+'';
                    return true;
                }
            }
            // for delete js
            function delete2018(delid2018) {
                if(confirm("Do you want to delete this data?")){
                    window.location.href='delete_dss2018.php?del_id=' +delid2018+'';
                    return true;
                }
            }