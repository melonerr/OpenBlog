<template>
  <div id="sidebar">
    <nav class="sidebar">
      <div class="sidebar-content js-simplebar bg-melonerr">
        <a class="sidebar-brand" href="/">
          <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">Pages</li>

          <li class="sidebar-item active">
            <a class="sidebar-link" href="/">
              <i class="align-middle" data-feather="sliders"></i>
              <span class="align-middle">Home</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/about">
              <i class="align-middle" data-feather="user"></i>
              <span class="align-middle">About</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/editor">
              <i class="align-middle" data-feather="credit-card"></i>
              <span class="align-middle">Editor</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/blogs-all">
              <i class="align-middle" data-feather="book"></i>
              <span class="align-middle">All Blogs</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="settings"></i>
              <span class="align-middle">Log out</span>
            </a>
          </li>

          <li class="sidebar-header">Tools & Components</li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="view/docs" target="_blank">
              <i class="align-middle" data-feather="coffee"></i>
              <span class="align-middle">Docs</span>
            </a>
          </li>
        </ul>

        <div class="sidebar-cta">
          <div class="sidebar-cta-content">
            <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
            <div class="mb-3 text-sm">
              Are you looking for more components? Check out our premium
              version.
            </div>
            <a
              href="https://adminkit.io/pricing"
              target="_blank"
              class="btn btn-primary btn-block"
              >Upgrade to Pro</a
            >
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {};
</script>

<style>
.bg-melonerr,
.sidebar-link {
  background-color: #435168 !important;
}
.sidebar-link {
  color: white !important;
}
.sidebar {
  height: 100%;
}
</style>