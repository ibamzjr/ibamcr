<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <div class="p-4 border-b">
                <h1 class="text-2xl font-bold">Admin Dashboard</h1>
            </div>
            <nav class="mt-4">
                <a href="#categories" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Manage Categories</a>
                <a href="#products" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Manage Products</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
