const ipkInput = document.querySelector('input#ipk');
const ipk = ipkInput.value;

if (ipk < 3) {
    document.querySelector('select#pilihan').disabled = true;
    document.querySelector('input#berkas').disabled = true;
    document.querySelector('button[type="submit"]').disabled = true;
}
