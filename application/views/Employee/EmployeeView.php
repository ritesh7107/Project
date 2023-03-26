<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<style>
    .dform-group label {
        position: absolute;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #1273eb;
        background: #ffffff;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        top: -25px;
        left: 24px;
        padding: -1px 7px;
        z-index: 10;
        text-align: left;
    }

    .fform-group label {
        position: absolute;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #1273eb;
        background: #ffffff;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        top: -30px;
        left: 24px;
        padding: -1px 7px;
        z-index: 10;
        text-align: left;
    }

    .form-group label {
        position: absolute;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #1273eb;
        background: #ffffff;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 400;
        top: -25px;
        left: 7px;
        padding: -1px 7px;
        z-index: 10;
        text-align: left;
    }

    .select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
    .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
        color: #0161b5;
        background-color: #fff;
        border-color: #0161b5;
        border: 2px solid #0161b5;
    }

    .select2-container--classic .select2-selection--multiple:hover {
        color: #0161b5;
        background-color: #fff;
        border-color: #0161b5;
        border: 1px solid #0161b5;
    }

    .select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple:hover {
        color: #0161b5;
        background-color: #fff;
        border-color: #0161b5;
        border: 2px solid #0161b5;
    }

    .select2-container--default.select2-container--open.select2-container--below .select2-selection--single:hover {
        color: #0161b5;
        background-color: #fff;
        border-color: #0161b5;
        border: 1px solid #0161b5;
    }

    .select2-container--default .select2-selection--single:hover {
        border: 1px solid #0161b5;
    }

    .select2-container--classic .select2-selection--multiple :hover {
        border: 1px solid #0161b5;
    }


    c {
        color: red;
        font-size: 14px;
        font-weight: 500;
    }

    .bord {

        border: 2px solid grey;
        border-radius: 10px;
        padding: 7px;
    }

    .bords {

        border: 2px solid grey;
        border-radius: 10px;
    }

    .heads {
        margin-left: 22px;
        margin-top: -15px;
        background: white;
        width: 204px;
        color: #0161b5;
        font-weight: 800;
        padding-left: 5px;
    }

    .head {
        margin-left: 22px;
        font-size: 25px;
        margin-top: -25px;
        background: white;
        width: 110px;
        color: #0161b5;
        font-weight: 800;
        padding-left: 5px;

    }


    .dt {
        margin-top: -40px;
        margin-bottom: -10px;
    }

    /* Button css */
    .btn-md {
        font-size: 17px;
    }

    .btn-edit {
        background: #FFBF00;
        background-size: 100% 100%;
        background-position: right bottom;
        transition: all .4s ease-out;
        border: none;
        margin-top: 20px;
    }

    .btn-save {
        background: linear-gradient(to right, #067e5c 50%, #1273eb 50%);
        background-size: 200% 100%;
        background-position: right bottom;
        transition: all .4s ease-out;
        border: none;
        margin-top: 20px;
        margin: 0 auto;
    }

    .btnright:not(:disabled):not(.disabled) {
        margin-right: -12px;
    }

    .text-right {
        text-align: right !important;
    }

    .header {
        margin-left: 22px;
        font-size: 15px;
        margin-top: 2px;
        width: 50px;
        color: #0161b5;
        font-weight: 800;

    }

    .special {
        font-weight: bold !important;
        color: #fff !important;
        background: #bc0000 !important;
        text-transform: uppercase;
    }

    .select2-container--default .select2-selection--single {
        background-color: white;
        border: 1px solid #ced4da;
        border-radius: 5px;
        cursor: text;
        margin-top: -15px;
        height: 32px;
        text-bottom: 20px;
    }

    .select2-container--classic .select2-selection--multiple {
        background-color: white;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: text;
        margin-top: -15px;
        outline: 0;
        min-height: 50px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #888 transparent transparent transparent;
        border-style: solid;
        border-width: 5px 4px 0 4px;
        height: 0;
        left: 50%;
        margin-left: -4px;
        margin-top: -15px;
        position: absolute;
        top: 50%;
        width: 0;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        margin-top: 4px;
        /* line-height: 37px; */
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__choice {
        color: #1273EB;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: default;
        float: left;
        margin-right: 0px;
        margin-top: 11px;
        padding: 0 5px;
        font-size: 11px;
    }

    @media only screen and (max-width: 768px) {

        .form-group {
            height: 20vh;
            width: 80%;

            margin-top: 50%;
            z-index: 2;
        }

        .mdwn {
            margin-top: 15px;
            !important
        }

        .fdwn {
            margin-top: 35px;
            !important
        }

        .gap {
            margin-top: -30px;
            !important
        }
    }

    .input-tab {
        margin-top: 20px;
    }

    /* @media only screen and (max-width: 425px)
{
    .breadcrumb {
  background: transparent;
  justify-content: center;
  align-items: center;
  margin: 7px 0 1.25rem;

 }
} */

    .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #eee;
        border-radius: 0.25rem;
    }

    .breadcrumb {
        background: transparent;
        justify-content: center;
        align-items: center;
        margin: 7px 0 1.25rem;

    }

    .breadcrumb img {
        margin-top: -70px;
        margin-bottom: -45px;

    }

    .breadcrumb h4 {
        margin-left: 2px;
        margin-top: -20px;
        position: absolute;
        color: var(--white);
        text-align: center;
        font-family: Frozen;
        font-weight: 600;
        font-size: 1.4rem;
        line-height: 1;
    }

    .btn1 {
        background-color: #1a8ae5;
        width: 90px;
        height: 40px;
        font-size: 15px;
        margin: -1px;
    }

    .btn1:before {
        height: 0%;
        width: 2px;
    }

    .btn1:hover {
        box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .5),
            -4px -4px 6px 0 rgba(116, 125, 136, .5),
            inset -4px -4px 6px 0 rgba(255, 255, 255, .2),
            inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
    }

    .btn2 {
        background-color: #b284be;
        width: 90px;
        height: 40px;
        font-size: 15px;
    }

    .btn2 {
        background: rgb(96, 9, 240);
        background: linear-gradient(0deg, rgba(96, 9, 240, 1) 0%, rgba(129, 5, 240, 1) 100%);
        */ border: none;

    }

    .btn2:before {
        height: 0%;
        width: 2px;
    }

    .btn2:hover {
        box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .5),
            -4px -4px 6px 0 rgba(116, 125, 136, .5),
            inset -4px -4px 6px 0 rgba(255, 255, 255, .2),
            inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
    }
</style>


<link rel="stylesheet" href="/">


<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <img height="50px" width="280px" src="<?php echo base_url() ?>Assets\images\ribbon.png ">
            <h4>Add Employee</h4>
            <!-- <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul> -->
        </div>
        <div style="margin-top:-10px;" class=" border-top"></div>
        <div class="row card p-3">
            <div class="col-12">
                <div class=" p-2">
                    <div class="bord">
                        <h3></h3>
                        <form id="Form" action="" method="POST">
                            <div class="row p-3">
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group input-tab">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="Email" name="Email" required value="<?php if (!empty($data))
                                        echo $data[0]->Email; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group input-tab">
                                    <label>Address</label>
                                    <input type="text" class="form-control" id="Address" name="Address" required value="<?php if (!empty($data))
                                        echo $data[1]->Address; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group input-tab">
                                    <label>Primary Mobile Number</label>
                                    <input type="number" class="form-control" id="PrimaryMobileNumber"
                                        name="PrimaryMobileNumber" required value="<?php if (!empty($data))
                                            echo $data[2]->PrimaryMobileNumber; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group input-tab">
                                    <label>Secondary Mobile Number</label>
                                    <input type="text" class="form-control" id="SecondaryMobileNumber"
                                        name="SecondaryMobileNumber" required value="<?php if (!empty($data))
                                            echo $data[3]->SecondaryMobileNumber; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group input-tab">
                                    <label>Date of Joining</label>
                                    <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" required
                                        value="
                                    <?php if (!empty($data))
                                        echo $data[4]->DateOfBirth; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group input-tab">
                                    <label>Date of Joining</label>
                                    <input type="date" class="form-control" id="DateOfJoining" name="DateOfJoining"
                                        required value="
                                    <?php if (!empty($data))
                                        echo $data[5]->DateOfJoining; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group input-tab">
                                    <label>Photo</label>
                                    <input type="file" class="form-control" id="Photo" name="Photo"
                                        required value="
                                    <?php if (!empty($data))
                                        echo $data[6]->Photo; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group input-tab">
                                    <label>Aadhar Number</label>
                                    <input type="number" class="form-control" id="AadharNumber" name="AadharNumber"
                                        required value="
                                    <?php if (!empty($data))
                                        echo $data[7]->AadharNumber; ?>" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group input-tab">
                                    <label>Pan Number</label>
                                    <input type="text" class="form-control" id="PanNumber" name="PanNumber" required
                                        value="
                                    <?php if (!empty($data))
                                        echo $data[8]->PanNumber; ?>" />
                                </div>

                                <?php if (!empty($data)) {
                                    echo "<input name='EmployeeId' id='EmployeeId' value='" . $data[0]->EmployeeId . "' type='hidden' />";
                                }
                                ?>
                                <div type="submit" class="col-md-12 text-right">
                                    <button class="btn btn-md btn-success btnright text-white" 
                                        name="btn_save" type="button" id="btn_save"><i
                                            class="nav-icon fa-regular fa-circle-check "></i> Save</button>

                                    <!-- <button class="btn btn-md btn-warning text-white" type="button" name="cancle" id="cancle">
                                        <i class="fa-sharp fa-solid fa-pen-to-square">
                                        <a href="index"style="z-index:-1;color:white;"></i> Edit
                                    </button> -->
                                    <button class="btn btn-md btn-warning text-white" type="button" name="cancle"
                                        id="cancle">
                                        <a href="index" style="background-color: transparent;
                                                                color:white;
                                                                text-decoration:none;">
                                            <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                            Edit
                                        </a>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script src="<?php echo base_url('web_resources'); ?>/dist/js/jquery.min.js"></script>
        <script src="<?php echo base_url('web_resources'); ?>/dist/js/controllers/employee_create.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


        <script>


            $("#company_type").select2({});

        </script>
        