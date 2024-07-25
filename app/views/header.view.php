<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline</title>
    <link href="<?=ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/headers.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
<header class="p-3 mb-3 border-bottom shadow">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?=ROOT?>" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="<?=ROOT?>/search" class="nav-link px-2 link-body-emphasis">Search</a></li>
          
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="<?=ROOT?>/profile" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?=get_image(user('image'))?>" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a></li>
            <li><a class="dropdown-item" href="<?=ROOT?>/settings">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=ROOT?>/logout">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <main class="p-4">