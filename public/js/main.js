document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contact-form');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('Merci pour votre message ! (simulation)');
      form.reset();
    });
  }

  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('opacity-100', 'translate-y-0');
      }
    });
  }, { threshold: 0.1 });

  reveals.forEach(el => {
    el.classList.add('opacity-0', 'translate-y-4', 'transition', 'duration-700');
    observer.observe(el);
  });
});
