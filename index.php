<?php include_once 'template/header.php' ?>

<section id="about" class="w-full pl-14 py-10 lg:py-0">
   <div class="container mx-auto container-lg px-10 lg:px-10">
      <div class="grid sm:grid-flow-row lg:grid-cols-2 place-items-center h-full lg:h-screen">
         <div class="text-black font-inter w-full grid grid-cols-1 gap-y-5 order-2 lg:order-1">
            <h1 class="text-5xl lg:text-6xl font-bold max-w-lg">
               Hello, I'm Rangga Dwi Saputra
            </h1>
            <p class="text-lg lg:text-xl font-normal">
               I am a <b>Python Dev</b> and <b>Mobile Dev</b> with a keen interest in application development.
               I am excited to leverage my skills and experience to develop innovative applications.
            </p>
            <div class="flex gap-x-4 text-lg lg:text-xl"><a href="#works"><button class="btn bg-black text-white">My
                     works</button></a> <a href="https://www.linkedin.com/in/rangga-saputra-46a861231/" target="_blank"
                  class="btn border-black border">More about me</a></div>
            <hr class="border-black">
            <div class="w-full h-11 border-black border rounded-md relative overflow-hidden">
               <div class="skills h-full w-max flex flex-wrap gap-x-2 items-center" id="skills">
                  <span class="skillbar bg-black text-white">Learning About</span>
                  <span class="skillbar bg-yellow-300"><i class="fa-brands fa-python"></i> Python</span>
                  <span class="skillbar bg-green-300"><i class="fab fa-cplusplus"></i> C++</span>
                  <span class="skillbar bg-blue-300"><i class="fab fa-flutter"></i> Flutter</span>
                  <span class="skillbar bg-yellow-100"><i class="fab fa-kotlin"></i> Kotlin</span>
                  <span class="skillbar bg-red-300"><i class="fab fa-php"></i> PHP</span>
                  <span class="skillbar bg-yellow-200"><i class="fa-solid fa-terminal"></i> Bash</span>
               </div>
            </div>
         </div>
         <div class="w-full h-full lg:pl-40 flex justify-center items-center order-1 lg:order-2 pb-5 lg:pb-0">
            <div class="h-80 lg:h-3/4 rounded-lg"
               style="background: url(&quot;assets/me.jpg&quot;) center center / cover; width: 100%;"></div>
         </div>
      </div>
   </div>
</section>

<section id="works" class="bg-black w-full min-h-screen pl-14 py-20 text-white font-inter">
   <div class="container mx-auto container-lg px-10 lg:px-10">
      <h1 class="font-bold text-5xl lg:text-6xl">Recent Work</h1>
      <div class="grid lg:grid-cols-2 py-10 gap-10 font-inter">
         <div class="grid group sm:grid-flow-row lg:grid-cols-2">
            <div class="pt-2 lg:pt-0 lg:pr-5 order-2 lg:order-1">
               <h2 class="pr-1 text-white tracking-wider text-2xl text-stroke font-bold inline-block"
                  style="background:linear-gradient(to bottom,#ffffff00 0,#ffffff00 55%,#a52ee5 56%,#a52ee5 100%);">
                  BGDF Anime
               </h2>
               <p class="py-4 text-gray-200 group-hover:text-white transition-all">
                  A Web app that is for streaming Anime
               </p>

            </div>
            <div class="border h-56 min-h-2 border-white rounded-md bg-cover bg-center order-1 lg:order-2"
               style="background-image:url(assets/animeweb.png);background-size: contain;"></div>
         </div>

         <div class="grid group sm:grid-flow-row lg:grid-cols-2">
            <div class="pt-2 lg:pt-0 lg:pr-5 order-2 lg:order-1">
               <h2 class="pr-1 text-white tracking-wider text-2xl text-stroke font-bold inline-block"
                  style="background:linear-gradient(to bottom,#ffffff00 0,#ffffff00 55%,#0069b2 56%,#0069b2 100%);">
                  Dinasty Coin
               </h2>
               <p class="py-4 text-gray-200 group-hover:text-white transition-all">
                  Profile of Coin Crypto name Dinasty Coin
               </p>
            </div>
            <div class="border h-56 min-h-2 border-white rounded-md bg-cover bg-center order-1 lg:order-2"
               style="background-image:url(assets/dinastycoin.png);background-size: contain;"></div>
         </div>
         <div class="grid group sm:grid-flow-row lg:grid-cols-2">
            <div class="pt-2 lg:pt-0 lg:pr-5 order-2 lg:order-1">
               <h2 class="pr-1 text-white tracking-wider text-2xl text-stroke font-bold inline-block"
                  style="background:linear-gradient(to bottom,#ffffff00 0,#ffffff00 55%,#4D8ACD 56%,#4D8ACD 100%);">
                  TWG Bot
               </h2>
               <p class="py-4 text-gray-200 group-hover:text-white transition-all">
                  Automation bot trading For Binomo
               </p>

            </div>
            <div class="border h-56 min-h-2 border-white rounded-md bg-cover bg-center order-1 lg:order-2"
               style="background-image:url(assets/twg.png);background-size: contain;"></div>
         </div>
         <div class="grid group sm:grid-flow-row lg:grid-cols-2">
            <div class="pt-2 lg:pt-0 lg:pr-5 order-2 lg:order-1">
               <h2 class="pr-1 text-white tracking-wider text-2xl text-stroke font-bold inline-block"
                  style="background:linear-gradient(to bottom,#ffffff00 0,#ffffff00 55%,#FFB013 56%,#FFB013 100%);">
                  AnimeVerz
               </h2>
               <p class="py-4 text-gray-200 group-hover:text-white transition-all">
                  A Mobile app that is for streaming Anime
               </p>
               <a href="https://github.com/ranggaggngntt/anime-streaming" target="_blank"
                  class="btn border border-white inline-block">View Project</a>
            </div>
            <div class="border h-56 min-h-2 border-white rounded-md bg-cover bg-center order-1 lg:order-2"
               style="background-image:url(assets/animeapp.png);background-size: contain;"></div>
         </div>
         <div class="grid group sm:grid-flow-row lg:grid-cols-2">
            <div class="pt-2 lg:pt-0 lg:pr-5 order-2 lg:order-1">
               <h2 class="pr-1 text-white tracking-wider text-2xl text-stroke font-bold inline-block"
                  style="background:linear-gradient(to bottom,#ffffff00 0,#ffffff00 55%,#473BD6 56%,#473BD6 100%);">
                  Compress-Convert
               </h2>
               <p class="py-4 text-gray-200 group-hover:text-white transition-all">
                  Tools that provide to compress video/image or convert some document
               </p>
               <a href="https://github.com/ranggaggngntt/Compress-Convert" target="_blank"
                  class="btn border border-white inline-block">View Project</a>
            </div>
            <div class="border h-56 min-h-2 border-white rounded-md bg-cover bg-center order-1 lg:order-2"
               style="background-image:url(assets/compress.png);background-size: contain;"></div>
         </div>
         <div class="grid group sm:grid-flow-row lg:grid-cols-2">
            <div class="pt-2 lg:pt-0 lg:pr-5 order-2 lg:order-1">
               <h2 class="pr-1 text-white tracking-wider text-2xl text-stroke font-bold inline-block"
                  style="background:linear-gradient(to bottom,#ffffff00 0,#ffffff00 55%,#ffffff 56%,#ffffff 100%);">
                  Covid App
               </h2>
               <p class="py-4 text-gray-200 group-hover:text-white transition-all">
                  Mobile App that for monitoring Covid
               </p>
               <a href="https://github.com/ranggaggngntt/Covid-19" target="_blank"
                  class="btn border border-white inline-block">View Project</a>
            </div>
            <div class="border h-56 min-h-2 border-white rounded-md bg-cover bg-center order-1 lg:order-2"
               style="background-image:url(assets/covid.png);background-size: contain;"></div>
         </div>
      </div>
   </div>
</section>

<section id="video" class="bg-yellow-300 w-full  pl-14 py-12 text-black font-inter">
   <div class="container mx-auto container-lg px-10 lg:px-10 text-center">
      <h1 class="font-bold text-5xl lg:text-6xl">Showcase Compress Convert</h1>
      <iframe src="https://www.youtube.com/embed/gIGevnwabik?si=01YeBp8cwuvl8qQM" title="YouTube video player"
         frameborder="0"
         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
         class="w-full h-2/3 mt-10 rounded-lg" allowfullscreen></iframe>
   </div>
</section>

<section id="blog" class="bg-white w-full pl-14 py-20 text-black">

   <div class="container mx-auto container-lg px-10 lg:px-10">
      <h1 class="font-bold text-5xl lg:text-6xl mb-10">Article</h1>
      <div class="grid sm:grid-row-2 md:grid-row-2 lg:grid-cols-2 gap-10">
         <div>
            <img class="w-full rounded-lg" src="https://stimata.ac.id/media/2022/11/d-1024x624.png"
               alt="Kampus Stimata">
         </div>
         <div class="text-start flex flex-col gap-3">
            <h1 class="text-5xl font-bold">Pengalaman Berkuliah di STIMATA</h1>
            <p class="leading-relaxed line-clamp-6">Halo semuanya,<br>
        Perkenalkan nama saya Rangga Dwi Saputra, dan hari ini saya ingin berbagi sedikit cerita tentang perjalanan menakjubkan saya selama berkuliah di Kampus <a href="https://stimata.ac.id" class="font-bold text-blue-700">STIMATA</a>, khususnya di Program Studi S1-Teknologi Informasi.<br><br>

   Ketika pertama kali menginjakkan kaki di <a href="https://stimata.ac.id" class="font-bold text-blue-700">STIMATA</a>, saya langsung merasakan energi positif dan semangat untuk memahami dunia Teknologi Informasi. Program studi ini memberikan pilihan unggulan seperti S1 Sistem Informasi dan D3 Sistem Informasi, memberi kami peluang untuk mendalami bidang yang sesuai dengan minat dan bakat masing-masing.<br><br>

   Dalam kurikulumnya, kami tidak hanya diajarkan teori, tetapi juga diberikan pengalaman praktis yang mendalam. Proyek-proyek pengembangan perangkat lunak menjadi tantangan yang memacu kami untuk terus meningkatkan keterampilan teknis dan kolaborasi tim. Laboratorium komputer bukan hanya tempat belajar, tetapi juga tempat eksperimen kreatif, di mana kami dapat menerapkan konsep-konsep yang dipelajari dalam situasi nyata.<br><br>

   Namun, pengalaman kuliah di <a href="https://stimata.ac.id" class="font-bold text-blue-700">STIMATA</a> tidak hanya tentang akademis. Dosen-dosen berpengalaman kami tidak hanya menjadi instruktur tetapi juga mentor yang peduli, membimbing kami untuk mengembangkan potensi maksimal. Terlibat dalam berbagai kegiatan ekstrakurikuler dan organisasi mahasiswa membuat perjalanan ini semakin berwarna. Kami tidak hanya belajar tentang teknologi, tetapi juga tentang kepemimpinan, kolaborasi, dan tanggung jawab sosial.<br><br>

   Sekarang, menjelang akhir perjalanan ini, saya merasa siap untuk melangkah ke dunia nyata. <a href="https://stimata.ac.id" class="font-bold text-blue-700">STIMATA</a> bukan hanya sekadar kampus, tetapi rumah bagi pengembangan diri dan pertumbuhan pribadi. Untuk informasi lebih lanjut tentang pengalaman kuliah ini, jangan ragu kunjungi link Kampus <a href="https://stimata.ac.id" class="font-bold text-blue-700">STIMATA</a>.</p>
            </p>
            <a href="detail.php" class="font-bold text-blue-700">Read more</a>
         </div>
      </div>
   </div>
</section>

<?php include('template/task.php'); ?>

<?php include('template/footer.php'); ?>

