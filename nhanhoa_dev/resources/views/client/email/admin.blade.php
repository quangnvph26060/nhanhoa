<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 20px;
            border-bottom: 2px solid #ddd;
        }
        .header h1 {
            margin: 0;
            color: #333;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 0 0 10px;
            color: #555;
        }
        .info-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .info-list li {
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }
        .info-list li:last-child {
            border-bottom: none;
        }
        .info-list strong {
            display: inline-block;
            width: 150px;
            color: #333;
        }
        .footer {
            text-align: center;
            padding: 20px;
            border-top: 2px solid #ddd;
            background-color: #f9f9f9;
        }
        .footer p {
            margin: 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Khách hàng : {{ $name }} </h1>
        </div>
        <div class="content">
            <p>Thông báo,</p>
            <p>Khách hàng muốn liên hệ với bạn để trao đổi gói sản phẩm.</p>
            <p><strong>Thông tin khách hàng:</strong></p>
            <ul class="info-list">
                <li><strong>Tên:</strong> {{ $name}}</li>
                <li><strong>Số điện thoại:</strong> {{ $phone }}</li>
                <li><strong>Email:</strong> {{ $email }}</li>
                <li><strong>Gói {{ $title }}:</strong> {{ $productname }}</li>
            </ul>
        </div>
        <div class="footer">
            <p>Chúng tôi sẽ liên hệ cho bạn sớm nhất !</p>
        </div>
    </div>
</body>
</html>
