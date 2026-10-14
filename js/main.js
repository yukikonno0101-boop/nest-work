const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#site-nav');
if (menuButton && navigation) {
  const mobileQuery = window.matchMedia('(max-width: 767px)');
  const closeMenu = () => {
    navigation.hidden = mobileQuery.matches;
    menuButton.setAttribute('aria-expanded', 'false');
    menuButton.setAttribute('aria-label', 'メニューを開く');
  };
  const syncMenu = () => {
    menuButton.hidden = !mobileQuery.matches;
    closeMenu();
  };
  menuButton.addEventListener('click', () => {
    const opening = menuButton.getAttribute('aria-expanded') !== 'true';
    menuButton.setAttribute('aria-expanded', String(opening));
    menuButton.setAttribute('aria-label', opening ? 'メニューを閉じる' : 'メニューを開く');
    navigation.hidden = !opening;
  });
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && mobileQuery.matches && !navigation.hidden) {
      closeMenu();
      menuButton.focus();
    }
  });
  navigation.addEventListener('click', (event) => {
    if (event.target.closest('a')) closeMenu();
  });
  mobileQuery.addEventListener('change', syncMenu);
  syncMenu();
}
const galleryLinks = document.querySelectorAll('[data-gallery]');
if (galleryLinks.length && typeof HTMLDialogElement !== 'undefined') {
  const dialog = document.createElement('dialog');
  dialog.className = 'gallery-dialog';
  dialog.setAttribute('aria-label', '施設写真の拡大表示');
  const close = document.createElement('button');
  close.type = 'button';
  close.setAttribute('aria-label', '写真を閉じる');
  close.className = 'gallery-close';
  const photo = document.createElement('img');
  const caption = document.createElement('p');
  dialog.append(close, photo, caption); document.body.append(dialog);
  galleryLinks.forEach(link => link.addEventListener('click', event => {
    event.preventDefault();
    photo.src = link.href; photo.alt = link.querySelector('img').alt;
    caption.textContent = link.querySelector('img').alt;
    dialog.showModal();
  }));
  close.addEventListener('click', () => dialog.close());
  dialog.addEventListener('click', event => {
    if (event.target === dialog) {
      const box = dialog.getBoundingClientRect();
      if (event.clientX < box.left || event.clientX > box.right || event.clientY < box.top || event.clientY > box.bottom) dialog.close();
    }
  });
}
document.querySelectorAll('.facility-slider').forEach(slider => {
  const slides = [...slider.querySelectorAll('.facility-slide')];
  const controls = slider.querySelector('.slider-controls');
  const count = slider.querySelector('.slider-count');
  const track = slider.querySelector('.facility-track');
  let index = 0;
  const show = next => {
    index = (next + slides.length) % slides.length;
    slides.forEach((slide, i) => { slide.hidden = i !== index; });
    count.textContent = (index + 1) + ' / ' + slides.length;
  };
  slider.classList.add('is-ready'); controls.hidden = false; show(0);
  slider.querySelector('[data-prev]').addEventListener('click', () => show(index - 1));
  slider.querySelector('[data-next]').addEventListener('click', () => show(index + 1));
  slider.addEventListener('keydown', event => {
    if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
      event.preventDefault(); show(index + (event.key === 'ArrowRight' ? 1 : -1));
      if (event.target.matches('.facility-slide')) slides[index].focus();
    }
  });
  let start = null; let suppressClick = false;
  track.addEventListener('touchstart', event => {
    if (event.touches.length === 1) start = {x:event.touches[0].clientX,y:event.touches[0].clientY};
    else start = null;
  }, {passive:true});
  track.addEventListener('touchend', event => {
    if (!start || !event.changedTouches.length) return;
    const dx = event.changedTouches[0].clientX - start.x;
    const dy = event.changedTouches[0].clientY - start.y;
    if (Math.abs(dx) > 50 && Math.abs(dx) > Math.abs(dy) * 1.3) {
      show(index + (dx < 0 ? 1 : -1)); suppressClick = true;
      setTimeout(() => { suppressClick = false; }, 500);
    }
    start = null;
  }, {passive:true});
  track.addEventListener('touchcancel', () => { start = null; });
  track.addEventListener('click', event => {
    if (suppressClick) { event.preventDefault(); event.stopImmediatePropagation(); suppressClick = false; }
  }, true);
});
const backToTop = document.querySelector('.back-to-top');
if (backToTop) {
  const updateBackToTop = () => {
    const shouldHide = window.scrollY < 320;
    if (shouldHide && document.activeElement === backToTop) backToTop.blur();
    backToTop.hidden = shouldHide;
  };
  window.addEventListener('scroll', updateBackToTop, {passive:true});
  updateBackToTop();
}

const heroImages = [...document.querySelectorAll('.hero-photo img')];
if (heroImages.length > 1) {
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  let currentHero = 0;
  let heroTimer;
  const stopHero = () => { clearTimeout(heroTimer); heroTimer = undefined; };
  const syncHero = () => {
    stopHero();
    if (reducedMotion.matches) {
      heroImages.forEach((image, index) => image.classList.toggle('is-active', index === 0));
      currentHero = 0;
      return;
    }
    if (document.hidden) return;
    const advanceHero = () => {
      const next = (currentHero + 1) % heroImages.length;
      if (!heroImages[next].complete || !heroImages[next].naturalWidth) {
        heroTimer = setTimeout(advanceHero, 1000);
        return;
      }
      heroImages[currentHero].classList.remove('is-active');
      heroImages[next].classList.add('is-active');
      currentHero = next;
      heroTimer = setTimeout(advanceHero, 5400);
    };
    heroTimer = setTimeout(advanceHero, 3000);
  };
  reducedMotion.addEventListener('change', syncHero);
  document.addEventListener('visibilitychange', syncHero);
  syncHero();
}
