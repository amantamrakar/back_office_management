<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('asset/css/login_page.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css') ?>">
<title><?php echo $page_title ?></title>
<?php
$nav_arr = array('LUMPSUM', 'SIP', 'REDEMPTION', 'SWITCH', 'STP',  'SWP', 'SIP-STOP', 'STP-STOP', 'SWP-STOP', 'COB');
// echo $_GET['form'];
?>
<div class="container-fluid mt-3">
    <div class="row text-center">
        <div class="col-lg-1 col-md-1 col-sm-12"></div>
        <?php
        for ($i = 0; $i < count($nav_arr); $i++) { ?>
            <div class="col-lg-1 col-md-2 col-sm-12">
                <input type="radio" id="<?php echo $nav_arr[$i] ?>" data-form_value="<?php echo $nav_arr[$i] ?>" class="form_type " name="select_1" value="" <?php
                                                                                                                                                                if ($nav_arr[$i] == 'LUMPSUM') {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                }
                                                                                                                                                                ?>>
                <label class="labling" for="<?php echo $nav_arr[$i] ?>">
                    <img class="mt-3" src="<?php echo base_url('asset/image/LOGO ICON.png') ?>" alt="" srcset="" style="width: 30px;height:30px">
                    <p class="mt-3" id=""><?php echo $nav_arr[$i] ?></p>
                </label>
            </div>
        <?php
        }
        ?>
        <div class="col-lg-1 col-md-1 col-sm-12"></div>
    </div>
</div>

<div class="container-fluid mt-3" id="functionality_data">

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script>
    function get_data_by_reload(value) {
        $.ajax({
            type: "post",
            url: "<?php echo  base_url() . 'Functionality/Table' ?>",
            data: {
                form_value: value
            },
            success: function(response) {
                $("#functionality_data").html(response)
            }
        });
    }
    $(document).ready(function() {
        var form = $('.form_type').data('form_value');
        get_data_by_reload(form);
    });

    $(".form_type").click(function(e) {
        var form = $(this).data('form_value');
        $.ajax({
            type: "post",
            url: "<?php echo  base_url() . 'Functionality/Table' ?>",
            data: {
                form_value: form
            },
            success: function(response) {
                $("#functionality_data").html(response)
            }
        });
    })
</script>