<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img
    src="<?=base_url()?>/public/uploads/image004.gif"
    height="15"
    alt="MMSU"
    loading="lazy"
  />
  <a class="navbar-brand" href="#">MMSU</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url()?>content/index">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url()?>content/add">Add Accomplishment</a>
      </li>
      
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php if(session()->get('isAdminLoggedIn')): ?>
                    000<?=session()->get('fname') ?>
                <?php endif;?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?=base_url()?>admin/logout">Logout</a></li>
            </ul>
      </li>
    </ul>
  </div>
</nav>