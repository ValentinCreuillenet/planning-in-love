
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #161616;">
    <body>
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Planning in Love</h1>
                <p class="text-3xl my-4">Je preferai le Dome du Tonnerre.</p>
            </div>
            
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <h1 class="my-6">
                </h1>
                <div class="py-6 space-x-2">
                  
                </div>
                
                <form action="./" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto" method="post">
                    <div class="pb-2 pt-4">
                        <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" class="block w-full p-4 text-lg rounded-sm bg-black">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-4 text-lg rounded-sm bg-black" type="password" name="password" id="password" placeholder="Mot de passe">
                    </div>
                    <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                        <a href="#">Mot de passe oublié?</a>
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <input type="submit" value="Se connecter" class="uppercase block w-full p-4 text-lg rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none">
                    </div>

                    <?php if(isset($_GET['content'])): ?>
                    <?php if($_GET['content'] == "error"): ?>

                    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                        <p class="font-bold">Erreur</p>
                        <p>Mot de passe/Nom d'utilisateur incorrect</p>
                    </div>

                    <? endif ?>
                    <? endif ?>
                    
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</body>
</html>
