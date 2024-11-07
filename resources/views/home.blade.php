<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home.</title>
    @vite('resources/css/app.css')
</head>



<body>

    <div class="flex bg-black justify-evenly border-b-4">
        
<div class="w-1"></div>
    <div class="p-4">

        <h1 class="font-bold text-white text-5xl font-title tracking-wide "><a href='/home'>LiteralHat.com</a></h1>

    </div>
    <div class="w-24"></div>
    <div class="w-3/6"></div>
    <div class="w-1"></div>
    </div>


    <!-- I know it's awful but bare with me I can't come up with a better solution at the moment :s -->
    <div class="bg-black h-10">
        <ul class="text-white flex justify-evenly font-boldtitle pt-1 text-xl">
            <span></span>
            <span></span>
            <li>Cat Sounds!</li>
            <span>|</span>
            <li><a href='https://crimethinc.com/tce' target='_blank'>Liberty!</a></li>
            <span>|</span>
            <li><a href='https://www.reddit.com/r/fuckcars/' target='_blank'>Fuck Cars!</a></li>
            <span>|</span>
            <li><a id='randomsong' href="">Random Song!</a></li>
            <span>|</span>
            <li><a href='https://diyconspiracy.net/' target='_blank'>DIY Conspiracy!</a></li>
            <span>|</span>
            <li><a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' target='_blank'>Sauerkraut Recipe!</a></li>
            <span>|</span>
            <li>Idk yet</li>
            <span></span>
            <span></span>
        </ul>
    </div>



    <div class="bg-green-600 h-screen flex justify-center">
        <div class="bg-checkered flex-grow"></div>
        <div class="bg-black w-56 p-2 pt-0">
            <div class="border-white border-4 text-white pt-1 p-3 mb-3">
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
            <div class="m-1.5 p-2 border-4 border-black flex-grow">
                <div class="bg-black p-3">
                    <h1 class="text-white uppercase font-title text-4xl border-b-4 p-2">Welcome Home.</h1>
                </div>



                <div class="p-4 font-sans">
                    <p class="font-bold">Hi, welcome to LiteralHat.com.</p>
                    <p>If you encounter any issues, please create a new ticket on the site's Github.</p>
                </div>

            </div>

            <div class="bg-black h-8 flex justify-end">
                <p class="text-white pt-1 underline"><a href=''>Back to top</a></p>
            </div>

        </div>

        <div class="bg-black w-72 p-2 pt-0">
        <div class="border-white border-4 text-white p-3  mb-3">
        <p class="font-extratitle text-5xl">not sure what to put here yet</p>

        </div>



        </div>
        <div class="bg-stripe flex-grow"></div>
    </div>

    <div class="bg-black h-64 border-t-4 border-white">
        <div class="bg-black h-9 text-white flex flex-col items-center">
            <ul class=" flex gap-4 font-bold underline p-5 text-xl">
                <li><a href='/about'>About</a></li>
                <span>|</span>
                <li><a href='/about/faq'>FAQ</a></li>
                <span>|</span>
                <li><a href='/terms-and-conditions'>Terms and Conditions</a></li>
                <span>|</span>
                <li><a href="/privacy-policy">Privacy Policy</a></li>
                <span>|</span>
                <li><a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' target='_blank'>Easter Egg</a></li>
                <span>|</span>
                <li><a href='/changelog'>Changelog</a></li>
                <span>|</span>
                <li><a href='/sitemap'></a>Sitemap</li>
            </ul>
            <p class="font-bold text-5xl font-title tracking-wide p-2"><a href='/home'>LiteralHat.com</a></p>
            <p class="p-2">©2020 - 2024. All rights reserved.</p>


        </div>




    </div>

</body>

<script>

    const randomsong = document.getElementById('randomsong');

    const randomSongArray = {
        'Bombtrack': 'https://www.youtube.com/watch?v=MUaL1FnotRQ',
        'Worry': 'https://www.youtube.com/watch?v=Ub5oVqDX8dY',
        'Frijolero': 'https://www.youtube.com/watch?v=C468ckG8cfc',
        'Violent Pornography': 'https://www.youtube.com/watch?v=WWXcpWliHSY',
        'Leave It Alone': 'https://www.youtube.com/watch?v=cuR12uCt61Q',
        'Gimme Tha Power': 'https://www.youtube.com/watch?v=rPDKPW3zTR0',
        'Dance And Dense Denso': 'https://www.youtube.com/watch?v=PLQP7iu76F0',
        'Epiphany': 'https://www.youtube.com/watch?v=bB1Ld1i9amY',
        'Seeing Double At The Triple Rock': 'https://open.spotify.com/intl-es/track/5QegaMGMY7mORFEBngkFxy?si=168a256f918f47f0',
        'Nikes': 'https://www.youtube.com/watch?v=rhJLfdCWrMI',
        'Head': 'https://www.youtube.com/watch?v=sYsdvQSpabs',
        'Do What You Want': 'https://www.youtube.com/watch?v=s5F-xHX1PDE',
        'La Granja': 'https://www.youtube.com/watch?v=eTewgdFscyk',
        'Sexo Y Religion': 'https://www.youtube.com/watch?v=M8_EU-t0PZk',
        'Sondaschule': 'https://www.youtube.com/watch?v=Tmo4bN89gVs',
        'Arranzacorazones': 'https://www.youtube.com/watch?v=1zNfElP3Br8',
        'Raum Der Zeit': 'https://www.youtube.com/watch?v=6A-flxZH3v8',
        'Ganz Klar Gegen Nazis': 'https://www.youtube.com/watch?v=GgZj23G9wrI',
        'La Vida Del Oso': 'https://www.youtube.com/watch?v=HP9VPmqPBnM',
        'Time Bomb': 'https://www.youtube.com/watch?v=GvIBOlyAViU',
        'Ruby Soho': 'https://www.youtube.com/watch?v=GeFr4_CADp4',
        'Middelalder': 'https://www.youtube.com/watch?v=9IjFXHLlWj0',
        'Point / Counterpoint': 'https://www.youtube.com/watch?v=YGNNTxWkjl8',
        'Manchmal': 'https://www.youtube.com/watch?v=H5jHZ0qZHg4',
        'All Outta Angst': 'https://www.youtube.com/watch?v=O5vAjonRItk'
    };

    const funniSongs = [
        'Frijolero',
        'Gimme Tha Power',
        'Dance And Dense Denso',
        'La Granja',
        'Sexo Y Religion',
        'La Vida Del Oso'
    ];


    const keysArray = Object.keys(randomSongArray);
    const randomIndex = Math.floor(Math.random() * keysArray.length);
    const randomKey = keysArray[randomIndex];
    const randomValue = randomSongArray[randomKey];

    const displayKey = funniSongs.includes(randomKey) ? '¡' + randomKey : randomKey;

    randomsong.innerHTML = displayKey + '!';
    randomsong.href = randomValue;

</script>






</html>