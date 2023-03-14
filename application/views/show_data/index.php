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
        #Show_data_table_filter {
            margin-bottom: 10px;
        }

        #Show_data_table_filter,
        #Show_data_table_length,
        #Show_data_table_info,
        #Show_data_table_paginate {
            font-size: 13.5px;
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

        <?php
        // echo '<pre>';
        // print_r($get);
        // die();
        ?>

        <div class="container-fluid">
            <div class="card">
                <div class="card">
                    <?php
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
                </div>
            </div>
        </div>


    </body>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            let table = new DataTable('#Show_data_table');
        });
    </script>


</html>