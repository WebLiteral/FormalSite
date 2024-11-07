<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home.</title>
    @vite('resources/css/app.css')
</head>



<body>


    <div class="border-black border-4 m-2 h-48">
        <h1 class="font-bold text-lg font-title">LiteralHat.com</h1>
    </div>

    <!-- I know it's awful but bare with me I can't come up with a better solution at the moment :s -->
    <div class="bg-black h-9">
        <ul class="text-white flex justify-evenly font-boldtitle pt-1 text-xl">
        <span></span>
            <span></span>
            <li>Cat Sounds!</li>
            <span>|</span>
            <li>Liberty!</li>
            <span>|</span>
            <li>Fuck Cars!</li>
            <span>|</span>
            <li>Random Song!</li>
            <span>|</span>
            <li>Placeholder</li>
            <span>|</span>
            <li>Placeholder</li>
            <span>|</span>
            <li>Placeholder</li>
            <span></span>
            <span></span>
        </ul>
    </div>



    <div class="bg-green-600 h-screen flex justify-center">
        <div class="bg-checkered flex-grow"></div>
        <div class="bg-black w-56 p-2 pt-0">
            <div class="border-white border-4 text-white p-3 pt-1">
                <ul class="uppercase font-mainmenu text-4xl tracking-wider leading-relaxed">
                    <li>Home</li>
                    <li>Gallery</li>
                    <li>Articles</li>
                    <li>Community</li>
                    <li>Store</li>
                    <li>About</li>
                </ul>
            </div>



        </div>
        <div class="bg-white w-1/2 flex flex-grow flex-col">
            <div class="m-1 p-1 border-4 border-black flex-grow">
                <div class="bg-black p-3">
                    <h1 class="text-white uppercase">Welcome Home.</h1>
                </div>
                <p>Hi, welcome to LiteralHat.com.</p>
                <p>If you encounter any issues, please create a new ticket on the site's Github.</p>

            </div>
        </div>

        <div class="bg-black w-72 p-2 pt-0">



        </div>
        <div class="bg-stripe flex-grow"></div>
    </div>

    <div class="bg-black h-64"></div>

</body>

</html>