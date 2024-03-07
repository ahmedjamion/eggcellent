function setUpTabs() {
  document.querySelectorAll(".tab-button").forEach((button) => {
    button.addEventListener("click", () => {
      const sideBar = button.parentElement;
      const sideBarContainer = sideBar.parentElement;
      const tabName = button.dataset.forTab;
      const tabActive = sideBarContainer.querySelector(
        `.tab-content[data-tab="${tabName}"]`
      );

      sideBar.querySelectorAll(".tab-button").forEach((button) => {
        button.classList.remove("tab-button-active");
      });

      sideBarContainer.querySelectorAll(".tab-content").forEach((tab) => {
        tab.classList.remove("tab-content-active");
      });

      button.classList.add("tab-button-active");
      tabActive.classList.add("tab-content-active");
    });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  setUpTabs();

  document.querySelectorAll(".sidebar-main").forEach((sideBarContainer) => {
    sideBarContainer.querySelector(".tab-button").click();
  });
});
