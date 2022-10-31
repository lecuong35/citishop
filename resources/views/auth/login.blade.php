<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex justify-center border-b m-auto">
        <img class="w-48 py-4" src="https://mweb-cdn.karousell.com/build/carousell-logo-title-2Nnf7YFiNk.svg" alt="">
    </div>
    <section class="min-h-screen flex items-center justify-center m-auto">
    
        <div class="lg:w-[472px] md:w-[472px] sm:w-[472px] xs:w-[472px]">
            <h1 class="font-bold text-4xl text-center">Login</h1>
            <div>
                <button class="w-full px-6 py-2 mt-12 rounded-md bg-[#4567b2]">
                    <span class="font-semibold text-white text-lg"><i class="fa-brands fa-square-facebook"></i> Login with Facebook</span>
                </button>
            </div>
            <p class="text-center text-lg mt-4 text-[#008f79]">OR</p>
            <form action="" class="space-y-6 py-6">
                <div>
                <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Username or email"/>
                </div>
                <div>
                    <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Password"/>                        
                    <div class="mt-1">
                        <button type="reset">
                            <span class="text-[#57585a] text-lg hover:text-[#008f79] hover:underline" >Forgot password ?</span>
                        </button>
                    </div>
                </div>
            
        
                <div class="text-center">
                    <button class="w-full px-6 py-3 rounded-md bg-[#c5c5c6] transition hover:bg-sky-600 focus:bg-[#008f79]">
                        <span class="font-semibold text-white text-lg">Login</span>
                    </button>
                    <div class="mt-5">
                        <span class="text-lg">Don't have an account?<a class="text-[#57585a] font-semibold" href="#"> sign up</a></span>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
  