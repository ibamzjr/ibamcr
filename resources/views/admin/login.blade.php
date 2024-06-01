<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .background-img {
            background-image: url('/mnt/data/Group 383.png');
            background-size: cover;
            background-position: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="background-img"></div>
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6">LOGIN ADMIN</h2>
        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="username">USERNAME<span class="text-red-500">*</span></label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="enter your username">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-bold mb-2" for="password">PASSWORD<span class="text-red-500">*</span></label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="password">
                <div class="text-right mt-2">
                </div>
            </div>
            <div class="flex items-center justify-between mb-4">
                <label class="block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox">
                    <span class="text-sm">Remember me!</span>
                </label>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-black text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    SIGN IN
                </button>
            </div>
        </form>
    </div>
</body>
</html>