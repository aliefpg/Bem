<?php 
include '../meta.php';
include "../includes/navbar.php";
?>

<body>
    <h1 class="time">Timeline Kegiatan BEM STIKOM CKI</h1>

    <div class="timeline">
    <?php
    $events = [
        ["date" => "13 - 15 Desember 2024", "event" => "Paswa", "aos" => "fade-right", "highlight" => true, "details" => "Paswa (Pengenalan Aktivitas Studi dan Wawasan Almamater) adalah kegiatan orientasi kampus yang bertujuan untuk memperkenalkan mahasiswa baru kepada kehidupan kampus, termasuk tata tertib, budaya, organisasi mahasiswa, dan fasilitas kampus."],
        ["date" => "18 Januari 2025", "event" => "Seminar IT", "aos" => "fade-left", "highlight" => true, "details" => "Seminar IT adalah kegiatan yang bertujuan untuk memberikan wawasan dan pengetahuan terbaru di bidang teknologi informasi kepada mahasiswa. Seminar ini biasanya menghadirkan pembicara dari kalangan profesional atau praktisi IT."],
        ["date" => "25 Januari 2025", "event" => "Studi Banding", "aos" => "fade-up", "highlight" => True, "details" => "Studi Banding adalah kegiatan kunjungan mahasiswa ke organisasi atau institusi lain untuk mempelajari struktur, program, atau kegiatan yang bisa dijadikan acuan dalam pengembangan kampus atau organisasi sendiri."],
        ["date" => "Coming Soon", "event" => "Donor Darah", "aos" => "fade-right", "highlight" => false, "details" => "Donor darah adalah kegiatan sosial yang bertujuan membantu PMI (Palang Merah Indonesia) dalam mengumpulkan darah untuk disalurkan kepada yang membutuhkan, sekaligus meningkatkan kepedulian sosial mahasiswa."],
        ["date" => "Coming Soon", "event" => "Bazar Ramadhan", "aos" => "fade-left", "highlight" => false, "details" => "Bazar Ramadhan adalah kegiatan di bulan suci Ramadhan yang bertujuan menyediakan kebutuhan masyarakat kampus dan sekitar, seperti makanan berbuka puasa, pakaian, dan kebutuhan lainnya, dengan harga yang terjangkau."],
    ];
    
    foreach ($events as $event) {
        $highlightClass = $event['highlight'] ? 'highlight' : '';
        // Timeline item
        echo "<div class='timeline-item $highlightClass' data-aos='{$event['aos']}'>";
        echo "<span class='date'>{$event['date']}</span>";
        echo "<div class='event'>{$event['event']}</div>";
        echo "<div class='details' style='display: none;'>{$event['details']}</div>";
        echo "</div>";
    }
    ?>
</div>

    <script>
       document.querySelectorAll('.timeline-item').forEach(item => {
        item.addEventListener('click', () => {
            // Close all other details first
            document.querySelectorAll('.timeline-item .details').forEach(otherDetails => {
                if (otherDetails !== item.querySelector('.details')) {
                    otherDetails.classList.remove('show');
                    otherDetails.style.maxHeight = '0px';
                }
            });

            // Toggle clicked item's details
            const details = item.querySelector('.details');
            details.classList.toggle('show');
            
            if (details.classList.contains('show')) {
                details.style.display = 'block';
                details.style.maxHeight = details.scrollHeight + 'px';
            } else {
                details.style.maxHeight = '0px';
                setTimeout(() => {
                    details.style.display = 'none';
                }, 300);
            }
        });
    });

        AOS.init({
        duration: 1000,
        delay: 300
    });
    </script>
</body>
</html>
