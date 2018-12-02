<!DOCTYPE html5>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--  redundant
        <link rel="stylesheet" type="text/css" href=".\bootstrap4\css\bootstrap-reboot.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href=".\bootstrap4\css\bootstrap-grid.min.css" media="screen">
        -->
        <link rel="stylesheet" type="text/css" href=".\bootstrap4\css\bootstrap.min.css" media="screen">

        <script lanuguage="javascript" src=".\js\jquery-3.3.1.min.js"></script>
        <script lanuguage="javascript" src=".\js\popper.min.js"></script>
        <script lanuguage="javascript" src=".\bootstrap4\js\bootstrap.min.js"></script>
        <script lanuguage="javascript" src=".\jquery-ui-1.12.1\external\jquery\jquery.js"></script>
        <script lanuguage="javascript" src=".\js\d3.v5.min.js"></script>
        <script lanuguage="javascript" src=".\js\underscore-min.js"></script>
        <script lanuguage="javascript" src=".\js\backbone-min.js"></script>
        <!--
        <script lanuguage="javascript" src=".\js\myapp.js"></script>
        -->

        <!-- Inner HTML javascript -->
        <script type="text/javascript">
        </script>

        <!-- HTML style shett -->
        <style>
        </style>
    </head>

    <body>

        <div class="container-fluid">

            <h2>勤務表自動化設計</h2>
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li id="indexed_main_page" class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#indexed_main_page_content">Main Page</a>
                </li>
                <li id="indexed_sqlite_admin" class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#indexed_sqlite_admin_content">SQlite Administrator</a>
                </li>
                <li id="indexed_data_presentation" class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#indexed_data_presentation_content">Data Presetation</a>
                </li>
                <li id="indexed_other" class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#other">Other</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content container-fluid">
                <div id="indexed_main_page_content" class="container tab-pane active"><br>
                    <h3>Main Page(標題)</h3>
                    <p>這個頁面主要用來資料編輯和顯示(說明)</p>
                    <div id="indexed_main_page_content_inner_1" class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-tips-tab" data-toggle="pill" href="#v-pills-tips" role="tab" aria-controls="v-pills-pills-tips" aria-selected="true">
                                    使用說明
                                    </a>
                                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-people" role="tab" aria-controls="v-pills-pills-people" aria-selected="false">
                                    人員編輯
                                    </a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-worktype-editor" role="tab" aria-controls="v-pills-worktype-editor" aria-selected="false">
                                    班表設定
                                    </a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-worksheet-generation" role="tab" aria-controls="v-pills-worksheet-generation" aria-selected="false">
                                    資料生成
                                    </a>
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-worktype-settings" role="tab" aria-controls="v-pills-worktype-settings" aria-selected="false">
                                    班種設定
                                    </a>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-tips" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <p>使用說明</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-people" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <p>人員編輯</p>
                                        <div class="card float-left" style="width: 18rem;">
                                            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                        <div class="card float-left" style="width: 18rem;">
                                            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                        <div class="card float-left" style="width: 18rem;">
                                            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                        <div class="card float-left" style="width: 18rem;">
                                            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-worktype-editor" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                                    <div class="tab-pane fade" id="v-pills-worksheet-generation" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                                    <div class="tab-pane fade" id="v-pills-worktype-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="indexed_sqlite_admin_content" class="container tab-pane fade"><br>
                    <h3>SQlite Administrator</h3>
                    <p>這個頁面是資料庫控制器</p>
                    <iframe height="100%" width="100%" src=".\phpLiteAdmin_v1-9-7-1\phpliteadmin.php"> 
                </iframe>
                </div>
                <div id="indexed_data_presentation_content" class="container tab-pane fade"><br>
                    <h3>Data Presetation</h3>
                    <p>原生資料顯示器</p>
                </div>
                <div id="other" class="container tab-pane fade"><br>
                    <h3>Other Setting</h3>
                    <p>其他所有設定</p>
                </div>
            </div>

        </div>
    </body>
</html>