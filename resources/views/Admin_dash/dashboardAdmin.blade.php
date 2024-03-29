
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />

    <title>DashboardAdmin</title>
  </head>
  <body>

    <x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-dark">

            {{ __('Gestion_Bibliothique') }}
        </h2>
    </x-slot>

    <div class="text-center">
   <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
   Show navigation
   </button>
   </div>


   <!-- drawer component -->
   <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
       <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
       <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
           <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
           <span class="sr-only">Close menu</span>
       </button>
     <div class="py-4 overflow-y-auto">
         <ul class="space-y-2 font-medium">
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                     <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                     <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                  </svg>
                  <span class="ms-3">Dashboard</span>
               </a>
            </li>

            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                     <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
               </a>
            </li>
            <li>
               <a href="{{ route('books') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                     <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">books</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                     <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">reservations</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                     <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                     <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                     <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
               </a>
            </li>
         </ul>
      </div>
   </div>

   <div class="container mx-auto p-4">
       <div class="flex flex-wrap justify-between items-center">
           <div class="lg:w-5/12 md:w-6/12 sm:w-full mb-4">
               <h1 class="text-3xl font-bold">Good Morning, M.{{ Auth::user()->name }}!</h1>
               <p>Here's what's happening with your store today.</p>
           </div>
           <div class="lg:offset-3 lg:w-3/12 md:w-6/12 sm:w-full flex space-x-4 btns">
               <button class="bg-blue-500 text-white px-4 py-2 rounded-full">
                   <i class="fas fa-plus-circle"></i> + <a href="{{ route('books.create')}}">Add Book</a>
               </button>
           </div>
       </div>
   </div>

   <div class="container mx-auto p-4">
       <div class="flex flex-wrap justify-center">
           <div class="lg:w-6/12 md:w-6/12 sm:w-12 mt-5 bg-gray-200 rounded-lg overflow-hidden shadow-md card mx-2">

               <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                   <span class="block text-lg font-bold py-2">TOTAL EARNINGS</span>
                   <small class="text-green-500">+16.24%</small>
                   <p class="text-2xl font-bold">$5.2k</p>
                   <span class="text-blue-500 cursor-pointer block pt-2">View More</span>
                   <i class="fas fa-dollar-sign text-4xl text-blue-500"></i>
               </a>

           </div>
           <div class="lg:w-6/12 md:w-6/12 sm:w-12 mt-5 bg-gray-200 rounded-lg overflow-hidden shadow-md card mx-2">

               <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                   <span class="block text-lg font-bold py-2">TOTAL EARNINGS</span>
                   <small class="text-green-500">+16.24%</small>
                   <p class="text-2xl font-bold">$5.2k</p>
                   <span class="text-blue-500 cursor-pointer block pt-2">View More</span>
                   <i class="fas fa-dollar-sign text-4xl text-blue-500"></i>
               </a>
           </div>
           <div class="lg:w-6/12 md:w-6/12 sm:w-12 mt-5 bg-gray-200 rounded-lg overflow-hidden shadow-md card mx-2">

               <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                   <span class="block text-lg font-bold py-2">TOTAL EARNINGS</span>
                   <small class="text-green-500">+16.24%</small>
                   <p class="text-2xl font-bold">$5.2k</p>
                   <span class="text-blue-500 cursor-pointer block pt-2">View More</span>
                   <i class="fas fa-dollar-sign text-4xl text-blue-500"></i>
               </a>
           </div>
           <div class="lg:w-6/12 md:w-6/12 sm:w-12 mt-5 bg-gray-200 rounded-lg overflow-hidden shadow-md card mx-2">

               <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                   <span class="block text-lg font-bold py-2">TOTAL EARNINGS</span>
                   <small class="text-green-500">+16.24%</small>
                   <p class="text-2xl font-bold">$5.2k</p>
                   <span class="text-blue-500 cursor-pointer block pt-2">View More</span>
                   <i class="fas fa-dollar-sign text-4xl text-blue-500"></i>
               </a>
           </div><div class="lg:w-6/12 md:w-6/12 sm:w-12 mt-5 bg-gray-200 rounded-lg overflow-hidden shadow-md card mx-2">

               <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                   <span class="block text-lg font-bold py-2">TOTAL EARNINGS</span>
                   <small class="text-green-500">+16.24%</small>
                   <p class="text-2xl font-bold">$5.2k</p>
                   <span class="text-blue-500 cursor-pointer block pt-2">View More</span>
                   <i class="fas fa-dollar-sign text-4xl text-blue-500"></i>
               </a>
           </div>
       </div>
   </div>

   {{--  ==================================== book ==============  --}}

   <div class="overflow-x-auto flex flex-wrap justify-center pt-8 pb-8" >
           <h1 class="text-3xl font-bold">Book Listing</h1>
          <table class="w-80 table-auto border border-gray-300 bg-gray-200 rounded-lg overflow-hidden shadow-md card mx-2">
               <thead class="bg-gray-100">
                   <tr>
                       <th class="px-6 py-3 border-b">Book ID</th>
                       <th class="px-6 py-3 border-b">Title</th>
                       <th class="px-6 py-3 border-b">Author</th>
                       <th class="px-6 py-3 border-b">Genre</th>
                       <th class="px-6 py-3 border-b">Description</th>
                       <th class="px-6 py-3 border-b">Publication Year</th>
                       <th class="px-6 py-3 border-b">Total Copies</th>
                       <th class="px-6 py-3 border-b">Available Copies</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($books as $book)
                   <tr class="hover:bg-gray-50">
                       <td class="px-6 py-3 border-b">{{ $book->id }}</td>
                       <td class="px-6 py-3 border-b">{{ $book->title }}</td>
                       <td class="px-6 py-3 border-b">{{ $book->author }}</td>
                       <td class="px-6 py-3 border-b">{{ $book->genre }}</td>
                       <td class="px-6 py-3 border-b">{{ $book->description }}</td>
                       <td class="px-6 py-3 border-b">{{ $book->publication_year }}</td>
                       <td class="px-6 py-3 border-b">{{ $book->total_copies }}</td>
                       <td class="px-6 py-3 border-b">{{ $book->available_copies }}</td>

                   </tr>
                   @endforeach
               </tbody>
           </table>
   </div>

   {{--  ==================================== end ==============  --}}

   {{--  ==================================== reservation ==============  --}}

   {{--  <div class="container mx-auto p-8 bg-white rounded-lg shadow-md">
       <h2 class="text-2xl font-semibold mb-4">Book Management</h2>
       <a href="{{route('reservations.create')}}"> <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-white focus:outline-none bg-blue-600 rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Add_Resveravtion</button></a>
       <div class="overflow-x-auto">
           <form action="" method="get" class="w-full">
               <table class="w-full table-auto border border-gray-300">
                   <thead class="bg-gray-100">
                       <tr>
                           <th class="px-6 py-3 border-b">Resvtion_id</th>
                           <th class="px-6 py-3 border-b">description</th>
                           <th class="px-6 py-3 border-b">reservation_date</th>
                           <th class="px-6 py-3 border-b">return_date</th>
                           <th class="px-6 py-3 border-b">Action</th>

                       </tr>
                   </thead>
                   <tbody>
               @foreach ($reservations as $reservation)
                       <tr class="hover:bg-gray-50">
                           <td class="px-6 py-3 border-b">{{ $reservation->id }}</td>
                           <td class="px-6 py-3 border-b">{{ $reservation->description }}</td>
                           <td class="px-6 py-3 border-b">{{ $reservation->reservation_date }}</td>
                           <td class="px-6 py-3 border-b">{{ $reservation->return_date }}</td>
                           <td>
                            <button type="submit" class="text-blue-500 hover:underline"><a href="{{ route('reservations.edit', ['reservation' =>$resrevation->id])}}">Update</a></button>
                            <button type="submit" class="text-blue-500 hover:underline"><a href="{{ route('reservations.destroy', ['reservation' =>$resrevation->id])}}">Delete</a></button>
                           </td>
                       </tr>
               @endforeach
                   </tbody>
               </table>
           </form>
       </div>
   </div>  --}}

   {{--  ==================================== end ==============  --}}

</x-app-layout>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  </body>
  </html>


