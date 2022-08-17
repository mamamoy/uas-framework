<?= $this->extend('templates/index.php'); ?>

<?= $this->section('content'); ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header fw-bold">Penambahan Barang dan jasa</div>
                    <div class="card-body">
                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-668">
                                <form action="<?= base_url('admin/tambahBarang') ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" value="<?= $pesanan_id ?>" name="pesanan_id" id="">
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="status">Pilih Items</label>
                                        <select class="js-example-basic-multiple form-control" name="barangs[]" multiple="multiple" required>
                                        </select>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Tambah Barang</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
<?= $this->section('footerScript'); ?>
<script>
    $('.js-example-basic-multiple').select2({
        allowClear: true,
        placeholder: 'Search Barang',
        ajax: {
            url: "<?php echo base_url(); ?>/get-ajax",
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                // console.log(data)
                return {
                    results: data
                };
            },
            cache: true
        }
    });
</script>
<?= $this->endSection(); ?>