<?php

// echo $data;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">


</head>

<body>
    <style>
        #update_delete_table_filter {
            margin-bottom: 10px;
        }
    </style>
    </head>

    <body>
        <?php
        $tag = '';
        if ($title == 'LUMPSUM') {
            $tag = 'lum';
        } elseif ($title == 'SIP') {
            $tag = 'sip';
        } elseif ($title == 'REDEMPTION') {
            $tag = 'redem';
        } elseif ($title == 'SWITCH') {
            $tag = 'switch';
        } elseif ($title == 'STP') {
            $tag = 'stp';
        } elseif ($title == 'SWP') {
            $tag = 'swp';
        } elseif ($title == 'COB') {
            $tag = 'cob';
        } elseif ($title == 'SIP-STOP') {
            $tag = 'sip_stop';
        } elseif ($title == 'STP-STOP') {
            $tag = 'stp_stop';
        } elseif ($title == 'SWP-STOP') {
            $tag = 'swp_stop';
        }
        ?>
        <div class="card p-0">
            <div class="card-body">
                <table class="table display cell-border row-border" id="update_delete_table" style="font-size: 13px;">
                    <?php
                    if ($title != 'COB') { ?>

                        <thead class="bg-dark text-white">
                            <tr class="text-center">
                                <th class="text-center">S.No.</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Month</th>
                                <th class="text-center">Number</th>
                                <th class="text-center">On / Off</th>
                                <th class="text-center">Client Name</th>
                                <?php
                                if ($title == 'SWITCH' || $title == 'STP') { ?>
                                    <th class="text-center">AMC Name</th>
                                <?php } else if ($title != 'SWP' &&  $title != 'SWP-STOP') { ?>
                                    <th class="text-center">Fund</th>
                                <?php
                                }
                                ?>
                                <th class="text-center">Scheme</th>
                                <?php
                                if ($title == 'LUMPSUM' || $title == 'SIP') { ?>
                                    <th class="text-center">Pan No.</th>
                                <?php }
                                ?>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                            $j = 1;
                            for ($i = 0; $i < count($get); $i++) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $j ?></td>
                                    <td class="text-center"><?php echo $get[$i]['' . $tag . '_date'] ?></td>
                                    <td class="text-center"><?php echo $get[$i]['' . $tag . '_month'] ?></td>
                                    <td class="text-center"><?php echo $get[$i]['' . $tag . '_s_no'] ?></td>
                                    <?php
                                    if ($title != 'COB') { ?>
                                        <td class="text-center"><?php echo $get[$i]['' . $tag . '_of_on'] ?></td>
                                    <?php } else { ?>
                                        <td class="text-center"><?php echo $get[$i]['' . $tag . '_mode'] ?></td>
                                    <?php }
                                    ?>
                                    <td class="text-center"><?php echo $get[$i]['' . $tag . '_client_name'] ?></td>
                                    <?php


                                    if ($title == 'SWITCH' || $title == 'STP' || $title == 'STP-STOP') { ?>
                                        <td class="text-center"><?php echo $get[$i]['' . $tag . '_amc_name'] ?></td>

                                    <?php } else if ($title != 'SWP' && $title != 'SWP-STOP') {
                                    ?>
                                        <td class="text-center"><?php echo $get[$i]['' . $tag . '_fund'] ?></td>
                                    <?php
                                    } else if ($title == 'SWP-STOP') {
                                    }
                                    ?>
                                    <?php
                                    if ($title == 'STP-STOP') { ?>
                                        <td class="text-center"><?php echo '[' . $get[$i]['' . $tag . '_to_scheme_name'] . '] -- [ ' . $get[$i]['' . $tag . '_from_scheme_name'] . ']' ?></td>
                                    <?php
                                    } else {
                                    ?>
                                        <td class="text-center"><?php echo $get[$i]['' . $tag . '_scheme'] ?></td>
                                    <?php

                                    }
                                    if ($title == 'LUMPSUM' || $title == 'SIP') { ?>
                                        <td class="text-center"><?php echo $get[$i]['' . $tag . '_pan_no'] ?></td>
                                    <?php }
                                    ?>
                                    <td class="text-center">
                                        <button type="button" data-update_id="<?php echo $get[$i]['id'] ?>" data-form_type="<?php echo $title ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary btn-sm update_btn" style="font-size: 10px;">Update</button>
                                    </td>
                                </tr>

                            <?php

                                $j++;
                            }
                            ?>
                        </tbody>
                    <?php
                    } else if ($title == 'COB') { ?>
                        <thead class="bg-dark text-white">
                            <tr class="text-center">
                                <th class="text-center">S.No.</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Month</th>
                                <th class="text-center">Number</th>
                                <th class="text-center">On / Off</th>
                                <th class="text-center">Client Name</th>
                                <th class="text-center">Activity</th>
                                <th class="text-center">Related Use</th>

                                <th class="text-center">Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                            $j = 1;
                            for ($i = 0; $i < count($get); $i++) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $j ?></td>
                                    <td class="text-center"><?php echo $get[$i]['' . $tag . '_date'] ?></td>
                                    <td class="text-center"><?php echo $get[$i]['' . $tag . '_month'] ?></td>
                                    <td class="text-center"><?php echo $get[$i]['' . $tag . '_s_no'] ?></td>
                                    <?php
                                    if ($title != 'COB') { ?>
                                        <td class="text-center"><?php echo $get[$i]['' . $tag . '_of_on'] ?></td>
                                    <?php } else { ?>
                                        <td class="text-center"><?php echo $get[$i]['' . $tag . '_mode'] ?></td>
                                    <?php }
                                    ?>
                                    <td class="text-center"><?php echo $get[$i]['' . $tag . '_client_name'] ?></td>
                                    <td class="text-center"><?php echo $get[$i]['' . $tag . '_activity'] ?></td>
                                    <td class="text-center"><?php echo $get[$i]['' . $tag . '_related_use'] ?></td>


                                    <td class="text-center">
                                        <button type="button" data-update_id="<?php echo $get[$i]['id'] ?>" data-form_type="<?php echo $title ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary btn-sm update_btn" style="font-size: 10px;">Update</button>
                                    </td>
                                </tr>

                            <?php

                                $j++;
                            }
                            ?>
                        </tbody>

                    <?php   }
                    ?>
                </table>
            </div>
        </div>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="<?php echo base_url() . 'asset/image/LOGO ICON.png' ?>" alt="" srcset="" width="50">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="margin-left: 10px;">Update <?php echo $title ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" id="update_form">
                        <div class="modal-body" id="update_content">

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#update_delete_table").DataTable({
                responsive: true
            });
        });

        $(".update_btn").click(function(e) {
            var form_type = $(this).data('form_type');
            var client_id = $(this).data('update_id');
            const obj = {
                client_id: client_id,
                form_type: form_type
            }
            $.ajax({
                type: "post",
                url: "<?php echo base_url() . 'Functionality/update_modal' ?>",
                data: obj,
                success: function(data) {
                    $("#update_content").html(data);
                }
            });
        })

        $("#update_form").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "<?php echo base_url() . 'Functionality/update_all_form' ?>",
                data: $('#update_form').serialize(),
                dataType: "json",
                success: function(data) {
                    console.log(data);
                }
            });
        })
    </script>


</html>