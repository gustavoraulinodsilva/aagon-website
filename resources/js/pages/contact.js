function init(){
    console.log('init');
    sendContactForm();
    regexPhoneInput();
}

function sendContactForm() {
    $('.form').on('submit', function(event) {
        event.preventDefault();

        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var statusMessage = submitBtn.find('#status-message');
        var formData = form.serialize();

        submitBtn.prop('disabled', true);

        var originalText = submitBtn.text();
        submitBtn.text('Enviando...');

        $.ajax({
            url: form.attr('action'),
            method: form.attr('method') || 'POST',
            data: formData,
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                setTimeout(function() {
                    if (response.success === 1) {
                        form[0].reset();
                    } else {
                        alert('Falha ao enviar mensagem.');
                    }
                    resetButton(submitBtn, originalText);
                }, 1000);
            },
            error: function(xhr) {
                setTimeout(function() {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        var firstKey = Object.keys(errors)[0];
                        alert('Erro de validação: ' + errors[firstKey][0]);
                    } else {
                        alert('Ocorreu um erro no servidor. Tente novamente.');
                    }
                    resetButton(submitBtn, originalText);
                }, 1000);
            }
        });
    });

    function resetButton(submitBtn, originalText) {
        setTimeout(function() {
            submitBtn.prop('disabled', false);
            submitBtn.text(originalText);
        }, 3000);
    }
}

function regexPhoneInput() {
    const phoneInput = document.getElementById('phone');

        if (phoneInput) {
            phoneInput.addEventListener('input', function (e) {
                let value = e.target.value.replace(/\D/g, '');
                
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }

                if (value.length > 10) {
                    value = value.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
                } else if (value.length > 5) {
                    value = value.replace(/^(\d{2})(\d{4})(\d{0,4})$/, '($1) $2-$3');
                } else if (value.length > 2) {
                    value = value.replace(/^(\d{2})(\d{0,5})$/, '($1) $2');
                } else if (value.length > 0) {
                    value = value.replace(/^(\d*)$/, '($1');
                }

                e.target.value = value;
            });
        }
}

document.addEventListener('DOMContentLoaded', init);