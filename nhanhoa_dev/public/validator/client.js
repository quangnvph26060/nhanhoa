var validate = {
    'name': {
        'element': document.getElementById('name'),
        'error': document.getElementById('name_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E001')
        }, ]
    },
    'email': {
        'element': document.getElementById('email'),
        'error': document.getElementById('email_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E002')
        }, ]
    },
    'phone': {
        'element': document.getElementById('phone'),
        'error': document.getElementById('phone_error'),
        'validations': [{
            'func': function(value) {
                return checkRequired(value);
            },
            'message': generateErrorMessage('E003')
        }, ]
    },

}

function submitlienhe(event) {
    event.preventDefault();
    if (validateAllFields(validate)) {
        document.getElementById('lienhe').submit();
    }
}
