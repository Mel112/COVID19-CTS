<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<div class="container">
    <div class="row py-5 mt-4 align-items-center">
    <!-- Left Design -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="../../images/auth.png" alt="">
          <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
          Stay healthy.
            <br class="xl:hidden">
            <span class="text-blue-600"><br>Stay safe.</span>
          </h2>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            Join and protect your people against COVID-19. Use our system today.
          </p>
        </div>

        <!-- Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                <div>
                    {{ $logo }}
                </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden ssm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        </div>
    </div>
</div>

