<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <style>
        .navbar {
            background-color: white;
            border-bottom: 2px solid #6a0dad; /* border-purple-600 */
            padding: 16px; /* p-4 */
        }

        .container {
            max-width: 1200px; /* Set max width for container */
            margin: 0 auto; /* Center the container */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-items {
            display: flex;
            align-items: center;
        }

        .logo {
            font-weight: bold;
            color: black;
            margin-right: 50px; /* Space to the right of logo */
        }

        .nav-link {
            color: #28a745; /* text-green-500 */
            margin-right: 24px; /* Space to the right of links */
            margin-left: 40px;
            text-decoration: none; /* Remove underline */
        }

        .nav-link:hover {
            text-decoration: underline; /* Add underline on hover */
        }

        .search-input {
            border: 1px solid #d1d5db; /* border-gray-300 */
            border-radius: 8px; /* Rounded corners */
            padding: 8px; /* Padding inside input */
            margin-right: 16px; /* Space to the right of input */
            width: 100%; /* Full width */
            max-width: 200px; /* Set a max-width for input */
        }

        .add-button {
            background-color: white;
            border: 1px solid #28a745; /* border-green-500 */
            color: #28a745; /* text-green-500 */
            border-radius: 8px; /* Rounded corners */
            padding: 8px 16px; /* Padding inside button */
            cursor: pointer; /* Pointer cursor on hover */
        }

        .add-button:hover {
            background-color: #28a745; /* Background change on hover */
            color: white; /* Text change on hover */
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <!-- Links -->
            <div class="nav-items">
                <span class="logo">logo</span>
                <a href="#" class="nav-link">Beranda</a>
                <a href="{{ route('lkpd') }}" class="nav-link">LKPD</a>

                <!-- Search Bar -->
                <input type="text" placeholder="Cari" class="search-input">

                <!-- Button -->
                <button class="add-button">
                    + TAMBAH
                </button>
            </div>
        </div>
    </nav>
</body>
</html>
