<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<style>
    .containe{
        background: rgb(236, 235, 235);
        width: 100%;
        height: 80%;
    }
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            z-index: 1000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</style>
    <title>Home</title>
</head>
<body>

    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BookTo</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="{{ route('login') }}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button></a>
            <a href="{{ route('register') }}"> <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Regester</button></a>

            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>

      <div class="containe mx-auto pt-20">
        <div class="flex flex-row">
            <div class="lg:w-7/12 md:w-6/12 sm:w-full">
                <h1 class="mt-4 mb-4 text-3xl font-bold">Book Library</h1>

                <!-- Search Bar -->
                <div class="flex mb-3">
                    <input type="text" class="w-full px-4 py-2 border rounded-l-md" id="searchInput"
                        placeholder="Search by title, author, genre">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-r-md" onclick="searchBooks()">Search</button>
                </div>
            </div>
        </div>
    </div>
        <!-- Book Cards Container -->
        <div>
            <h1 class="mt-4 mb-4 text-3xl font-bold" >Last_New_Book</h1>
        </div>

            <div id="bookContainer" class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-8 mt-10">
                @foreach ($books as $book)
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <div class="p-4">
                            <h5 class="text-xl font-bold mb-2">{{ $book->title }}</h5>
                            <h6 class="text-gray-600 mb-2">Author: {{ $book->author }}</h6>
                            <p class="text-gray-700 mb-4">Description: {{ $book->description }}</p>

                            <p class="text-gray-700 mb-4">Some quick example text to build on the card title and make up the
                                bulk of the cards content.</p>
                            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-md" onclick="openPopup('{{ $book->title }}', '{{ $book->author }}', '{{ $book->description }}')">View Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    <div id="popup" class="modal">
        <span class="close-btn" onclick="closePopup()">X</span>
        <h2 id="popupTitle"></h2>
        <p id="popupAuthor"></p>
        <p id="popupDescription"></p>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="overlay" onclick="closePopup()"></div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white p-8 mt-10">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="col-span-2 md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <p>Email: contact@example.com</p>
                    <p>Phone: +1 123 456 7890</p>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-gray-500"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white hover:text-gray-500"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white hover:text-gray-500"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script>
        function openPopup(title, author, description) {
            document.getElementById("popupTitle").innerText = title;
            document.getElementById("popupAuthor").innerText = "Author: " + author;
            document.getElementById("popupDescription").innerText = "Description: " + description;
            document.getElementById("popup").style.display = "block";
            document.getElementById("overlay").style.display = "block";
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
            document.getElementById("overlay").style.display = "none";
        }
    </script>

</body>
</html>
