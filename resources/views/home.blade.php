<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home.</title>
    @vite('resources/css/app.css')
</head>



<body>

    <div class="bg-black border-b-2 flex justify-center">

        <div class="w-4/5 p-2 pt-3 text-white justify-between flex ">

            <h1 class="font-bold text-3xl font-datatrash tracking-wide "><a href='/home'>LiteralHat.com</a></h1>

            <nav>

                <ul class="flex gap-20 uppercase font-mainmenu text-4xl">

                    <li><a href="index.html">Home</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="discography.html">Discography</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="community.html">Community</a></li>


                </ul>
            </nav>




        </div>
    </div>


    <!-- I know it's awful but bare with me I can't come up with a better solution at the moment :s -->
    <div class="bg-black flex justify-center">
        <ul class="text-white flex justify-between font-cambria text-sm w-4/5">

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
            <li><a href='' target='_blank'>InfluencerJunk!</a></li>
            <span>|</span>
            <li><a href='' target='_blank'>Free Stuff!</a></li>
            <span>|</span>
            <li><a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' target='_blank'>Sauerkraut Recipe!</a></li>
            <span>|</span>
            <li>Idk yet</li>
            <span>|</span>
            <li>Marla!</li>

        </ul>
    </div>



    <div class="h-screen bg-black flex justify-center">
        <div class="w-4/5  pt-6 p-6 text-white font-cambria">

            <div class='flex flex-col items-center text-center font-cambria'>

                <h1 class="font-oldenglish text-7xl border-t-2 w-max border-b-2 pb-3 pt-1 px-4 m-10">Page Title</h1>

                <div class="w-3/5 space-y-2">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate dolorem at sapiente
                        accusantium veritatis voluptate unde nam incidunt sit recusandae quis animi placeat, non nulla
                        veniam eveniet laboriosam magni? Vel?</p>
                    <p>onsequuntur, perferendises error doloremque. Animi.</p>

                </div>

            </div>

        </div>
    </div>





    <div class="bg-black h-64 border-t-2 border-white">
        <div class="bg-black h-9 text-white flex flex-col items-center">
            <ul class=" flex gap-4 text-sm font-cambria">
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
            <p class="font-bold text-4xl p-3 font-datatrash tracking-wide "><a href='/home'>LiteralHat.com</a></p>
            <p class="text-xs font-cambria">©2020 - 2024. All rights reserved.</p>


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