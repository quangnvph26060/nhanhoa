

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
        // cloud backup
        E006: 'Nhập tên gói',
        E007: 'Nhập phí cài đặt',
        E008: 'Chọn loại Cloud Backup',
        E009: 'Nhập gói áp dụng',
        E0010: 'Nhập dung lượng tối đa',
        E0011: 'Nhập thời gian sao lưu',
        E0012: 'Nhập số bản sao lưu',
        // cloud
        E0013: 'Nhập tên gói',
        E0014: 'Nhập phí cài đặt',
        E0015: 'Chọn loại cloud',
        E0016: 'Nhập CPU',
        E0017: 'Nhập Core',
        E0018: 'Nhập SSD',
        E0019: 'Nhập RAM',
        E0020: 'Nhập IP',
        E0021: 'Nhập Bandwidth',
         // tiên miền
         E0022: 'Nhập tên miền',
         E0023: 'Chọn loại miền',
         E0024: 'Nhập lệ phí',
         E0025: 'Nhập phí duy trì',
         E0026: 'Nhập phí dịch vụ',
         E0027: 'Nhập phí dịch vụ năm sau',
         E0028: 'Chọn logo',
         // email
         E0029: 'Nhập tên dịch bụ',
         E0030: 'Nhập giá',
         E0031: 'Nhập tỷ lệ gửi mail vào inbox',
         E0032: 'Nhập dung lượng lưu trữ',
         E0033: 'Nhập Email forwarder ',
         E0034: 'Nhập danh sách email',
         E0035: 'Nhập tên miền email',
         E0036: 'Nhập địa chỉ IP',
         E0037: 'Nhập địa chỉ email',
         // google workspace Busniess
         E0038: 'Nhập tên gói',
         E0039: 'Nhập giá',
         E0040: 'Nhập dung lượng lưu trữ',
         E0041: 'Nhập giá cho 20 user đầu tiên',
         E0042: 'Nhập giá cho 21 user trở lên',
         E0043: 'Nhập phí gia hạn',
         E0044: 'Nhập số bản sao lưu',
         // google workspace education
         E0045: 'Nhập tên gói',
         E0046: 'Nhập mô tả',
         E0047: 'Nhập chi phí',
         E0048: 'Nhập dung lượng lưu trữ',

    };
    const errorMessage = errorMessages[code];
    if (typeof errorMessage === 'function') {
        return errorMessage(values);
    }
    return errorMessage;
}
