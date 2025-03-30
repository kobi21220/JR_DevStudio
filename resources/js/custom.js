const canvas = document.getElementById("stars");
  const ctx = canvas.getContext("2d");

  let stars = [], w, h;
  let mouseX = 0, mouseY = 0;

  function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
    generateStars();
  }

  function generateStars() {
    stars = [];
    for (let i = 0; i < 120; i++) {
      stars.push({
        x: Math.random() * w,
        y: Math.random() * h,
        r: Math.random() * 1.5 + 0.5,
        dx: (Math.random() - 0.5) * 0.5,
        dy: (Math.random() - 0.5) * 0.5,
        opacity: Math.random(),
        blink: Math.random() < 0.5 ? true : false
      });
    }
  }

  function draw() {
    ctx.clearRect(0, 0, w, h);
    ctx.fillStyle = "white";
    for (let i = 0; i < stars.length; i++) {
      const s = stars[i];

      // אנימציית זוהר
      if (s.blink) {
        s.opacity += 0.02;
        if (s.opacity > 1) s
