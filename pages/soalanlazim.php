 <?php
 include('../components/unprotected_route.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--==title===========================-->
    <title>Soalan Lazim</title>
    <!--==CSS=============================-->
    <link rel="stylesheet" href="../style/stylesoalanlazim.css">
    <!--==poppins-font====================-->
    <link rel="stylesheet" href="../style/stylehome.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

</head>
<body>
    <?php
        include("../components/navbar_index.php");
    ?>
	<section id="faq">
    	<div class="faq-heading">
            <h3>Soalan Lazim</h3>
        </div>

        <!-- Container -->
        <div class="faq-content">
            <!-- faq -->
            <div class="faq-box-container">

                <div class="faq-box">
                    <div class="faq-box-question active">
                            <h4>Apa maksud &#8220;APP&#8221; yang dilantik?</h4>
                            <span class="faq-box-icon"></span>
                    </div>
                    <div class="faq-box-answer" style="max-height: 100px;">
                        <p>Ahli Panel Penilai (APP) adalah pakar dalam bidang berkaitan yang mempunyai latar belakang yang berbeza. </p>
                    </div>
                </div>

                <div class="faq-box">
                    <div class="faq-box-question">
                            <h4>Bagaimana proses pelantikan APP?</h4>
                            <span class="faq-box-icon"></span>
                    </div>
                    <div class="faq-box-answer">
                        <p>Permohonan untuk dilantik sebagai APP boleh diterima daripada Bahagian Akreditasi/ PPT/ Industri/ Badan Profesional/ perseorangan melalui surat atau emel dengan menggunakan borang Permohonan APP.</p>
                    </div>
                </div>

                <div class="faq-box">
                    <div class="faq-box-question">
                            <h4>Apa tugas dan tanggungjawab APP?</h4>
                            <span class="faq-box-icon"></span>
                    </div>
                    <div class="faq-box-answer">
                        <p>1. Meneliti dokumen-dokumen, laporan-laporan, rekod yang dikemukakan dan memberi ulasan mengikut kaedah penilaian yang ditetapkan.<br>2. Menilai dan mengulas standard dan kualiti program yang dinilai.</p>
                    </div>
                </div>

            </div>
            <div class="faq-img">
                <img src="../img/faqimg.jpg" alt="FAQs">
            </div>
        </div>

    </section>

    <?php
          include("../components/footer.php");
        ?>



    <script>
var faq = document.getElementsByClassName("faq-box-question");
var i;
for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");
        /* Toggle between hiding and showing the active panel */
        var body = this.nextElementSibling;
        if (body.style.maxHeight === "100px") {
            body.style.maxHeight = "0px";
        } else {
            body.style.maxHeight = "100px";
        }
    });
}
    </script>


</body>
</html>