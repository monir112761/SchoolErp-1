<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="<?= base_url() ?>public/assets/css/bootswatch_paper.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?= base_url() ?>public/assets/css/google_fonts.css' rel='stylesheet' type='text/css'>
    <title>
        Admissions
    </title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= site_url('dashboard/') ?>"><img
                        src="<?= base_url() ?>public/assets/img/dash.png" style="margin-top: -12px;" height="50" width="50"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?= site_url('admissions'); ?>">Admission Registers</a></li>
                <li><a href="<?=site_url('admissions/student_details'); ?>">Create</a></li>
                <li><a href="<?=site_url('admissions/import'); ?>">Import</a></li>
                <li><a href="<?=site_url('admissions/export'); ?>">Export</a></li>
                <li><a href="<?=site_url('admissions/admission_form'); ?>">Admissions Form</a></li>
                <li><a href="<?=site_url('admissions/send_sms'); ?>">Send SMS</a></li>
                <li><a href="<?=site_url('admissions/id_card'); ?>">ID Card</a></li>
                <li><a href="<?=site_url('admissions/create_list'); ?>">List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php
                        foreach($username as $user):
                            echo $user->admin_name;
                        ?>
                        <?php endforeach; ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=site_url('dashboard/documentation') ?>">Documentation</a></li>
                        <li><a href="<?=site_url('dashboard/support') ?>">Support</a></li>
                        <li><a href="<?=site_url('dashboard/prefrences') ?>">Prefrences</a></li>
                        <li><a href="<?=site_url('dashboard/logout') ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
