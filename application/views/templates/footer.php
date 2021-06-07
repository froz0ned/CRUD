<!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; St. Voksom <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout');?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets');?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets');?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets');?>/vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets');?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets');?>/js/sb-admin-2.min.js"></script>
    <script src="<?= base_url('assets');?>/datatables/datatables.js"></script>
    

    
    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
                lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10 Data', '25 Data', '50 Data', 'ALL Item' ]
                ],
                buttons: [
                { extend: 'pdf', exportOptions: {
                    columns: [ 0, 1, 2,3, 4,5,6,7,8 ]
                }, footer: true, text: '<i class="fas fa-file-pdf fa-1x" aria-hidden="true">PDF</i>' },
                { extend: 'csv', exportOptions: {
                    columns: [ 0, 1, 2,3, 4,5,6,7,8 ]
                }, footer: true, text: '<i class="fas fa-file-csv fa-1x">CSV</i>'},
                'pageLength'
                ],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\Rp,.]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
             
            api.columns('.sum', { page: 'current'}).every( function () {
              var sum = this
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
              
              this.footer().innerHTML = sum;
            } );
        }
    } );
} );
    </script>

    <script>
        $(document).ready(function() {
    $('#transaksi').DataTable( {
        dom: 'Bfrtip',
                lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10 Data', '25 Data', '50 Data', 'ALL Item' ]
                ],
                buttons: [
                { extend: 'pdf', exportOptions: {
                    columns: [ 0, 1, 2,3, 4,5,6,7,8 ]
                }, footer: true, text: '<i class="fas fa-file-pdf fa-1x" aria-hidden="true">PDF</i>' },
                { extend: 'csv', exportOptions: {
                    columns: [ 0, 1, 2,3, 4,5,6,7,8 ]
                }, footer: true, text: '<i class="fas fa-file-csv fa-1x">CSV</i>'},
                'pageLength'
                ],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\Rp,.]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
             
            api.columns('.sum', { page: 'current'}).every( function () {
              var sum = this
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
              
              this.footer().innerHTML = sum;
            } );
        }
    } );
} );
    </script>



    <script>
        $(document).ready(function() {
    $('#bahanbaku').DataTable( {
        dom: 'Bfrtip',
                lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10 Data', '25 Data', '50 Data', 'ALL Item' ]
                ],
                buttons: [
                { extend: 'pdf', exportOptions: {
                    columns: [ 0, 1, 2, 3, 4 ]
                }, footer: true, text: '<i class="fas fa-file-pdf fa-1x" aria-hidden="true">PDF</i>' },
                { extend: 'csv', exportOptions: {
                    columns: [ 0, 1, 2,3, 4, ]
                }, footer: true, text: '<i class="fas fa-file-csv fa-1x">CSV</i>'},
                'pageLength'
                ],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\Rp,.]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
             
            api.columns('.sum', { page: 'current'}).every( function () {
              var sum = this
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
              
              this.footer().innerHTML = sum;
            } );
        }
    } );
} );
    </script>


   




   <script type="text/javascript">
            function isi_otomatis(){
                var kd_brg = $("#kd_brg").val();
                $.ajax({
                    url: '<?= base_url('templates/ajax'); ?>',
                    data:"kd_brg="+kd_brg ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama_brg').val(obj.nama_brg);
                    
                });
            }
        </script>
    

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName= $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });



        $('.form-check-input').on('click', function(){
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');


            $.ajax({
                url : "<?= base_url('admin/changeaccess'); ?>",
                type : 'post',
                data : {
                    roleId: roleId,
                    menuId: menuId
                    
                },
                success: function() {
                    document.location.href = "<?= base_url('admin/roleaccess/');?>"+roleId;

                }
            });
        

        });
        

    </script>


</body>

</html>