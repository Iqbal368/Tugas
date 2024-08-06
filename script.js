document.addEventListener('DOMContentLoaded', (event) => { //Menunggu hingga halaman selesai dimuat.
    const form = document.getElementById('reservationForm');

    form.addEventListener('submit', function(event) { // Menambahkan listener pada form untuk menangani saat form dikirim.
        event.preventDefault(); //Mencegah pengiriman form secara langsung.

        if (validateForm()) { //Fungsi untuk memeriksa apakah semua field yang diperlukan telah diisi.
            alert('Form submitted successfully!');
            form.submit(); // Mengirim form jika validasi berhasil.
        }
    });

    function validateForm() {
        let isValid = true;
        const requiredFields = ['nama', 'alamat', 'email', 'status', 'check_in', 'check_out'];

        requiredFields.forEach(field => {
            const input = document.getElementById(field);
            if (input.value.trim() === '') {
                alert(`Please fill out the ${field} field.`);
                isValid = false;
            }
        });

        return isValid;
    }
});
