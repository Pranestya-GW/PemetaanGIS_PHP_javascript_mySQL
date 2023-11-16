(function ($) {


    function countdown () {
    arrbulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
date = new Date();
millisecond = date.getMilliseconds();
detik = date.getSeconds();
menit = date.getMinutes();
jam = date.getHours();
hari = date.getDay();
tanggal = date.getDate();
bulan = date.getMonth();
tahun = date.getFullYear();

            var ref_days = (days === 1) ? 'day' : 'days',
                ref_hours = (hours === 1) ? 'hour' : 'hours',
                ref_minutes = (minutes === 1) ? 'minute' : 'minutes',
                ref_seconds = (seconds === 1) ? 'second' : 'seconds';

            container.find('.hari').text(hari);
            container.find('.jam').text(jam);
            container.find('.menit').text(menit);
            container.find('.detik').text(detik);

            container.find('.hari_ref').text(ref_hari);
            container.find('.jam_ref').text(ref_jam);
            container.find('.menit_ref').text(ref_menit);
            container.find('.detik_ref').text(ref_detik);
        }

})(jQuery);