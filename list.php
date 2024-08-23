<?php $this->load->view('includes/header', ['title' => 'Home Page']); ?>

<section class="list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Color</th>
                            <th>Transmission</th>
                            <th>Price</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

</section>

<?php $this->load->view('includes/footer'); ?>
<script>
    $.ajax({
        url: '<?php echo base_url('CarModel') ?>',
        type: 'POST',
        data: {},
        dataType: 'json',
        success: function(response){
            
        }
    })
</script>