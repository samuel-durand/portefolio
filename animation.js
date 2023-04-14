const projects = document.querySelectorAll('.project');
let isInViewport = false;

function handleScroll() {
  projects.forEach((project) => {
    // Vérifie si le projet est dans la vue de l'utilisateur
    const projectTop = project.offsetTop;
    const projectHeight = project.offsetHeight;
    const viewportHeight = window.innerHeight;
    const scrollTop = window.pageYOffset;
    const scrollBottom = scrollTop + viewportHeight;

    if (scrollBottom > projectTop && scrollTop < projectTop + projectHeight) {
      if (!isInViewport) {
        // Si le projet est dans la vue et n'était pas dans la vue précédemment, active l'animation
        isInViewport = true;
        project.classList.add('in-view');
      }
    } else {
      if (isInViewport) {
        // Si le projet n'est plus dans la vue et était dans la vue précédemment, désactive l'animation
        isInViewport = false;
        project.classList.remove('in-view');
      }
    }
  });
}

window.addEventListener('scroll', handleScroll);






