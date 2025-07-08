 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            background-color: #f7f7f7;
        }

        .login-card {
            width: 100%;
            max-width: 568px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .login-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px;
            border-bottom: 1px solid #ebebeb;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 16px;
            cursor: pointer;
            color: #717171;
        }

        .login-header h5 {
            font-size: 16px;
            font-weight: 600;
            color: #222;
            margin: 0;
        }

        .login-body {
            padding: 24px;
        }

        .login-body h4 {
            font-size: 22px;
            font-weight: 600;
            color: #222;
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #222;
            margin-bottom: 8px;
        }

        .dropdown-custom {
            position: relative;
        }

        .dropdown-toggle-custom {
            width: 100%;
            padding: 12px;
            border: 1px solid #b0b0b0;
            border-radius: 8px;
            background: white;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 16px;
            color: #222;
            transition: border-color 0.2s;
        }

        .dropdown-toggle-custom:hover {
            border-color: #222;
        }

        .dropdown-toggle-custom:focus {
            outline: none;
            border-color: #222;
            box-shadow: 0 0 0 2px rgba(34, 34, 34, 0.1);
        }

        .dropdown-menu-custom {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #b0b0b0;
            border-radius: 8px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            max-height: 200px;
            overflow-y: auto;
            display: none;
            margin-top: 4px;
        }

        .dropdown-menu-custom.show {
            display: block;
        }

        .dropdown-item-custom {
            padding: 12px;
            cursor: pointer;
            border-bottom: 1px solid #f7f7f7;
            transition: background-color 0.2s;
        }

        .dropdown-item-custom:hover {
            background-color: #f7f7f7;
        }

        .dropdown-item-custom:last-child {
            border-bottom: none;
        }

        .form-control-custom {
            width: 100%;
            padding: 12px;
            border: 1px solid #b0b0b0;
            border-radius: 8px;
            font-size: 16px;
            color: #222;
            transition: border-color 0.2s;
        }

        .form-control-custom:focus {
            outline: none;
            border-color: #222;
            box-shadow: 0 0 0 2px rgba(34, 34, 34, 0.1);
        }

        .privacy-text {
            font-size: 12px;
            color: #717171;
            margin: 16px 0;
            line-height: 1.4;
        }

        .privacy-text a {
            color: #222;
            text-decoration: underline;
        }

        .btn-primary-custom {
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, #e61e4d, #e31c5f);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-bottom: 16px;
        }

        .btn-primary-custom:hover {
            background: linear-gradient(to right, #d70466, #bd1e59);
        }

        .divider {
            text-align: center;
            margin: 16px 0;
            position: relative;
            color: #717171;
            font-size: 12px;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #ebebeb;
        }

        .divider::after {
            content: 'or';
            background: white;
            padding: 0 16px;
        }

        .btn-secondary-custom {
            width: 100%;
            padding: 14px;
            background: white;
            border: 1px solid #222;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background-color 0.2s;
        }

        .btn-secondary-custom:hover {
            background-color: #f7f7f7;
        }

        .btn-secondary-custom:last-child {
            margin-bottom: 0;
        }

        .btn-secondary-custom i {
            font-size: 18px;
        }

        .fa-google {
            color: #db4437;
        }

        .fa-apple {
            color: #000;
        }

        .fa-envelope {
            color: #717171;
        }

        .fa-facebook {
            color: #1877f2;
        }
    </style>