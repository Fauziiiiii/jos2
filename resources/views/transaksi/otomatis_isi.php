<script>
    // Mendengarkan perubahan nilai pada input pajak
    $('#pajak').on('input', function () {
        // Ambil nilai pajak
        var pajak = parseFloat($(this).val()) || 0;

        // Harga paket atau nilai biaya tambahan (misalnya: 100)
        var hargaPaket = 100; // Gantilah dengan harga paket yang sesuai

        // Menghitung biaya tambahan berdasarkan pajak
        var biayaTambahan = (pajak / 100) * hargaPaket;

        // Mengisi otomatis input biaya_tambahan
        $('#biaya_tambahan').val(biayaTambahan.toFixed(2));
    });

    // Mendengarkan perubahan nilai pada input diskon
    $('#diskon').on('input', function () {
        // Ambil nilai diskon
        var diskon = parseFloat($(this).val()) || 0;

        // Harga paket atau nilai biaya tambahan (misalnya: 100)
        var hargaPaket = 100; // Gantilah dengan harga paket yang sesuai

        // Menghitung pajak berdasarkan diskon
        var pajak = (diskon / 100) * hargaPaket;

        // Mengisi otomatis input pajak
        $('#pajak').val(pajak.toFixed(2));
    });
</script>


<script>
    // Mendengarkan perubahan nilai pada input paket
    $('#paket').on('change', function () {
        // Ambil data paket yang dipilih
        var selectedPaket = $(this).find(':selected');
        var hargaPaket = parseFloat(selectedPaket.data('harga')) || 0;

        // Mengisi otomatis harga paket
        $('#harga_paket').val(hargaPaket.toFixed(2));
    });

    // Mendengarkan perubahan nilai pada input qty
    $('#qty').on('input', function () {
        // Ambil nilai qty
        var qty = parseFloat($(this).val()) || 0;
        var hargaPaket = parseFloat($('#harga_paket').val()) || 0;

        // Menghitung harga total
        var hargaTotal = qty * hargaPaket;

        // Mengisi otomatis harga total
        $('#harga_total').val(hargaTotal.toFixed(2));

        // Mengisi otomatis keterangan
        var keterangan = qty + ' x ' + hargaPaket + ' (harga per item) = ' + hargaTotal;
        $('#keterangan').val(keterangan);
    });
</script>

