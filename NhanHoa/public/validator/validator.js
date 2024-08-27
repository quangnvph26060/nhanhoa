

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
        E001: 'Mật khẩu không để trống',
        E002: 'Mật khẩu ít nhất 8 ký tự',
        E003: 'Vui lòng nhập tìm kiếm',
        E004: 'Số CCCD không được để trống',
        E005: 'Số CCCD  it nhất 10 ký tự',
        E006: 'Ngân hàng không được để trống',
        E007: 'Số tài khoản ngân hàng không được để trống',
        E008: 'Tên chủ tài khoản không được để trống',
        E009: 'Tên chủ tài khoản it nhât 4 ký tự',
        // sản phẩm
        E010: 'Tên sản phẩm không được để trống',
        E011: 'Ảnh không được để trống',
        E012: 'Giá sản phẩm không được dể trông',
        E013: 'Số lượng sản phẩm không được dể trông',
        E014: 'Hoa hồng không được để sống',
        E015: 'Danh mục không dược để trống',
        E016: 'Mô tả không được để trống',
        E017: 'Trạng thái không được để trống',
        E018: ' Không được để trống ',
        E019: 'Vui lòng nhập họ tên',
        E020: 'Địa chỉ không được để trống',
        E021: 'Vui lòng chọn thành phố',
        E022: 'Vui lòng chọn quận/huyện',
        E023: 'Vui lòng chọn phường/xã',
        E024: 'Điện thoại không để trống',
        E025: 'Email không được để trống',
        E026: 'Tài khoản không để trống',
        E045: 'Đơn vị không được để trống',
        // thuong hieu
        E027: ' Thương hiệu không để trống',
        E028: ' Logo không để trống',
        E029: ' Email không để trống',
        E030: ' Số điện thoại không để trống',
        E031: ' Địa chỉ không để trống',
        // order
        E032 : ' Nhập tên khách hàng ',
        E033 : ' Nhập email thoại khách hàng ',
        E034 : ' Nhập số điện thoại khách hàng ',
        E035 : ' Nhập địa chỉ khách hàng ',
        E036 : ' Chọn phương thức thanh toán ',
        E042 : ' Nhập ngày sinh ',
        E043 : ' Nhập mã bưu diện ',
        E044 : ' Chọn giới tính ',
        // nhanvien
        E037 : ' Nhập tên nhân viên ',
        E038 : ' Nhập email nhân viên ',
        E039 : ' Nhập số điện thoại nhân viên ',
        E040 : ' Nhập địa chỉ nhân viên ',
        E041 : ' Xác nhận mật khẩu mới ',
        E046 : 'Chọn nơi làm việc',
        // dang ky
        R042: ' Họ tên không được để trống',
        R043: ' Số điện thoại không được để trống',
        R044: ' Số điện thoại đã tồn tại trong hệ thống',
        R045: ' Toàn bộ ký tự phải là số',
        R046: ' Email không được để trống',
        R047: ' Email không đúng định dạng',
        R048: ' Tên cửa hàng không được để trống',
        R049: ' Vui lòng chọn khu vực hoạt động',
        R050: ' Vui lòng chọn lĩnh vực hoạt động',
        R051: ' Địa chỉ không được để trống',
        R052: ' Email đã tồn tại trong hệ thống',
        R053: ' Số điện thoại không hợp lê',
        // thu chi
        TC001: 'Không  để trống nhà cung cấp',
        TC002: 'Không để trống tiền ',
        TC003: 'Không để trống khách hàng',
        TC004: 'Nội dung không được để trống',
        // khách hàng
        KH001 : 'Nhóm khách hàng không được để trống',

        //Kho hàng
        S001: 'Tên kho hàng không được để trống',
        S002: 'Địa điểm kho hàng không được để trống'

    };
    const errorMessage = errorMessages[code];
    if (typeof errorMessage === 'function') {
        return errorMessage(values);
    }
    return errorMessage;
}
