<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Bar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex h-screen bg-gray-100">

    <div class="md:flex flex-col w-64 bg-gray-200">
        <div class="flex items-center justify-center h-16 bg-gray-300">
            <span class="text-green-600 font-extrabold">PHP-CMS</span>
        </div>
        <div class="flex flex-col flex-1 overflow-y-auto bg-gray-200">
            <nav class="flex-1">
                <a href="#" class="flex items-center px-5 py-3 hover:bg-gray-400 border-b border-white font-medium">
                <img src="../asserts/img/icons/articles.svg" alt="article-icon" class="h-6 w-6 mr-2" />Articles
                </a>
                <a href="#" class="flex items-center px-5 py-3 hover:bg-gray-400 border-b border-white font-medium">
                    <img src="../asserts/img/icons/images.svg" alt="image-icon" class="h-6 w-6 mr-2" />Image Library
                </a>
                <a href="#" class="flex items-center px-5 py-3 hover:bg-gray-400 border-b border-white font-medium">
                    <img src="../asserts/img/icons/users.svg" alt="users-icon" class="h-6 w-6 mr-2" />Users
                </a>
            </nav>
        </div>
    </div>

</div>
</body>
</html>