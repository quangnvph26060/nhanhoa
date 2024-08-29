

function checkRequired(value) {
    if (value == "" || value.trim() === "") {
        return false;
    }
    return true;
}
function checkInteger(value) {
    if (value.match(/^\d+$/)) {
        return true;
    }
    return false;
}
function checkCharacterPhone(value) {
    if (value.match(/^\d{10}$/)) {
        return true;
    }
    return false;
}
function checkEmail(value) {
    if (value.match(/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/)) {
        return true;
    }
    return false;
}
function checkLength(value, length) {
    if (!(value.length >= length)) {
        return false;
    }
    return true;
}
function checkPass(value) {
    if (value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/)) {
        return true;
    }
    return false;
}
function checkYear(value, year) {
    if (value >= year) {
        return true;
    }
    return false;
}
function checkURL(value) {
    if (value.match(/^http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w-.\/?%&=]*)?/)) {
        return true;
    }
    return false;

}
function validateAllFields(data){
    var isValid = true;
    for (var fieldName in data) {
       if (!validateField(fieldName, data)) {
           isValid = false;
       }
    }
    return isValid;
}
function validateField(fieldName, data) {
    var fieldValue = data[fieldName].element.value;
    var errorContainer = data[fieldName].error;
    var inputElement = data[fieldName].element;
    var validations = data[fieldName].validations;
    var hasError = false;
    var formElement = data[fieldName].element.form;
    for (var i = 0; i < validations.length; i++) {
        if (!validations[i].func(fieldValue)) {
            errorContainer.textContent = validations[i].message;
            inputElement.classList.add("is-invalid");
            hasError = true;
            break;
        }
    }
    if (hasError) {
        var firstInvalidInput = formElement.querySelector('.is-invalid');
        if (firstInvalidInput) {
            firstInvalidInput.scrollIntoView({ block: 'center', behavior: 'smooth' });
            firstInvalidInput.focus();
        }
        return false;
    }
    errorContainer.textContent = "";
    inputElement.classList.remove("is-invalid");
    return true;
}
function generateErrorMessage(code, values = []) {
    const errorMessages = {
        //đăng ký tài khoản
        E001: 'Nhập thông tin họ và tên',
        E002: 'Nhập thông tin email',
        E003: 'Nhập thông tin số điện thoại',
        E004: 'Nhập mật khẩu',
        E005: 'Xác nhận mật khẩu',

    };
    const errorMessage = errorMessages[code];
    if (typeof errorMessage === 'function') {
        return errorMessage(values);
    }
    return errorMessage;
}
