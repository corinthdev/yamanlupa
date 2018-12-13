<!-- start footer Area -->		
<footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>ABOUT US</h4>
                        <ul>
                            <li>
                                <a href="#!" role="button" data-toggle="modal" data-target="#exampleModalLong">
                                Southern Luzon State University (SLSU)
                                </a>
                            </li>
                            <li>Telephone:&nbsp<a href="#!">(042) 540-3775 / (042) 540-4087 </a></li>
                            <li>Email:&nbsp<a href="#!">chielo_22@yahoo.com</a></li>
                            <li><a href="#!">forcuala_garcia@yahoo.com</a></li>
                        </ul>								
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>NAVIGATIONS</h4>
                        <ul>
                            <li><a href="#!" onclick="alert('You will need to sign in first!')">YLP Data</a></li>
                            <li><a href="#!" onclick="alert('You will need to sign in first!')">DSS Platform</a></li>
                            <li><a href="calculator.php">Calculator</a></li>
                            <li><a href="mapping.php">Mapping</a></li>
                        </ul>								
                    </div>
                </div>	
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>UPDATE</h4>
                        <ul>
                            <li><a href="#!">Yamang Lupa Program</a></li>
                        </ul>								
                    </div>
                </div>																	
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>QUICK CONTACT</h4>
                        <ul>
                            <li>Phone:&nbsp<a href="#!">+6390-6008-7316</a></li>
                            <li>Email:&nbsp<a href="#!">esquerubin@gmail.com</a></li>
                        </ul>								
                    </div>
                </div>										
            </div>
            <div class="footer-bottom row align-items-center justify-content-between">
                <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;&nbsp;All Rights Reserved | Powered by <a href="https://www.corinthdev.com" target="_blank">corinthdev.com</a>
            </div>						
        </div>
    </footer>	
    <!-- End footer Area -->	
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Southern Luzon State University (SLSU)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-justify text-black" style="text-indent: 30px"><b>SLSU</b>, formerly known as Southern Luzon Polytechnic College (SLPC), is the premier higher education institution in QuezonProvince in the Philippines. With nine campuses in the province of Quezon, its main campus is located at the Municipality of Lucban.
            Operating by virtue of Republic Act 9395, SLSU is mandated to provide advanced education, professional, technological instruction in the fields of allied medicine, education, engineering, agriculture, fisheries, forestry, environment, arts and sciences, accountancy, cooperative, business and entrepreneurship, technology and other relevant fields of study in the Provice of Quezon and in Region IV-A CALABARZON. It is also mandated to undertake research and extension services and provide progressive leadership in its areas of specialization.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
        })
    </script>