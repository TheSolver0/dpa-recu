<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.in/templates/admin/atrio/source/dark/pages/ecommerce/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 01:29:36 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Enregistrement Master class DPA </title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="assets/css/styles/all-themes.css" rel="stylesheet" />
</head>

<body class="dark">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="assets/images/loading.png" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->

    <?php

    $nom = htmlspecialchars(strip_tags($_GET['nom']));
    $email = htmlspecialchars(strip_tags($_GET['email']));
    ?>

    <section class="content" id="contentInvoice">
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="white-box">
                                        <h3>
                                            <b>INVOICE</b>
                                            <span class="pull-right">#DPAmasterclass</span>
                                        </h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="pull-left">
                                                    <address>
                                                        <p class="font-bold">BILL FROM :</p>
                                                        <p class="text-muted">
                                                            Digital Pulse Agency,
                                                            <br> Cameroun,
                                                            <br> Littoral,
                                                            <br> Douala, Ndogbon - école royale
                                                        </p>
                                                    </address>
                                                </div>
                                                <div class="pull-right text-right">
                                                    <address>
                                                        <p class="addr-font-h3 font-bold">BILL TO :</p>
                                                        <p class="font-bold addr-font-h4">
                                                            <?php if (isset($nom))
                                                                echo $nom; ?></p>
                                                        <p class="text-muted m-l-30">
                                                            <?php if (isset($email))
                                                                echo $email; ?>,
                                                                <br> Cameroun,
                                                                <br> Littoral,
                                                                <br> Douala, Ndogbon - école royale
                                                            </p>
                                                            <p class="m-t-30">
                                                                <b>Invoice Date :</b>
                                                                <i class="fa fa-calendar"></i> 12 Octobre 2024
                                                            </p>
                                                            <p>
                                                                <b>Status :</b>
                                                                <span class="label label-success">Success</span>
                                                            </p>
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="table-responsive m-t-40">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">#</th>
                                                                    <th class="text-center">image</th>
                                                                    <th class="text-center">Description</th>
                                                                    <th class="text-center">Quantity</th>
                                                                    <th class="text-center">Unit Cost</th>
                                                                    <th class="text-right">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td class="table-img text-center">
                                                                        <img src="assets/images/products/p-13.jpg" alt="">
                                                                    </td>
                                                                    <td class="text-center">Comment heberger gratuitement
                                                                    </td>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-center">5000 XAF</td>
                                                                    <td class="text-right">5000 XAF</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="pull-right m-t-30 text-right">
                                                        <p>Avance : 5,000 XAF</p>
                                                        <p>Reste : 0 XAF </p>
                                                        <hr>
                                                        <h3>
                                                            <b>Total :</b> 5,000 XAF
                                                        </h3>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <hr>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-right">
            <button class="btn-hover btn-border-radius color-1" onclick="imprimerPDF()"><i class="fas fa-print"></i>
                Imprimer</button>
        </div>
        <script src="assets/js/app.min.js"></script>
        <!-- Custom Js -->
        <script src="assets/js/admin.js"></script>
        <script src="assets/js/html3pdf.bundle.min.js"></script>



        <script>
            function imprimerPDF() {
                /*const doc = new jsPDF({

                });
                doc.fromHTML(document.getElementById('contentInvoice').innerHTML, 15, 15);
                doc.save('exemple.pdf');*/

                let element = document.getElementById('contentInvoice').innerHTML;
                element = element.replace(/^\s*[\r\n]/gm, '');


                let opt = {
                    margin: [20, 20, 20, 20],
                    pagebreak: {
                        mode: ['avoid-all', 'css', 'legacy']
                    },
                    enableLinks: true,
                    filename: 'ticket.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 1
                    },
                    html2canvas: {
                        dpi: true,
                        letterRendering: true,
                        useCORS: true,
                        logging: true,
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'mm',
                        format: 'a4',
                        orientation: 'p',
                        precision: '2',
                        putOnlyUsedFonts: 'false'
                    }
                };

                html3pdf().from(element).set(opt).toPdf().get('pdf').then(function (pdf) {


                }).save();
            }
        </script>
    </body>


    <!-- Mirrored from www.radixtouch.in/templates/admin/atrio/source/dark/pages/ecommerce/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 01:29:36 GMT -->

    </html>