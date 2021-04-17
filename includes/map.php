<div class="flex flex-wrap">
    <div class="sidebar">
        <div class="heading">
            <h1>Nos partenaires</h1>
        </div>
        <div id="listings" class="listings"></div>
    </div>

        <div class="container">
            <div id="map" class="map flex-wrap"></div>
        </div>
</div>
<script>
    var json = <?= json_encode(getAllPartners()); ?>
</script>
<script type="text/javascript" src="./assets/js/script.js"></script>
</main>
</body>
</html>