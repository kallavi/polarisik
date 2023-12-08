function displayFileName() {
    const fileInput = document.getElementById('fileInput');
    const customFileLabel = document.getElementById('customFileLabel');
    const imagePreview = document.getElementById('imagePreview');
    const deleteButton = document.getElementById('deleteButton');
    const addButton = document.getElementById('addButton');

    // Dosya seçildiğinde dosya adını ve önizlemeyi ekleyin
    if (fileInput.files && fileInput.files[0]) {
        const file = fileInput.files[0];
        const fileName = file.name;
        const fileExtension = fileName.split('.').pop().toLowerCase();
        const allowedExtensions = ['jpg', 'jpeg', 'png'];

        if (allowedExtensions.includes(fileExtension)) {
            // Dosya adını etikete ekleyin
            customFileLabel.textContent = fileName;

            // Resim önizlemesini göster
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
                addButton.style.display = 'none'; // Display the delete button
                imagePreview.style.display = 'block'; // Display the image preview
                deleteButton.style.display = 'block'; // Display the delete button
            };

            reader.readAsDataURL(file);
        } else {
            // Uyarı ver, geçersiz dosya türü
            alert('Sadece JPG ve PNG dosyaları yüklenebilir.');
            fileInput.value = ''; // Temizle seçilen dosyayı
        }
    }
}

function deleteImage() {
    const fileInput = document.getElementById('fileInput');
    const customFileLabel = document.getElementById('customFileLabel');
    const imagePreview = document.getElementById('imagePreview');
    const addButton = document.getElementById('addButton');
    const deleteButton = document.getElementById('deleteButton');

    fileInput.value = ''; // Clear the file input
    customFileLabel.textContent = 'Dosyanızı Yükleyiniz';
    imagePreview.src = '';
    imagePreview.style.display = 'none'; // Hide the image preview
    deleteButton.style.display = 'none'; // Hide the delete button
    addButton.style.display = 'block'; // Hide the delete button
}
// Fonksiyonu tanımla
function checkValidity(inputElement, mask) {
    var inputValue = inputElement.val();
    var isValid = mask.test(inputValue);

    if (!isValid) {
        inputElement.addClass('error');
    } else {
        inputElement.removeClass('error');
    }
}

$('.emailMask').on('input', function () {
    checkValidity($(this), /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/);
});

$('.tcNo').mask('00000000000').on('input', function () {
    checkValidity($(this), /^[0-9]{11}$/);
});

$('.ibanMask').mask('TR00 0000 0000 0000 0000 0000 00').on('input', function () {
    checkValidity($(this), /^TR\d{2}\s\d{4}\s\d{4}\s\d{4}\s\d{4}\s\d{4}\s\d{2}$/);
});
// Telefon numarası maskı: 0 (000) 000-0000
$('.phoneMask').mask('0 (000) 000-0000').on('input', function () {
    var inputValue = $(this).val();

    // Başında 0 yoksa otomatik olarak ekle
    if (inputValue.length > 2 && inputValue.charAt(2) !== '0') {
        inputValue = '0 ' + inputValue.substring(2);
        $(this).val(inputValue);
    }

    // Doğrulama işlemi
    checkValidity($(this), /^0 \([0-9]{3}\) [0-9]{3}-[0-9]{4}$/);
});
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        if (form.checkValidity()) {
            // Bootstrap form validasyonu
            if (!form.classList.contains('was-validated')) {
                form.classList.add('was-validated');
            }

            const formData = new FormData(form);

            $.ajax({
                type: 'POST',
                url: '../../../action.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response === 'ok') {
                        // Eğer cevap 'ok' ise, Bootstrap modal'ı aç
                        $("#successModal .responseText").text('Form başarıyla gönderildi. Sunucu cevabı: ' + response)
                        $('#successModal').modal('show');
                    } else {
                        // Diğer başarı durumlarını ele al veya bir uyarı göster
                        $("#successModal .responseText").text('Form başarıyla gönderildi. Sunucu cevabı Diğer: ' + response)
                        $('#successModal').modal('show');
                    }
                },
                error: function () {
                    // Diğer başarı durumlarını ele al veya bir uyarı göster
                    $("#successModal .responseText").text('Form Gönderilemedi. Sunucu cevabı Error: ' + response)
                    $('#successModal').modal('show');
                }
            });
        } else {
            // Bootstrap form validasyonu
            if (!form.classList.contains('was-validated')) {
                form.classList.add('was-validated');
            }

            // alert('Form validasyonu başarısız oldu. Lütfen girişlerinizi kontrol edin.');
        }
    });
});

// sadece metin girilmesi icin kullanılan mask
$('.textMask').mask('A', {
    translation: {
        'A': {
            pattern: /[A-Za-zÇçĞğİıÖöŞşÜü ]/,
            recursive: true
        }
    }
});
//sadece numara girilebilmesin icin mask
$('.allNumber').mask('0', {
    translation: {
        '0': {
            pattern: /[0-9]/,
            recursive: true
        }
    }
});
$('.birthdayMask').mask('00/00/00', {
    translation: {
        '0': { pattern: /\d/ },
    }
});



    
    if (typeof jQuery !== 'undefined' && typeof jQuery.ui !== 'undefined' && typeof jQuery.ui.datepicker !== 'undefined') {
        // datepicker kullanılabilir, kodunuzu buraya yazın
        $('#birthday').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-100:+0",
            onSelect: function (dateText, inst) {
                checkAge(dateText);
            }
        });
        $.datepicker.setDefaults($.datepicker.regional['tr']);
    } 
    
function checkAge(dateText) {
    var dateParts = dateText.split("/");
    var selectedDate = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]); // dd/mm/yyyy formatını desteklemek için ayın bir eksik değeri alınır
    var currentDate = new Date();
    var age = currentDate.getFullYear() - selectedDate.getFullYear();
    console.log("age2 : " + age)

    if (age < 20) {
        $('.responseText').text('');
        $('#birthday').val('');
        $('#successModal2').modal('show');
        $('#successModal2').on('shown.bs.modal', function (e) {
            $('.responseText').text('20 yaş altı kayıt alınmamaktadır.');
        });
    }
    else if (age > 50) {
        $('#birthday').val('');
        $('#successModal2').modal('show');
        $('#successModal2').on('shown.bs.modal', function (e) {
            $('.responseText').text('50 yaş üzeri kayıt alınmamaktadır.');
        });
    } else {
        // Modalı göster
        $('#successModal2').modal('hide');
        $('#successModal2').on('hidden.bs.modal', function (e) {
            $('#birthday').val('');
        });
        $('.responseText').text('');
    }
}