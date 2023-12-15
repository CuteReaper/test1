<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title>SRILUXE</title>
  <style>
      #myElement:hover p {
      display : block;
    }
    
  </style>
</head>

<body class="bg-white">

  <!-- header -->

  <section  class="lg:fixed bg-white w-screen mx-auto">

    <!-- header logo -->

    <div class="flex items-center justify-around mx-auto">
      <div class="pt-2 "><img  src="./src/images/logo.png"></div>

      <!-- menu -->

      <div class="hidden space-x-6 lg:flex">
        <a href="#" class="hover:text-gray-400 shrink-0">Pricing</a>
        <a href="#" class="hover:text-gray-400 shrink-0">Product</a>
        <a href="#" class="hover:text-gray-400 shrink-0">About Us</a>
        <a href="#" class="hover:text-gray-400 shrink-0">Careers</a>
        <a href="#" class="hover:text-gray-400 shrink-0">Community</a>
        <a href="#" class=" shrink-0 border-l-2 border-black"><select class="focus-visible:outline-none " name="lang">
            <option value="English">English</option>
            <option value="Sinhala">Sinhala</option>
            <option value="Tamil">Tamil</option>
          </select></a>
      </div>

      <!-- button -->

      <a href="#" class="baseline border-2 rounded-full border-black px-3 py-1 hover:bg-gray-400 hover:shadow-2xl shrink-0 hidden lg:flex">Contact Us</a>
    </div>
  </section>



  <!-- hero secton -->

  <section>
    <img class="p-2 lg:hidden rounded-3xl drop-shadow-3xl" src="./src//images/hero.jpg" alt="">
    <div class="flex items-center lg:h-[calc(100vh-52px)] mx-auto pt-5">
      <div class="grid grid-rows-4 grid-cols-10 gap-y-5">
        
        <!-- 1 -->
        <div class="col-start-4 col-span-6">
          <p class="lg:text-7xl text-2xl " style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">CRAFTING FUTURES</p>
        </div>
        <!-- 2 -->
        <div class="col-span-4 grid justify-items-end ">
          <p class="lg:text-7xl text-2xl" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">THROUGH</p>
        </div>
        <!-- 3 -->
        <div class="col-start-7 col-span-3 grid justify-items-end ">
          <p class="hidden lg:block lg:text-sm " style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">"Fueling success, from SEO precision to captivating web design. Our digital artistry ensures simplicity meets impact. Join us in crafting your unique online story."</p>
        </div>
        <!-- 4 -->
        <div class="col-start-5 col-span-6 ">
          <p class="lg:text-7xl text-2xl" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">DIGITAL</p>
        </div>
        <!-- 5 -->
        <div class="col-start-6 col-span-2 ">
          <p class="lg:text-7xl text-2xl" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">MASTERY</p>
        </div>
        <!-- 6 -->
        <div class="lg:col-start-4 lg:col-span-4 ">
          <p class="hidden lg:block text-sm " style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">"Digital Symphony: Web Aesthetics, SEO Harmony, Dev Mastery."</p>
        </div>

      </div>
      <!-- bar -->
      <span class=" h-72 w-2 lg:h-[43rem] lg:w-[2rem] bg-white z-50 rotate-45 absolute right-1/2 mix-blend-exclusion"></span>

      <!-- go down -->
      <img class="absolute h-16 bottom-0 right-3 animate-bounce justify-items-center" src="./src/images/arrow-down.svg.png" alt="">

      <!-- social -->
      <div class="flex flex-col absolute bottom-0 left-3">
        <a href="#"><img class="pb-1 w-7" src="./src/images/Link.png" alt=""><i class=" relative bottom-8 left-2  fa-brands fa-facebook-f" style="color: #000000;"></i></a>

        <a href="#"><img class="pb-1 w-7" src="./src/images/Link.png" alt=""><i class=" relative bottom-8 left-2  fa-brands fa-instagram" style="color: #000000;"></i></a>
        <a href="#"><img class="pb-1 w-7" src="./src/images/Link.png" alt=""><i class=" relative bottom-8 left-2  fa-brands fa-square-x-twitter" style="color: #000000;"></i></a>
      </div>
    </div>
  </section>

  <div class="flex flex-col">
  <section>
    <div class=" w-full mt-10 mb-20">
      <!-- content  -->
      <div class="">
                    <!-- background  -->
      <div class=" absolute w-full grid justify-center items-center -z-10 overflow-hidden">
      <div class=" relative rounded-t-full w-[500vh] h-[180vh] bg-black mx-auto "></div>
      </div>
      <!-- data -->
      <div class="container flex flex-col w-auto px-5 mx-auto lg:w-2/3 pt-20"><!--  -->
        <span class=" text-slate-300 text-sm" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">ABOUT SRILUXE</span>

        <p class=" text-slate-300 lg:text-2xl" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">"Sriluxe, where innovation meets distinction. We specialize in crafting captivating web designs, mastering SEO strategies, delivering seamless web development, and creating visually stunning graphics. Elevate your brand with our unique blend of expertise, creativity, and digital excellence. Your success, our passion."</p>

        <div class="container w-full mx-auto pt-10">
          <hr class="my-3 bg-white">
          <div id="myElement" class="">
            <div class="flex pb-4 text-white justify-between items-baseline">
            
              <span style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">OUR STORY</span>
              <span class="text-4xl">+</span>
            </div>
            <p class="hidden text-white " style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">
              "Embark on a transformative odyssey with Sriluxe, where creativity intertwines seamlessly with professional prowess. Our narrative unfolds in pixels and codes, a dynamic journey weaving captivating web designs, SEO symphonies, and graphic elegances. Rooted in innovation and executed with precision, every project is a testament to our commitment to digital excellence.

              In this creative professional saga, we bring brands to life, meticulously crafting distinctive online identities. From the strategic choreography of SEO to the symphony of web development, our expertise is the brush that paints your brand's unique masterpiece. Join us in this collaborative journey, where every line of code and stroke of design echoes the story of your success. Sriluxe: where creativity meets professionalism, and digital aspirations take flight."</p>
          </div>

          <!-- text  -->
          <hr class="my-3 bg-white">
          <div id="myElement" class="">
            <div class="flex pb-4 text-white justify-between items-baseline">
              <span style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">OUR MISSION</span>
              <span class="text-4xl">+</span>
            </div>
            <p class=" hidden text-white " style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">"At Sriluxe, our mission is to redefine digital landscapes, empowering businesses with innovative web design, SEO precision, development excellence, and captivating graphic aesthetics. We strive to seamlessly merge creativity with technology, crafting digital experiences that transcend expectations and drive sustained success for our clients."</p>
          </div>
          <hr class="my-3 bg-white">

        </div>

        <!-- learn more -->

        <div class=" flex justify-center justify-items-center lg:w-1/3 mx-auto py-6">
          <span class="flex justify-center items-center w-40 h-10 lg:w-36 lg:h-36 bg-slate-500 rounded-full hover:bg-gray-900 hover:text-gray-50">Learn more</span>
        </div>

        <!-- image -->
        <div style="background-image: url(./src/images/section-image-1.jpg); background-repeat: no-repeat, repeat; background-position: center; background-size:2/3" class="bg-contain flex flex-col justify-center items-center">
          <!-- <img class=" w-1/3 h-auto" src="./src/images//section-image-1.jpg" alt=""> -->
          
          <p class="w-full top-1/2 text-5xl md:text-6xl lg:text-8xl text-white text-center" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">ESTABLISHED IN 2019</p>
          <p class=" text-xl text-white text-center" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">WE BELIEVE THAT THINGS SHOULD BE USEFUL YET BEAUTIFUL.</p>

        </div>
        </div>
      </div>

  
  
  </div>
  </section>

  <!-- third section -->

  <section class="bg-white">
    <div class=" flex flex-col justify-center items-center container w-11/12 mx-auto "> py-0 sm:py-52 md:py-52 lg:py-6
      <div class="flex justify-between w-full">
        <span>SERVICES</span>
        <a href="#"><span>SEE ALL SERVICES <i class="fa-solid fa-arrow-right-long fa-lg" style="color: #000000;"></i></span></a>
      </div>

      <hr class=" w-full my-3 pt-1 bg-black ">
      <!-- motion text gri grid-rows-5 grid-col-12 text-8xl gap-2-->
      <div class=" m-auto grid grid-cols-12 grid-rows-5 text-3xl lg:text-8xl py-10 gap-y-4 " style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">
        <div class=" col-start-3 col-span-9 hover:animate-pulse">BRANDING</div>
        <div class=" col-start-2 col-span-10 lg:col-start-3 lg:col-span-9 hover:animate-pulse">UI/UX DESIGN</div>
        <div class=" col-start-1 col-span-11 hover:animate-pulse">PHOTOGRAPHY</div>
        <div class=" col-start-2 col-span-10 hover:animate-pulse">DEVELOPMENT</div>
        <div class=" col-start-1 col-span-11 hover:animate-pulse">MOTION DESIGN</div>
      </div>

      <hr class=" my-3 pt-1 bg-black w-2/3" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">
      
      <div class="flex flex-col lg:flex-row justify-between w-2/3 items-center">
        <span class="text-sm lg:w-1/3">WE USE THE POWER OF DESIGN TO SOLVE COMPLEX PROBLEMS AND CULTIVATE BUSINESS SOLUTIONS.</span>
        <a href="#" class="baseline border-2 rounded-full mt-10 lg:mt-0 border-black px-3 py-1 hover:bg-gray-400 hover:shadow-2xl shrink-0 lg:flex">GET A PROPOSAL</a>

      </div>
    </div>
  </section>
  </div>

  <!-- pportfolio -->
  <section class="bg-white">
    <div class="flex flex-col justify-center items-center container w-11/12 mx-auto py-6">
      <div class="flex justify-between w-full">
        <span>PORTFOLIO</span>
        <a href="#"><span>SEE ALL PROJECTS<i class="fa-solid fa-arrow-right-long fa-lg" style="color: #000000;"></i></span></a>
      </div>
      <hr class=" w-full my-3 pt-1 bg-black ">

      <div class=" m-auto grid grid-cols-12 grid-rows-2 text-3xl lg:text-8xl py-10" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">
        <div class=" col-start-1 col-span-11 hover:animate-pulse">SELECTED</div>
        <div class=" col-start-3 col-span-9 hover:animate-pulse">WORKS</div>
      </div>

      <!-- images -->

      <div class=" m-auto grid grid-cols-3 grid-rows-5 lg:text-2xl py-10 gap-y-9 lg:gap-y-20" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">
          <!-- 1 -->
        <div class="flex justify-center lg:justify-end items-baseline col-start-1 col-span-2"><img class="lg:w-2/3 rounded-3xl" src="./src/images/1 (1).jpg" alt="">
        </div>
        <div class=" flex flex-col justify-center lg:justify-end items-center col-start-3">
          <span>MEDIUM SCENE</span>
          <span class="text-sm">BRANDING, DESIGN</span>
        </div>

          <!-- 2 -->
        <div class="flex flex-col justify-center lg:justify-end lg:items-center col-start-1 ">
          <span>THE RISE OF DESIGN</span>
          <span class="text-sm">BRANDING, DESIGN</span>
        </div>
        <div class="flex justify-center lg:justify-start items-baseline col-start-2 col-span-2"><img class="lg:w-2/3 rounded-3xl" src="./src/images/2 (1).jpg" alt=""></div>

        <!-- 3 -->
        <div class="flex justify-center lg:justify-end items-baseline col-start-1 col-span-2"><img class="lg:w-2/3 rounded-3xl" src="./src/images/3 (1).jpg" alt=""></div>
        <div class="flex flex-col justify-center lg:justify-end lg:items-center col-start-3">
          <span>VISUAL STRANGER</span>
          <span class="text-sm">BRANDING, DESIGN, DEVELOPMENT</span>

        </div>

        <!-- 4 -->
        <div class="flex flex-col justify-center lg:justify-end lg:items-center col-start-1 ">
          <span>AMPLITUDE STUDIOS</span>
          <span class="text-sm">BRANDING, DESIGN</span>
        </div>
        <div class="flex justify-center lg:justify-start items-baseline col-start-2 col-span-2"><img class="lg:w-2/3 rounded-3xl" src="./src/images/4 (1).jpg" alt=""></div>



        <!-- 5 -->
        <div class="flex justify-center lg:justify-end items-baseline col-start-1 col-span-2"><img class="lg:w-2/3 rounded-3xl" src="./src/images/5 (1).jpg" alt=""></div>
        <div class="flex flex-col justify-center lg:justify-end lg:items-center col-start-3">
          <span>SUPER AWARDS</span>
          <span class="text-sm">DESIGN, DEVELOPMENT</span>

        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="flex flex-col justify-center items-center w-11/12 mx-auto py-6">
    <div class="flex justify-between w-full">
        <span>OUR BLOG</span>
        <a href="#"><span>SEE ALL NEWS<i class="fa-solid fa-arrow-right-long fa-lg" style="color: #000000;"></i></span></a>
      </div>
      <hr class=" w-full my-3 pt-1 bg-black ">

      <div class=" m-auto grid grid-cols-12 grid-rows-2 text-3xl lg:text-8xl py-10" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">
        <div class=" col-start-1 col-span-11 hover:animate-pulse">LATEST</div>
        <div class=" col-start-3 col-span-9 hover:animate-pulse">NEWS</div>

      </div>

      <div class="grid lg:grid-cols-12 lg:grid-rows-3 w-full mb-10 m-auto gap-y-8 lg:gap-y-0">
        <span class="flex flex-col items-center lg:col-start-1 lg:col-span-3 ">
          <img class="rounded-3xl" src="./src/images/1 (1).jpg" alt="">
          <p class="text-sm">Natura Insects Series</p>
          <p class="text-xs">DECEMBER 3, 2023</p>
        </span>

        <span class="flex flex-col items-center lg:col-start-10 lg:col-span-3">
          <img class="rounded-3xl" src="./src/images/2 (1).jpg" alt="">
          <p class="text-sm">Natura Insects Series</p>
          <p class="text-xs">DECEMBER 3, 2023</p>
        </span>

        <span class="flex flex-col items-center lg:col-start-5 lg:col-span-4">
          <img class="rounded-3xl" src="./src/images/3 (1).jpg" alt="">
          <p class="text-sm">Natura Insects Series</p>
          <p class="text-xs">DECEMBER 3, 2023</p>
        </span>
      </div>

      <div class="flex flex-col items-center lg:justify-start lg:w-2/3">
        <span class="text-sm">SUBSCRIBE OUR NEWSLETTER</span>

        <div class="flex flex-col items-center lg:flex-row lg:justify-start w-full py-10">
          <input class="lg:w-2/3 mb-5 lg:mb-0 focus-visible:outline-none border-b-2 text-2xl" type="text" placeholder="ENTER YOUR EMAIL">
          <a href="#" class="baseline border-2 rounded-full border-black px-3 py-1 mx-4 hover:bg-gray-400 hover:shadow-2xl shrink-0 lg:flex">GET A PROPOSAL</a>
        </div>
        <p> By sending the form you agree to the Terms & Conditions and Privacy Policy.
        </p>
      </div>
    </div>
  </section>

  <section>
  <div class="flex flex-col justify-center items-center w-11/12 mx-auto py-6">
    <div class="flex justify-between w-full">
        <span>REVIEWS</span>
        <a href="#">
          <span>EXPLORE REVIEWS<i class="fa-solid fa-arrow-right-long fa-lg" style="color: #000000;"></i>
          </span>
        </a>
      </div>
      <hr class=" w-full my-3 pt-1 bg-black ">

      <div class=" m-auto grid grid-cols-12 grid-rows-2 text-3xl lg:text-8xl py-10" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">
        <div class=" col-start-1 col-span-11 hover:animate-pulse">CLIENTS</div>
        <div class=" col-start-3 col-span-9 hover:animate-pulse">STORIES</div>
      </div>

      <div class=" flex flex-col lg:grid lg:grid-cols-12 lg:grid-rows-2 w-full m-auto " style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">
        <!-- raw one -->
        <div class="flex flex-row col-start-1 col-span-6">
          <img class="rounded-3xl" src="./src/images/testimonial-1.jpg" alt="">
        </div>
        <div class="flex flex-col items-center justify-center lg:col-start-8 col-span-5 py-10 lg:py-0">
          <p class="lg:text-xl">
            <i class="fa-solid fa-quote-left" style="color: #000000;"></i>
            This is template is so beautiful and has such wonderful new options. It is updated often which gives me even more quality. The support is the absolute best I've ever had the pleasure of interacting with. Quick, courteous, premium and extremely helpful!
            <i class="fa-solid fa-quote-right" style="color: #000000;"></i>
          </p>
        
          <div class="w-full flex flex-col justify-end" >
            <hr class="w-1/3 my-5 pt-1 bg-black ">
            <p class="text-xl">Adam Peterson</p>
            <p class="text-xs text-gray-700">Marketing Consultant</p>
          </div>
        </div>

          <!-- raw two -->

 
        <div class="flex flex-col items-center justify-center lg:col-start-1 lg:col-span-5 py-10 border-t-2 lg:py-0 lg:border-t-0">
        
          <p class="lg:text-xl">
            <i class="fa-solid fa-quote-left" style="color: #000000;"></i>
            Optimization and structure are verry good for SEO basics. A remarkable model, everything has been thought out with talent, the design, the various adaptations. Beautifull template, nice code and easy to customize.
            <i class="fa-solid fa-quote-right" style="color: #000000;"></i>
          </p>
        
          <div class="w-full flex flex-col justify-end" >
            <hr class="w-1/3 my-5 pt-1 bg-black ">
            <p class="text-xl">Jordan Harvey</p>
            <p class="text-xs text-gray-700">SEO/SMO Expert</p>

          </div>
        </div>

        <div class="flex flex-row col-start-1 col-span-6 lg:col-start-7 lg:col-span-6">
          <img class="rounded-3xl" src="./src/images/testimonial-2.jpg" alt="">
        </div>
      </div>
  </section>
  <section>
  <div class="flex flex-col justify-center items-center w-11/12 mx-auto py-6">
    <div class="flex justify-between w-full">
        <span>CONTACT</span>
        <a href="#"><span>SAY HI<i class="fa-solid fa-arrow-right-long fa-lg" style="color: #000000;"></i></span></a>
      </div>
      <hr class=" w-full my-3 pt-1 bg-black ">

      <div class=" m-auto grid grid-cols-12 grid-rows-2 text-3xl lg:text-8xl py-10" style="font-family: 'Climate Crisis', sans-serif;font-family: 'Inter', sans-serif;">
        <div class=" col-start-1 col-span-11 hover:animate-pulse">LET’S WORK</div>
        <div class=" col-start-3 col-span-9 hover:animate-pulse">TOGETHER</div>
      </div>

      <div class="w-full flex flex-col justify-center items-center lg:grid lg:grid-cols-3">
        <div class=" col-start-1">
          <p>WE’RE OPEN TO TALK TO GOOD PEOPLE. JUST SAY HELLO AND WE’LL START A PRODUCTIVE COOPERATION.
          </p>
          <div class="py-6 mx-auto">          
            <p>CALL US: +1 837 652 8800</p>
            <p>SAY HI: SUPPORT@BESTLOOKER.PRO</p>
          </div>
          <div class="flex flex-row justify-between w-2/3">
            <a href="#" class="  border-black pr-2"> <i class="border-2 p-1 border-black rounded-full fa-brands fa-facebook" style="color: #000000;"></i> </a>
            <a href="#" class="  border-black pr-2"> <i class="border-2 p-1 border-black rounded-full fa-brands fa-instagram" style="color: #000000;"></i> </a>
            <a href="#" class=" pr-1"><i class=" border-2 p-1 border-black rounded-full fa-brands fa-square-x-twitter" style="color: #000000;"></i></a>
          </div>

        </div>
        <div class=" lg:ml-3 lg:col-start-2 lg:col-span-2 container">
          <form class="flex flex-col" action="">
            <div class=" container grid grid-col-2 lg:justify-between pb-5 w-2/3">            
              <input class=" my-5 lg:my-0 col-start-1 mr-1 p-2 rounded-xl border-2 border-black text-xl focus-visible:outline-none" type="text" placeholder="NAME">
              <input class=" lg:col-start-2  p-2 rounded-xl border-2 border-black text-xl focus-visible:outline-none" type="text" placeholder="EMAIL">
            </div>
            <textarea  class=" p-2 rounded-xl border-2 border-black text-xl overscroll-x-none focus-visible:outline-none" type="textarea" placeholder="MESSAGE"></textarea>
            <div class=" flex flex-row justify-between items-center py-5">
              <button name="submit" class="baseline border-2 rounded-full border-black px-3 py-1 hover:bg-gray-400 hover:shadow-2xl shrink-0 lg:flex">SUBMIT</button>
              <p class="text-xs w-1/2"> All the fields are required. By sending the form you agree to the Terms & Conditions and Privacy Policy.</p>
            </div>
          </form>
        </div>
      </div>

  </div>
  </section>
  <section class="w-full bg-gray-700">
    <div class=" flex flex-col justify-center items-center lg:grid lg:grid-rows-1 w-11/12 mx-auto lg:justify-between mt-4 pt-5">
      <div class="flex flex-col col-start-1 col-span-2 justify-center items-center">
        <img class="py-4" src="./src/images/logo.png" alt="">
        <p class="w-2/3">Integer auctor aliquet martor, sed lorem malesuada eros blandit eget. Proin lacinia mortoc id odio vestibulum.</p>
        <div class="py-4">
          <p>T. +1 837 652 8800</p>
          <p>E. support@bestlooker.pro</p>
        </div>
      </div>
      <div class="flex flex-col col-start-3 px-5">
        <p class="text-xl">Company</p>
        <div class="flex flex-col py-5">
        <a class="text-sm" href="">About</a>
        <a class="text-sm" href="">Services</a>
        <a class="text-sm" href="">Portfolio</a>
        <a class="text-sm" href="">Blog</a>
        <a class="text-sm" href="">Contact</a>
        </div>
      </div>

      <div class="flex flex-col col-start-4 px-5">
        <p class="text-xl">Social Media</p>
        <div class="flex flex-col py-5">
        <a class="text-sm" href="">Facebook</a>
        <a class="text-sm" href="">Youtube</a>
        <a class="text-sm" href="">Pinterest</a>
        <a class="text-sm" href="">LinkedIn</a>
        </div>
      </div>

      <div class="flex flex-col col-start-5 px-5">
        <p class="text-xl">Legal & Press</p>
        <div class="flex flex-col py-5">
        <a class="text-sm" href="">Privacy Policy</a>
        <a class="text-sm" href="">Terms & Conditions</a>
        <a class="text-sm" href="">Presskit</a>
        </div>
      </div>
    </div>
    <div class="py-5 flex flex-raw justify-center items-center">
      <p>Based in London, United Kingdom.</p>

    </div>
  </section>

</body>

</html>