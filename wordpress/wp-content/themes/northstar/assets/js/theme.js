(() => {
  const menuToggle = document.querySelector('.menu-toggle');
  const primaryMenu = document.querySelector('.primary-menu');

  if (menuToggle && primaryMenu) {
    menuToggle.addEventListener('click', () => {
      const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
      menuToggle.setAttribute('aria-expanded', String(!expanded));
      primaryMenu.classList.toggle('is-open');
    });
  }

  const canvas = document.getElementById('sparkle-layer');
  if (!canvas) {
    return;
  }

  const ctx = canvas.getContext('2d');
  if (!ctx) {
    return;
  }

  const stars = [];
  const createStars = (count) => {
    stars.length = 0;
    for (let i = 0; i < count; i += 1) {
      stars.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        radius: Math.random() * 1.5 + 0.2,
        alpha: Math.random(),
        delta: Math.random() * 0.015 + 0.003,
      });
    }
  };

  const resize = () => {
    const { width, height } = canvas.getBoundingClientRect();
    canvas.width = Math.floor(width);
    canvas.height = Math.floor(height);
    createStars(Math.max(60, Math.floor(width / 10)));
  };

  const draw = () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    stars.forEach((star) => {
      star.alpha += star.delta;
      if (star.alpha >= 1 || star.alpha <= 0) {
        star.delta *= -1;
      }
      ctx.globalAlpha = Math.max(0.1, Math.min(1, star.alpha));
      ctx.fillStyle = '#ffffff';
      ctx.beginPath();
      ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
      ctx.fill();
    });
    ctx.globalAlpha = 1;
    requestAnimationFrame(draw);
  };

  resize();
  draw();
  window.addEventListener('resize', resize);
})();
