<!DOCTYPE html>
<html lang="he" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>דף הנחיתה של קובי</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;400;600;700&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />

    <!-- Tailwind -->
    @vite('resources/css/app.css')
</head>
<body class="relative font-sans overflow-x-hidden bg-neutral-900 text-white" x-data="{ open: false }">
<!-- HEADER -->
<!-- HEADER -->
<header class="fixed top-0 w-full bg-white/60 backdrop-blur-lg shadow-md z-50">
  <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-4" dir="rtl">

    <!-- תפריט דסקטופ -->
    <nav class="hidden md:flex gap-6 rtl:space-x-reverse text-sm font-medium text-gray-700">
      <a href="#hero" class="hover:text-purple-600 transition">ראשי</a>
      <a href="#about" class="hover:text-purple-600 transition">מי אני</a>
      <a href="#faq" class="hover:text-purple-600 transition">שאלות נפוצות</a>
      <a href="#portfolio" class="hover:text-purple-600 transition">דף עבודות</a>
      <a href="#contact" class="hover:text-purple-600 transition">צור קשר</a>
    </nav>

    <!-- כפתור המבורגר -->
    <button @click="open = !open" class="md:hidden flex flex-col justify-center items-center w-8 h-8 z-50 focus:outline-none space-y-1">
      <span class="sr-only">פתח תפריט</span>
      <span :class="open ? 'rotate-45 translate-y-1.5' : ''"
            class="block w-6 h-0.5 bg-purple-600 transform transition duration-300"></span>
      <span :class="open ? 'opacity-0' : 'opacity-100'"
            class="block w-6 h-0.5 bg-purple-600 transition duration-300"></span>
      <span :class="open ? '-rotate-45 -translate-y-1.5' : ''"
            class="block w-6 h-0.5 bg-purple-600 transform transition duration-300"></span>
    </button>

    <!-- לוגו -->
    <h1 class="text-xl font-bold text-purple-600 tracking-wide">Kobi Dev</h1>
  </div>
</header>

<!-- תפריט פופאפ מרכזי -->
<div 
  x-show="open"
  @click.outside="open = false"
  @click.self="open = false"
  x-transition
  class="fixed inset-0 z-[9999] bg-black/40 backdrop-blur-sm overflow-y-auto md:hidden"
>
  <div class="relative bg-white w-80 mx-auto my-10 rounded-2xl p-6 text-center space-y-6 shadow-2xl" dir="rtl">

    <!-- כפתור סגירה -->
    <button @click="open = false" class="absolute top-4 right-4 text-purple-600 text-2xl font-bold">
      ✕
    </button>

    <!-- תפריט -->
    <nav class="text-lg font-medium text-gray-800 space-y-4">
      <a href="#hero" @click="open = false" class="block hover:text-purple-600 transition">ראשי</a>
      <a href="#about" @click="open = false" class="block hover:text-purple-600 transition">מי אני</a>
      <a href="#faq" @click="open = false" class="block hover:text-purple-600 transition">שאלות נפוצות</a>
      <a href="#portfolio" @click="open = false" class="block hover:text-purple-600 transition">דף עבודות</a>
      <a href="#contact" @click="open = false" class="block hover:text-purple-600 transition">צור קשר</a>
    </nav>
  </div>
</div>

<!-- סקשן HERO (אם עדיין אין) -->
<section class="relative overflow-hidden py-40 px-6 text-white">
<!-- רקע וידאו מלא -->
<div class="absolute inset-0 w-full h-full overflow-hidden z-0">
  <video autoplay muted loop playsinline
    class="absolute top-0 left-0 w-full h-full object-cover">
    <source src="/upload/programming.mp4" type="video/mp4" />
  </video>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-4 flex justify-start">
  <div class="bg-black/60 backdrop-blur-md rounded-xl p-8 text-right border-b-4 border-purple-500 max-w-lg">
    <h1 class="text-5xl font-extrabold leading-snug text-white mb-4">
      בניית אתרי אינטרנט<br class="hidden md:inline"> ואפליקציות בקוד פתוח
    </h1>
    <p class="text-xl text-purple-100 leading-relaxed">
      אתרים חכמים. חופש מוחלט בפיתוח. תוצאה שמותאמת בדיוק לעסק שלך.
    </p>
  </div>
</div>
</section>


<!-- סקשן "מי אני" -->
<section id="about" class="relative bg-white py-24 px-6 text-gray-800 overflow-hidden bg-about-pattern" data-aos="fade-up">

  <!-- ✅ תוכן הסקשן -->
  <div class="relative max-w-7xl mx-auto flex flex-col md:flex-row-reverse items-center gap-12">
    
    <!-- תמונה בצד ימין -->
    <div class="w-full md:w-1/2">
      <img src="https://assets.nicepagecdn.com/d2cc3eaa/1848887/images/dddw-min.png" 
           alt="איור פיתוח אתרים"
           class="w-full h-auto object-contain"
           loading="lazy" />
    </div>

    <!-- טקסט בצד שמאל -->
    <div class="w-full md:w-1/2 text-right space-y-6">
      <h2 class="text-4xl font-extrabold text-purple-700 leading-snug">
        נעים להכיר,<br /> אני קובי
      </h2>
      <p class="text-lg leading-relaxed">
        מפתח אתרים ואפליקציות בקוד פתוח עם גישה לעיצוב חדשני, חופשי ונקי.  
        אני מאמין שכל עסק צריך פתרון מותאם אישית – לא תבנית מוכנה מראש.  
        שילוב של קוד איכותי עם חוויית משתמש שתופסת את העין.
      </p>

      <div class="text-purple-700 text-xl font-semibold">
        📞 050-1234567
      </div>

      <a href="#contact" class="inline-block bg-purple-600 hover:bg-purple-700 text-white text-base font-semibold px-6 py-3 rounded-full transition">
        דברו איתי
      </a>
    </div>

  </div>
</section>










<!-- סקריפטים -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({ once: true, duration: 800 });
</script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>