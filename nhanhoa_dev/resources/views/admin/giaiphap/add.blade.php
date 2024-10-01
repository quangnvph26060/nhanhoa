@extends('admin.layout.index')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard-all/ckeditor.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f4f6f9;
        margin: 0;
        padding: 0;
    }

    .icon-bell:before {
        content: "\f0f3";
        font-family: FontAwesome;
    }

    .card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background-color: #fff;
        margin-bottom: 2rem;
    }

    .card-header {
        background: linear-gradient(135deg, #6f42c1, #007bff);
        color: white;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        padding: 1.5rem;
        text-align: center;
    }

    .card-title {
        font-size: 1.75rem;
        font-weight: 700;
        margin: 0;
    }

    .breadcrumbs {
        background: #fff;
        padding: 0.75rem;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .breadcrumbs a {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
    }

    .breadcrumbs i {
        color: #6c757d;
    }

    .form-label {
        font-weight: 500;
    }

    .form-control,
    .form-select {
        border-radius: 5px;
        box-shadow: none;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .add_product>div {
        margin-top: 20px;
    }

    .modal-footer {
        justify-content: center;
        border-top: none;
    }

    textarea.form-control {
        height: auto;
    }

    #description {
        border-radius: 5px;
    }

    .add_product>div {
        margin-top: 20px;
    }

    .tags-input .tag {
        display: inline-block;
        background-color: #007bff;
        color: white;
        padding: 0.5rem;
        border-radius: 3px;
        margin-right: 0.5rem;
        margin-bottom: 0.5rem;
        position: relative;
    }

    .tags-input .tag button {
        background: none;
        border: none;
        color: white;
        font-weight: bold;
        margin-left: 0.5rem;
        cursor: pointer;
        padding: 0;
    }

    .input-container input {
        width: 100%;
        padding: 0.5rem;
        margin-top: 1rem;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    .cke_notifications_area{
        display: none;
    }
</style>

<div class="page-inner">
    <div class="page-header">
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.giaiphap.index') }}">Giải pháp</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Thêm</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center; color:white">Thêm giải pháp</h4>
                </div>
                <div class="card-body">

                    <div class="">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <form method="POST" action="{{ route('admin.giaiphap.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label class="form-label" for="content">Tiêu đề:</label><br>
                                            <input type="text" class="form-control" id="title" name="title"
                                                style="width:100%; padding: 10px;" required >
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="content">Nội dung :</label><br>
                                            <textarea name="content" class="form-control" id="content" rows="10"
                                                cols="80"></textarea><br><br>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  CKEDITOR.replace('content', {
    toolbar: [
        { name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
        { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
        { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt' ] },
        { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
        '/',
        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', '-', 'Subscript', 'Superscript', '-', 'Strike', 'RemoveFormat' ] },
        { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
        { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
        '/',
        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
        { name: 'tools', items: [ 'Maximize', 'ShowBlocks', '-' ] },
        { name: 'about', items: [ 'About' ] }
    ],
    extraPlugins: 'font,colorbutton,justify',
    fontSize_sizes: '11px;12px;13px;14px;15px;16px;18px;20px;22px;24px;26px;28px;30px;32px;34px;36px',
    on: {
        instanceReady: function() {
            // Sử dụng MutationObserver để ẩn thông báo không an toàn
            var observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    var notifications = mutation.target.querySelectorAll('.cke_notification');
                    notifications.forEach(function(notification) {
                        if (notification.textContent.includes('version is not secure')) {
                            notification.style.display = 'none'; // Ẩn thông báo
                        }
                    });
                });
            });

            // Bắt đầu theo dõi các thay đổi trong phần tử CKEditor
            observer.observe(this.container.$.querySelector('.cke_top'), {
                childList: true,
                subtree: true
            });
        }
    }

});

</script>

@endsection
