<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('Tra/signup_signin/style.css') }}">
    <title>Đăng nhập & Đăng ký</title>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                @csrf
                <h2 class="title">Đăng nhập</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email" autocomplete="username">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" name="password" required placeholder="Mật khẩu" autocomplete="current-password">
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span class="ms-2 text-sm text-gray-600">Ghi nhớ đăng nhập</span>
                    </label>
                </div>
                <input type="submit" value="Đăng nhập" class="btn solid">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 mt-2" href="{{ route('password.request') }}">
                        Quên mật khẩu?
                    </a>
                @endif
            </form>

            <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                @csrf
                <h2 class="title">Đăng ký</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Tên tài khoản" autofocus autocomplete="name">
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="username">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                
                <div class="input-field">
                    <i class="fas fa-user-tag"></i>
                    <select id="usertype" name="usertype" required>
                        <option value="user" {{ old('usertype') == 'user' ? 'selected' : '' }}>user</option>
                        <option value="admin" {{ old('usertype') == 'admin' ? 'selected' : '' }}>admin</option>
                    </select>
                </div>
                <x-input-error :messages="$errors->get('usertype')" class="mt-2" />
                
                <div class="input-field">
                    <i class="fas fa-phone"></i>
                    <input type="text" id="phone" name="phone" required placeholder="Số điện thoại" value="{{ old('phone') }}" autocomplete="phone">
                </div>
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" required placeholder="Mật khẩu" autocomplete="new-password">
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Xác Nhận Mật khẩu" autocomplete="new-password">
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                
                <input type="submit" class="btn" value="Đăng ký" />
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Chưa có tài khoản?</h3>
                <p>Đăng ký ngay để mở khóa toàn bộ chức năng!</p>
                <button class="btn transparent" id="sign-up-btn">Đăng ký</button>
            </div>
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Đã có tài khoản?</h3>
                <p>Đăng nhập ngay để sử dụng toàn bộ chức năng!</p>
                <button class="btn transparent" id="sign-in-btn">Đăng nhập</button>
            </div>
        </div>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="{{ asset('Tra/signup_signin/app.js') }}"></script>
</body>
</html>