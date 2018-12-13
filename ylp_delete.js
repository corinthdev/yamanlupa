// for delete js
            function deletedata(deletedata) {
                if(confirm("Do you want to delete this data?")){
                    window.location.href='ylp_delete.php?del_id=' +deletedata+'';
                    return true;
                }
            }