<!--
Stephan Moncavage
CST-236
eCommerce Site Milestone Project
Milestone 4
21 March 2021
Navigation Update to seperate file
-->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CST236-eCommerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/CST236-Activity1/eCommerceSite/presentation/views/Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/CST236-Activity1/eCommerceSite/presentation/views/About.php">About</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="/CST236-Activity1/eCommerceSite/presentation/views/Contact.php">Contact</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="/CST236-Activity1/eCommerceSite/presentation/views/Store.php">Store</a>
        </li>
        </ul>
      <form class="d-flex" style=text-align:"right">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" formaction="/CST236-Activity1/eCommerceSite/presentation/views/search.html">Search</button>
      </form>
    </div>
  </div>
</nav>

