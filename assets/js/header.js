const headerButton = document.querySelector("#header__hamburger");
const header = document.querySelector("header");

if (header) {
  let prevoiusScroll = window.scrollY;

  window.addEventListener("scroll", () => {
    const currentScroll = window.scrollY;

    if (currentScroll < prevoiusScroll) {
      header.classList.remove("hide");
    } else {
      header.classList.add("hide");
    }

    prevoiusScroll = currentScroll;
  });
}

if (headerButton) {
  const headerMenu = document.querySelector("#header__menu--mobile");
  const body = document.querySelector("body");
  const headerSubmenuButtons = headerMenu.querySelectorAll(".list__btn--sub");

  headerButton.addEventListener("click", () => {
    headerMenu.classList.toggle("show");

    body.classList.toggle("noscroll");

    headerSubmenuButtons.forEach((el) => {
      el.nextElementSibling.classList.remove("show");
    });
  });

  if (headerSubmenuButtons.length) {
    headerSubmenuButtons.forEach((el) => {
      el.addEventListener("click", () => {
        el.nextElementSibling.classList.toggle("show");
      });
    });
  }
}
