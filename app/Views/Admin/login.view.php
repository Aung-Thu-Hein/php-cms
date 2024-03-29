<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="text-center text-3xl font-extrabold text-green-600">Login</h2>
            <p class="mt-2 text-center text-sm text-gray-600 max-w">
            Or
            <a href="#" class="font-medium text-blue-500 hover:text-blue-500">
                create an account
            </a>
        </p>
        </div>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow">
                <form class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" placeholder="Enter your email address" class="relative appearance-none block border border-gray-300 px-3 py-1 placeholder-gray-500 focus:outline-none focus:border-green-500 w-full text-gray-900" />
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" placeholder="Enter your password" class="relative appearance-none block border border-gray-300 px-3 py-1 placeholder-gray-500 focus:outline-none focus:border-green-500 w-full text-gray-900" />
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="w-full py-2 px-4 border border-transparent text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>